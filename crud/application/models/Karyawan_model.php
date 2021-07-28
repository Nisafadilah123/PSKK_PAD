<?php defined('BASEPATH') or exit('No direct script access allowed');

class Karyawan_model extends CI_Model
{
	// untuk mengencapsulation dari beberapa method yang berkaitan dengan db
	private $table = "tabel_karyawan";

	// untuk menampilkan data
	public function getAll()
	{
		return $this->db->get($this->table)->result();
	}

	// untuk menyimpan data
	public function save($data)
	{
		return $this->db->insert($this->table, $data);
	}

	// untuk menampilkan data berdasarkan no. pegawai
	public function getById($no_pegawai)
	{
		return $this->db->get_where($this->table, ["no_pegawai" => $no_pegawai])->row();
	}

	//untuk merubah data berdasarkan no pegawai
	public function update($data, $no_pegawai)
	{
		return $this->db->update($this->table, $data, array('no_pegawai' => $no_pegawai));
	}

	// untuk menghapus data
	public function delete($no_pegawai)
	{
		return $this->db->delete($this->table, array("no_pegawai" => $no_pegawai));
	}

	// pengambilan data teail dari karyawan berdasarkan no pegawai
	public function detail($no_pegawai)
	{
		$query = $this->db->get('tabel_karyawan');
		return $query->result_array();
	}

	public function tampil_data()
	{
		return $this->db->get('tabel_karyawan');
	}
}