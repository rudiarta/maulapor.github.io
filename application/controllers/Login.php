<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	public function __construct(){
		parent::__construct();

		$this->load->model('m_user');
		$this->load->model('m_item');
		$this->load->library('session');
		$this->load->library('image_lib');
		$this->load->helper('cookie');
	}

	public function index()
	{
		if($this->session->logged_in == TRUE){	
			$this->session;
			$id=$this->session->userdata('id');
			$data['login']=$this->m_user->detailProfile($id);
			$data['city']=$this->m_item->city();
			$data['lokasi']=$this->m_item->location();
			$data['kategori']=$this->m_item->itemCategory();
			$data['barang']=$this->m_user->barangUser($id);
			
			//$this->load->view('login/login_view_header_logged');
			//$this->load->view('login/login_view_content',$data);
			$this->load->view('login/login',$data);
		}else{
			redirect('home');
		}
	}

	public function edit($item)
	{
		if($this->session->logged_in == TRUE){	
			$this->session;
			$id=$this->session->userdata('id');
			$data['city']=$this->m_item->city();
			$data['lokasi']=$this->m_item->location();
			$data['kategori']=$this->m_item->itemCategory();
			$data['barang']=$this->m_user->lihatBarang($item,$id);
			$this->load->view('login/login_view_header_logged');
			$this->load->view('login/login_view_content_edit',$data);
		}else{
			redirect('home');
		}
	}

	public function validasi()
	{	
		$this->session;
		$this->m_user->confirm();
	}

	public function activeid($id){
		$this->m_user->activeId($id);
		redirect('home');
	}

	public function daftar(){
		if($this->m_user->register()==true){
			$email = $this->input->post('email');
			$id=$this->m_user->findId($email);
			/**test**/
			$config = Array(
				'protocol' => 'smtp',
				'smtp_host' => 'mx1.idhostinger.com',
				'smtp_port' => 2525,
				'smtp_user' => 'admin@maulapor.com',
				'mailtype' => 'html',
				'smtp_pass' => 'maulapor1234'
			);

			$this->load->library('email', $config);

			$this->email->from('admin@maulapor.com', 'Maulapor.com');
			$this->email->to($email);

			$this->email->subject('Activation ID');
			$this->email->message('Klik <a href="https://maulapor.com/login/activeid/'.$id.'">activation</a> untuk mengaktifasi ID anda');
			if($this->email->send()){
				echo "<script>window.alert('Harap Cek Email Anda dan Lakukan Aktivasi'); window.location=('https://maulapor.com/home')</script>"; 
			}else{
				show_error($this->email->print_debugger());
			}
			/**---**/
		} else {
			echo "<script>window.alert('Confirm password salah / Email Sudah terdaftar!!!'); window.location=('https://maulapor.com/home')</script>";                      
		}
		
	}

	public function gagal(){
		echo"<script>window.alert('Maaf Password atau Username anda SALAH / ID anda belum aktiv !!!');history.go(-1)</script>";
	}

	public function control($act){
		if($act=='editprofile'){
			$foto = $_FILES['foto']['name'];
			if(!empty($foto)){
				$config['upload_path']          = './pic/user/';
		        $config['allowed_types']        = 'gif|jpg|png';
		        $config['max_size']             = 2048;
		        $config['encrypt_name']         = TRUE;

		        $this->load->library('upload', $config);

		        if (!$this->upload->do_upload('foto')){
		        	echo"<script>window.alert('Sory, ".$this->upload->display_errors('','')." !!!');history.go(-1)</script>";
		        } else {
		        	$config['image_library'] = 'gd2';
					$config['source_image'] = './pic/'.$this->upload->data('file_name');
					$config['create_thumb'] = FALSE;
					$config['maintain_ratio'] = TRUE;
					$config['width']         = 400;
					$config['height']       = 520;

					$this->load->library('image_lib', $config);

					$this->image_lib->resize();	
					$isEmpty=FALSE;		
					$this->m_user->editProfile($isEmpty,$this->upload->data('file_name'));	
					redirect('login/');
		        }
			} else {
				$isEmpty=TRUE;	
				$this->m_user->editProfile($isEmpty,'');
				redirect('login/');	
			}

		} 
		elseif($act=='tambahPenemuan'){
			$foto=array(0=>$_FILES['foto1']['name'],1=>$_FILES['foto2']['name'],2=>$_FILES['foto3']['name']);
			$id = $this->session->userdata('id');
			for($i=0;$i<3;$i++){
				if($i==0){
					$tmp='foto1';
				}
				elseif($i==1){
					$tmp='foto2';
				}
				elseif($i==2){
					$tmp='foto3';
				}
				if(!empty($foto[$i])){
					$config['upload_path']          = './pic/';
			        $config['allowed_types']        = 'gif|jpg|png';
			        $config['max_size']             = 2048;
			        $config['encrypt_name']         = TRUE;

			        $this->load->library('upload', $config);

			        if (!$this->upload->do_upload($tmp)){
			        	$foto[$i]="";
			        } else {
			        	$config['image_library'] = 'gd2';
						$config['source_image'] = './pic/'.$this->upload->data('file_name');
						$config['create_thumb'] = FALSE;
						$config['maintain_ratio'] = TRUE;
						$config['width']         = 400;
						$config['height']       = 520;
						$config['source_image'] = './pic/'.$this->upload->data('file_name');
						$config['wm_overlay_path'] = './pic/system/icon.png';
						$config['wm_type'] = 'overlay';
						$config['wm_vrt_alignment'] = 'top';
						$config['wm_hor_alignment'] = 'left';
						$config['wm_padding'] = '7';

						
						$this->image_lib->initialize($config);
						$this->image_lib->resize();	
						$this->image_lib->watermark();
						$foto[$i]=$this->upload->data('file_name');
						
			        }
				} else {
					$foto[$i]="";
				}
			}
			$this->m_user->tmbhPenemuan($foto,$id);
			redirect('login/');
		}
		elseif($act=='tambahKehilangan'){
			$foto=array(0=>$_FILES['foto1']['name'],1=>$_FILES['foto2']['name'],2=>$_FILES['foto3']['name']);
			$id = $this->session->userdata('id');
			for($i=0;$i<3;$i++){
				if($i==0){
					$tmp='foto1';
				}
				elseif($i==1){
					$tmp='foto2';
				}
				elseif($i==2){
					$tmp='foto3';
				}
				if(!empty($foto[$i])){
					$config['upload_path']          = './pic/';
			        $config['allowed_types']        = 'gif|jpg|png';
			        $config['max_size']             = 2048;
			        $config['encrypt_name']         = TRUE;

			        $this->load->library('upload', $config);

			        if (!$this->upload->do_upload($tmp)){
			        	$foto[$i]="";
			        } else {
			        	$config['image_library'] = 'gd2';
						$config['source_image'] = './pic/'.$this->upload->data('file_name');
						$config['create_thumb'] = FALSE;
						$config['maintain_ratio'] = TRUE;
						$config['width']         = 400;
						$config['height']       = 520;
						$config['source_image'] = './pic/'.$this->upload->data('file_name');
						$config['wm_overlay_path'] = './pic/system/icon.png';
						$config['wm_type'] = 'overlay';
						$config['wm_vrt_alignment'] = 'top';
						$config['wm_hor_alignment'] = 'left';
						$config['wm_padding'] = '7';

						
						$this->image_lib->initialize($config);
						$this->image_lib->resize();	
						$this->image_lib->watermark();
						$foto[$i]=$this->upload->data('file_name');
						
			        }
				} else {
					$foto[$i]="";
				}
			}
			$this->m_user->tmbhKehilangan($foto,$id);
			redirect('login/');
		}
		elseif($act=='editItem'){
			  $poto=$this->input->post('poto');
			  $id=$this->input->post('id');
              $tampung = $poto;
              $tampung1 = explode(",", $tampung); 
              $foto=array(0=>$_FILES['foto1']['name'],1=>$_FILES['foto2']['name'],2=>$_FILES['foto3']['name']);
              for ($i=0; $i < 3; $i++) { 
              	if($i==0){
					$tmp='foto1';
				}
				elseif($i==1){
					$tmp='foto2';
				}
				elseif($i==2){
					$tmp='foto3';
				}
              	if($tampung1[$i]=="" AND !empty($foto[$i])){
              		$config['upload_path']          = './pic/';
			        $config['allowed_types']        = 'gif|jpg|png';
			        $config['max_size']             = 2048;
			        $config['encrypt_name']         = TRUE;

			        $this->load->library('upload', $config);

			        if (!$this->upload->do_upload($tmp)){
			        	$tampung1[$i]="";
			        } else {
			        	$config['image_library'] = 'gd2';
						$config['source_image'] = './pic/'.$this->upload->data('file_name');
						$config['create_thumb'] = FALSE;
						$config['maintain_ratio'] = TRUE;
						$config['width']         = 400;
						$config['height']       = 520;
						$config['source_image'] = './pic/'.$this->upload->data('file_name');
						$config['wm_overlay_path'] = './pic/system/icon.png';
						$config['wm_type'] = 'overlay';
						$config['wm_vrt_alignment'] = 'top';
						$config['wm_hor_alignment'] = 'left';
						$config['wm_padding'] = '7';

						
						$this->image_lib->initialize($config);
						$this->image_lib->resize();	
						$this->image_lib->watermark();
						$tampung1[$i]=$this->upload->data('file_name');
						
			        }
              	} elseif(!empty($tampung1[$i]) AND !empty($foto[$i])){
              		$config['upload_path']          = './pic/';
			        $config['allowed_types']        = 'gif|jpg|png';
			        $config['max_size']             = 2048;
			        $config['encrypt_name']         = TRUE;

			        $this->load->library('upload', $config);

			        if (!$this->upload->do_upload($tmp)){
			        	$tampung1[$i]="";
			        } else {
			        	$config['image_library'] = 'gd2';
						$config['source_image'] = './pic/'.$this->upload->data('file_name');
						$config['create_thumb'] = FALSE;
						$config['maintain_ratio'] = TRUE;
						$config['width']         = 400;
						$config['height']       = 520;
						$config['source_image'] = './pic/'.$this->upload->data('file_name');
						$config['wm_overlay_path'] = './pic/system/icon.png';
						$config['wm_type'] = 'overlay';
						$config['wm_vrt_alignment'] = 'top';
						$config['wm_hor_alignment'] = 'left';
						$config['wm_padding'] = '7';

						
						$this->image_lib->initialize($config);
						$this->image_lib->resize();	
						$this->image_lib->watermark();
						$tampung1[$i]=$this->upload->data('file_name');
						
			        }
              	}else {
              		$tampung1[$i]=$tampung1[$i];
              		
              	}

              }

            $this->m_user->editItem($tampung1,$id);
			echo"<script>window.alert('Data Berhasil di EDIT');history.go(-1)</script>";

		}
		elseif($act=='changePassword'){
			$id=$this->session->userdata('id');
			$oldp=$this->input->post('oldp');
			$newp=$this->input->post('newp');
			$confirmp=$this->input->post('confirmp');
			$profile=$this->m_user->detailProfile($id);
			foreach ($profile as $data);

			if(md5($oldp)==$data->password){
				if($newp==$confirmp){
					$this->m_user->changePassword($id,$confirmp);
					echo"<script>window.alert('Password berhasil di rubah');history.go(-1)</script>";
				}else{
					echo"<script>window.alert('Password baru Anda tidak sama dengan Confirm');history.go(-1)</script>";
				}
			}else{
				echo"<script>window.alert('Password Lama Anda salah');history.go(-1)</script>";
			}
		}
		elseif($act=='tambahEvent'){
			echo "ss";
		}
		else {
			redirect('login');
		}
	}

	public function delete_barang($id){
		$this->m_user->deleteBarang($id);
		redirect('login');
	}

	/*
	public function changepassword(){
		if($this->session->logged_in == TRUE){	
			$this->session;
			$id=$this->session->userdata('id');
			$this->load->view('login/login_view_header_logged');
			$this->load->view('login/login_view_content_password');
		}else{
			redirect('home');
		}
	}
	*/

	public function log_out()
	{
		$array_items = array('username', 'id', 'logged_in');

		$this->session->unset_userdata($array_items);
		$this->session->sess_destroy();
		redirect('login');
	}
}
