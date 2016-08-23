<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_article extends CI_Model {

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

	public function hotArticle()
	{
		$query = $this->db->query('SELECT * FROM article ORDER BY rate DESC LIMIT 5');
		
		return $query->result();
	}
	
	public function tambahArticle() {
		$data = array(
				'title' => $this->input->post('judul'),
				'date' => 'missing',
				'content' => $id,
				'picture' => $data->id_city,
				'id_user' => $daerah
		);
		
		$this->db->insert('article', $data);
	}
}
?>