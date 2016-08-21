<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

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
		$this->load->model('m_article');
		$this->load->library('session');
		$this->load->helper('cookie');
	}

	public function index()
	{
		$data['queryMissing'] = $this->m_item->hotMissingItem();
		$data['queryFound'] = $this->m_item->hotfoundItem();
		$data['countMissing'] = $this->m_item->countMissing();
		$data['countFound'] = $this->m_item->countFound();
		$data['countSuccess'] = $this->m_item->countSuccess();
		$data['hotArticle'] = $this->m_article->hotArticle();
		
		if($this->session->logged_in == FALSE){
			//$this->load->view('home/home_view_header');
			//$this->load->view('home/home_view_content',$data);
			//$this->load->view('home/home_view_footer');
			$this->load->view('home/home',$data);
		}else{
			//$this->load->view('home/home_view_header_logged');
			//$this->load->view('home/home_view_content',$data);
			//$this->load->view('home/home_view_footer');
			$this->load->view('home/home_login',$data);
		}

	}

	public function about()
	{
		if($this->session->logged_in == FALSE){
			//$this->load->view('home/home_view_header');
			//$this->load->view('home/home_view_content_about');
			//$this->load->view('home/home_view_footer');
			$this->load->view('home/home_about');
		}else{
			//$this->load->view('home/home_view_header_logged');
			//$this->load->view('home/home_view_content_about');
			//$this->load->view('home/home_view_footer');
			$this->load->view('home/home_about_login');
		}
	}

	public function ketentuan()
	{
		if($this->session->logged_in == FALSE){
			//$this->load->view('home/home_view_header');
			//$this->load->view('home/home_view_content_ketentuan');
			//$this->load->view('home/home_view_footer');
			$this->load->view('home/home_konten');
		}else{
			//$this->load->view('home/home_view_header_logged');
			//$this->load->view('home/home_view_content_ketentuan');
			//$this->load->view('home/home_view_footer');
			$this->load->view('home/home_konten_login');
		}
	}
}
