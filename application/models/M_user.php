<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_user extends CI_Model {

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

		
	}

	public function lihatBarang($item,$id)
	{
		$array = array('id' => $item,
					   'id_user' => $id
					  );
		$this->db->where($array);
		$query = $this->db->get('item');
		
		return $query->result();
	}

	public function barangUser($id)
	{
		$array = array('id_user' => $id);
		$this->db->where($array);
		$query = $this->db->get('item');
		
		return $query->result();
	}

	public function deleteBarang($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('item');
	}

	public function changePassword($id,$password){
		
		$data = array(
		    'password' => md5($password)
		);

		$this->db->where('id', $id);
		$this->db->update('user', $data);
	}

	public function activeId($id){
		
		$data = array(
		    'active' => 'Y'
		);

		$this->db->where('id', $id);
		$this->db->update('user', $data);
	}

	public function detailProfile($id)
	{
		$array = array('id' => $id);
		$this->db->where($array);
		$query = $this->db->get('user');

		return $query->result();
	}

        public function findId($email)
	{
		$array = array('email' => $email);
		$this->db->where($array);
		$query = $this->db->get('user');
                $id='';
		foreach ($query->result() as $row)
		{
		        $id=$row->id;
		}
		return $id;
	}

	public function tmbhPenemuan($foto,$id)
	{
		$daerah=$this->input->post('daerah');
		$kategori=$this->input->post('kategori');
		$tgl=$this->input->post('tgl');
		$waktu=$this->input->post('waktu');
		$note=$this->input->post('note');
		$kronologis=$this->input->post('kronologis');
		$tag=$this->input->post('tag');
		$brand=$this->input->post('brand');

		$sql = $this->db->query("SELECT id_city FROM location WHERE id='$daerah'");
		$query=$sql->result();
		foreach ($query as $data);
		$data = array(
			        'picture' => $foto[0].",".$foto[1].",".$foto[2],
			        'status' => 'found',
			        'id_user' => $id,
			        'id_city' => $data->id_city,
			        'id_location' => $daerah,
			        'id_categori' => $kategori,
			        'date' => $tgl,
			        'time' => $waktu,
			        'note' => $note,
			        'tag' => $tag,
			        'brand' => $brand,
			        'chronological' => $kronologis
			);

			$this->db->insert('item', $data);
	}

	public function tmbhKehilangan($foto,$id)
	{
		$daerah=$this->input->post('daerah');
		$kategori=$this->input->post('kategori');
		$tgl=$this->input->post('tgl');
		$waktu=$this->input->post('waktu');
		$note=$this->input->post('note');
		$kronologis=$this->input->post('kronologis');
		$tag=$this->input->post('tag');
		$brand=$this->input->post('brand');

		$sql = $this->db->query("SELECT id_city FROM location WHERE id='$daerah'");
		$query=$sql->result();
		foreach ($query as $data);
		$data = array(
			        'picture' => $foto[0].",".$foto[1].",".$foto[2],
			        'status' => 'missing',
			        'id_user' => $id,
			        'id_city' => $data->id_city,
			        'id_location' => $daerah,
			        'id_categori' => $kategori,
			        'date' => $tgl,
			        'time' => $waktu,
			        'note' => $note,
			        'tag' => $tag,
			        'brand' => $brand,
			        'chronological' => $kronologis
			);

			$this->db->insert('item', $data);
	}

	public function editItem($foto,$id_item){
		$daerah=$this->input->post('daerah');
		$kategori=$this->input->post('kategori');
		$tgl=$this->input->post('tgl');
		$waktu=$this->input->post('waktu');
		$note=$this->input->post('note');
		$kronologis=$this->input->post('kronologis');
		$tag=$this->input->post('tag');
		$brand=$this->input->post('brand');
		
		$sql = $this->db->query("SELECT id_city FROM location WHERE id='$daerah'");
		$query=$sql->result();
		foreach ($query as $data);
		$data = array(
		        	'picture' => $foto[0].",".$foto[1].",".$foto[2],
			        'id_city' => $data->id_city,
			        'id_location' => $daerah,
			        'id_categori' => $kategori,
			        'date' => $tgl,
			        'time' => $waktu,
			        'note' => $note,
			        'tag' => $tag,
			        'brand' => $brand,
			        'chronological' => $kronologis
		);

		$this->db->where('id', $id_item);
		$this->db->update('item', $data);
	}

	public function editProfile($sts,$foto){
		$id = $this->input->post('id');
		$nama = $this->input->post('name');
		$no = $this->input->post('no_telp');
		$id_card = $this->input->post('id_card');
		$alamat = $this->input->post('alamat');
		$email = $this->input->post('email');
		$user = $this->input->post('username');
		$tmpt_lahir = $this->input->post('tmpt_lahir');
		$tgl_lahir = $this->input->post('tgl_lahir');
		$status = $this->input->post('status');
		$gender = $this->input->post('gender');
		$card_type = $this->input->post('card_type');
		$password = $this->input->post('ubah_pw');
		$confirmPassword = $this->input->post('confirm_pw');

		if($sts==TRUE){
			$data = array(
			        'name' => $nama,
			        'contact' => $no,
			        'address' => $alamat,
			        'email' => $email,
			        'username' => $user,
			        'born_place' => $tmpt_lahir,
			        'born_date' => $tgl_lahir,
			        'status' => $status,
			        'gender' => $gender,
			        'id_card' => $id_card,
			        'card_type' => $card_type
			);

			$this->db->where('id', $id);
			$this->db->update('user', $data);
		} else {
			$data = array(
			        'name' => $nama,
			        'contact' => $no,
			        'address' => $alamat,
			        'email' => $email,
			        'username' => $user,
			        'picture' => $foto,
			        'born_place' => $tmpt_lahir,
			        'born_date' => $tgl_lahir,
			        'status' => $status,
			        'gender' => $gender,
			        'id_card' => $id_card,
			        'card_type' => $card_type
			);

			$this->db->where('id', $id);
			$this->db->update('user', $data);
		}
	}

	public function register(){
		$user = $this->input->post('user');
		$no = $this->input->post('no_telp');
		$email = $this->input->post('email');
		$pw = $this->input->post('password');
		$cpw = $this->input->post('confirmPassword');
                $cari=$this->m_user->findId($email);
		if($pw==$cpw && $cari==''){
			$data = array(
			        'username' => $user,
			        'contact' => $no,
			        'email' => $email,
			        'password' => md5($pw)
			);

			$this->db->insert('user', $data);
			return true;
		} else {
			return false;
		}
		
	}

	public function confirm()
	{
		$name = $this->input->post('user');
		$pw = $this->input->post('password');
		$remember = $this->input->post('remember');
		$array = array('username' => $name,
						'password'=> md5($pw),
						'active'=> 'Y');
		$this->db->where($array);
		$query = $this->db->get('user');
		if($query->num_rows() > 0){
			foreach ($query->result() as $row)
			{
			    $user = $row->username;
			    $id = $row->id;
				$newdata = array(
				        'username'  => $user,
				        'id'     => $id,
				        'logged_in' => TRUE
				);
				/* remember me
				 * if($remember!=null){
				 * 		$this->input->set_cookie('username', $user, 86500);
				 * 		$this->input->set_cookie('id', $id, 86500);
				 * 		$this->input->set_cookie('username', $user, 86500);
				 * }					
				*/
				$this->session->set_userdata($newdata);
				redirect('login/');
			}
			return $id;
		}else{
			redirect('login/gagal');
		}
	}
}
	