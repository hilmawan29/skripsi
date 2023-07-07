<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Artikel_model extends CI_Model
{
	public function select_all($limit) {
		$query = "SELECT `artikel`. `id`,`artikel`. `judul`, `artikel`. `deskripsi`, `artikel`. `sumber`, `artikel`. `gambar`
				  FROM `artikel` LIMIT $limit
				 ";
				 return $this->db->query($query)->result_array(); 
	}

	public function delete($id) {
		$this->db->where('id', $id);
		$this->db->delete('artikel');
	}

	public function update($id, $data){
        $this->db->where('id', $id);
		$this->db->update('artikel', $data);
	}

	public function create($data){
	$this->db->insert('artikel', $data);
	}

    public function get_data_by_id($id) {
		$query = "SELECT `artikel`. `id`,`artikel`. `judul`, `artikel`. `deskripsi`, `artikel`. `sumber`, `artikel`. `gambar`
				  FROM `artikel` WHERE `id` = $id
				 ";
				 return $this->db->query($query)->row();
	}
}