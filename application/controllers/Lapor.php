<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lapor extends CI_Controller {

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

		$this->load->model('m_item');
		$this->load->library('session');
		$this->load->helper('cookie');
	}

	public function kehilangan($index=1)
	{
		$tmp = $index;
		$index = ($index-1)*12;
		$lokasi = $this->input->get('lokasi');
		$kategori = $this->input->get('kategori');
		$search = $this->input->get('search');
		$status = 'missing';
		if($lokasi != '' OR $kategori != '' OR $search != ''){
			$data['categoryMissing'] = $this->m_item->categorySpesific($lokasi, $kategori, $search, $status);

		} else {
			$data['categoryMissing'] = $this->m_item->categoryMissing($index);
			
		}

		$data['countMissing'] = $this->m_item->countMissing();
		$data['index'] = $tmp;
		$data['lastMonth']=$this->m_item->lastMonth($status);
		$data['mod']="kehilangan";
		$data['category']=$this->m_item->itemCategory();
		$data['location']=$this->m_item->location();
		
		if($this->session->logged_in == FALSE){
			//$this->load->view('home/home_view_header');
			//$this->load->view('home/home_view_content_list',$data);
			//$this->load->view('home/home_view_footer');
			$this->load->view('home/lapor',$data);
		}else{
			//$this->load->view('home/home_view_header_logged');
			//$this->load->view('home/home_view_content_list',$data);
			//$this->load->view('home/home_view_footer');
			$this->load->view('home/lapor_login',$data);
		}
	}

	public function penemuan($index=1)
	{
		$tmp = $index;
		$index = ($index-1)*12;
		$lokasi = $this->input->get('lokasi');
		$kategori = $this->input->get('kategori');
		$search = $this->input->get('search');
		$status = 'found';
		if($lokasi != '' OR $kategori != '' OR $search != ''){
			$data['categoryFound'] = $this->m_item->categorySpesific($lokasi, $kategori, $search, $status);
		} else {
			$data['categoryFound'] = $this->m_item->categoryFound($index);
		}

		$data['countFound'] = $this->m_item->countFound();
		$data['index'] = $tmp;
		$data['lastMonth']=$this->m_item->lastMonth($status);
		$data['mod']="penemuan";
		$data['category']=$this->m_item->itemCategory();
		$data['location']=$this->m_item->location();
		
		if($this->session->logged_in == FALSE){
			//$this->load->view('home/home_view_header');
			//$this->load->view('home/home_view_content_list',$data);
			//$this->load->view('home/home_view_footer');
			$this->load->view('home/lapor',$data);
		}else{
			//$this->load->view('home/home_view_header_logged');
			//$this->load->view('home/home_view_content_list',$data);
			//$this->load->view('home/home_view_footer');
			$this->load->view('home/lapor_login',$data);
		}
	}

	public function detail($id)
	{	
		$data['detail'] = $this->m_item->detailItem($id);
		if(!empty($id) and !empty($data['detail'])){
			if($this->session->logged_in == FALSE){
				//$this->load->view('home/home_view_header');
				//$this->load->view('home/home_view_content_detail',$data);
				//$this->load->view('home/home_view_footer');
				$this->load->view('home/lapor_detail',$data);
			}else{
				//$this->load->view('home/home_view_header_logged');
				//$this->load->view('home/home_view_content_detail',$data);
				//$this->load->view('home/home_view_footer');
				$this->load->view('home/lapor_detail_login',$data);
			}
		} else {
			redirect('home/');
		}
	}
}
