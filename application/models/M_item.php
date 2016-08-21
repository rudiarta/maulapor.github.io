<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_item extends CI_Model {

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

	public function hotMissingItem()
	{
		$query = $this->db->query("select i.id as id, i.picture as picture, i.tag as tag, u.name as name, i.note as note from item i join user u where i.status='missing' and u.id=i.id_user order by rate desc limit 4");
		
		return $query->result();
	}

	public function hotfoundItem()
	{
		$query = $this->db->query("select i.id as id, i.picture as picture, i.tag as tag, u.name as name, i.note as note from item i join user u where i.status='found' and u.id=i.id_user order by rate desc limit 4");
		
		return $query->result();
	}

	public function countMissing()
	{
		$query = $this->db->query("select count(id) as count from item where status='missing'");
		
		return $query->result();
	}

	public function countFound()
	{
		$query = $this->db->query("select count(id) as count from item where status='found'");
		
		return $query->result();
	}

	public function countSuccess()
	{
		$query = $this->db->query("select count(id) as count from report");
		
		return $query->result();
	}

	public function categoryFound($index)
	{
		$query = $this->db->query("select i.id as id, i.picture as picture, i.tag as tag, u.name as name, i.note as note from item i join user u where i.status='found' and u.id=i.id_user limit $index,12");
		
		return $query->result();
	}

	public function categoryMissing($index)
	{
		$query = $this->db->query("select i.id as id, i.picture as picture, i.tag as tag, u.name as name, i.note as note from item i join user u where i.status='missing' and u.id=i.id_user limit $index,12");
		
		return $query->result();
	}

	public function detailItem($id)
	{
		$this->db->select('user.name as name_user, item.note as note, location.name as location, item.date as date, 
			item.picture as picture, item.tag as tag, city.name as city, item_category.name as category, user.contact as contact, user.email as email, item.chronological as chronological');
		$this->db->from('item');
		$this->db->join('item_category', 'item_category.id = item.id_categori');
		$this->db->join('city', 'city.id = item.id_city');
		$this->db->join('location', 'location.id = item.id_location');
		$this->db->join('user', 'user.id = item.id_user');
		$this->db->where('item.id', $id);
		$query = $this->db->get();
		
		return $query->result();
	}

	public function itemCategory()
	{
		$query = $this->db->query("select * from item_category");
		
		return $query->result();
	}

	public function categorySpesific($location, $kategori, $search, $status)
	{
		if(!empty($location) AND !empty($kategori) AND !empty($search)){
			$query = $this->db->query("select i.id as id, i.picture as picture, i.tag as tag, u.name as name, i.note as note from item i join user u  where i.id_user=u.id AND i.id_location='$location' AND i.id_categori='$kategori' AND i.status='$status' AND i.tag like '%$search%' limit 12");
		}
		elseif(!empty($kategori) AND !empty($location)){
			$query = $this->db->query("select i.id as id, i.picture as picture, i.tag as tag, u.name as name, i.note as note from item i join user u  where u.id=i.id_user and i.id_categori='$kategori' AND i.id_location='$location' AND i.status='missing' limit 12");
		}
		elseif(!empty($location) AND !empty($search) ){
			$query = $this->db->query("select i.id as id, i.picture as picture, i.tag as tag, u.name as name, i.note as note from item i join user u  where i.id_user=u.id AND i.id_location='$location' AND i.tag like '%$search%' AND i.status='$status' limit 12");
		}
		elseif(!empty($kategori) AND !empty($search) ){
			$query = $this->db->query("sselect i.id as id, i.picture as picture, i.tag as tag, u.name as name, i.note as note from item i join user u  where i.id_user=u.id AND i.id_categori='$kategori' AND i.tag like '%$search%' AND i.status='$status' limit 12");
		}
		elseif(!empty($location)){
			$query = $this->db->query("select i.id as id, i.picture as picture, i.tag as tag, u.name as name, i.note as note from item i join user u  where i.id_user=u.id AND i.id_location='$location' AND i.status='$status' limit 12");
		}
		elseif(!empty($kategori)){
			$query = $this->db->query("select i.id as id, i.picture as picture, i.tag as tag, u.name as name, i.note as note from item i join user u  where i.id_user=u.id AND i.id_categori='$kategori' AND i.status='$status' limit 12");
		}
		elseif(!empty($search)){
			$query = $this->db->query("select i.id as id, i.picture as picture, i.tag as tag, u.name as name, i.note as note from item i join user u  where i.id_user=u.id AND i.tag like '%$search%' AND i.status='$status' limit 12");
		}/*
		elseif(){
			$query = $this->db->query("select * from item where tag like '%w%' status='$status' limit 12");
		}
		*/
		return $query->result();
	}

	public function lastMonth($status)
	{
		$query = $this->db->query("select * from item where status='$status' limit 8");
		
		return $query->result();
	}

	public function location()
	{
		$query = $this->db->query("select l.id, l.name as name, c.name as kota, c.id as id_city from location l join city c where l.id_city = c.id");
		
		return $query->result();
	}

	public function city()
	{
		$query = $this->db->get('city');
		
		return $query->result();
	}
}
?>