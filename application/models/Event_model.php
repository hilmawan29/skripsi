<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Event_model extends CI_Model
{
	public function select_all($limit) {
		if ($limit == "all" ) {
			$query = "SELECT `event`. `id`,`event`. `judul`, `event`. `deskripsi`, `event`. `tanggal`, `event`. `lokasi`,`event`. `gambar`
				  FROM `event`
				 ";	
		}else{
			$query = "SELECT `event`. `id`,`event`. `judul`, `event`. `deskripsi`, `event`. `tanggal`, `event`. `lokasi`, `event`. `gambar`
					  FROM `event` LIMIT $limit
					 ";
		}
			return $this->db->query($query)->result_array(); 
	}

	public function delete($id) {
		$this->db->where('id', $id);
		$this->db->delete('event');
	}

	public function update($id, $data){
        $this->db->where('id', $id);
		$this->db->update('event', $data);
	}

	public function create($data){
	var_dump($data);
	$this->db->insert('event', $data);
	}

    public function get_data_by_id($id) {
		$query = "SELECT `event`. `id`,`event`. `judul`, `event`. `deskripsi`, `event`. `tanggal`, `event`. `lokasi`, `event`. `gambar`
				  FROM `event` WHERE `id` = $id
				 ";
				 return $this->db->query($query)->row_array();
	}
}