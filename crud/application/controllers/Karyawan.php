<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Karyawan extends CI_Controller
{
	// pemanggilan constructor untuk method yg diakses pertama kali
	public function __construct()
	{
		parent::__construct();
		$this->load->model('karyawan_model');
		$this->load->library('form_validation');
	}

	public function index()
	{
		$data['karyawan'] = $this->karyawan_model->getAll();
		$this->load->view('template/header');
		$this->load->view('karyawan/index', $data);
		$this->load->view('template/footer');
	}
	// fungsi
	public function create()
	{
		$this->load->view('template/header');
		$this->load->view('karyawan/create');
		$this->load->view('template/footer');
	}

	public function save()
	{
		$this->form_validation->set_rules('no_pegawai', 'No Pegawai', 'required');
		$this->form_validation->set_rules('nama', 'Nama', 'required');
		$this->form_validation->set_rules('jenkel', 'Jenis Kelamin', 'required');
		$this->form_validation->set_rules('tgl', 'Tanggal Lahir', 'required');
		$this->form_validation->set_rules('status', 'status', 'required');
		$this->form_validation->set_rules('alamat', 'Alamat', 'required');
		if ($this->form_validation->run() == true) {
			$config['upload_path'] = './assets/gambar/'; // tempat penyimpanan foto bukti pembayaran
			$config['allowed_types'] = 'jpeg|jpg|png|ico'; // format yang diijinkan
			$config['max_size']     = '5000'; // ukuran foto maksimal
			// library upload
			$this->load->library('upload', $config);
			$field_name = 'gambar'; // nama field
			if (!$this->upload->do_upload($field_name)) {
				$this->load->view('template/header');
				$this->load->view('karyawan/create');
				$this->load->view('template/footer');
			} else {
				$upload_data = array('uploads' => $this->upload->data());
				$config['image_library'] = 'gd2';
				$config['source_image'] = './assets/gambar/' . $upload_data['uploads']['file_name'];
				$this->load->library('image_lib', $config);

				$data['no_pegawai'] = $this->input->post('no_pegawai');
				$data['nama'] = $this->input->post('nama');
				$data['jenkel'] = $this->input->post('jenkel');
				$tgl = $this->input->post('tgl');
				$tgl1 = str_replace('/', '-', $tgl);

				$data['tgl'] = date("Y-m-d", strtotime($tgl));
				$data['status'] = $this->input->post('status');
				$data['alamat'] = $this->input->post('alamat');
				$data['gambar'] = $upload_data['uploads']['file_name'];
				// var_dump($upload_data);

				$this->karyawan_model->save($data);
				redirect('karyawan');
			}
			// // array
			// $data['no_pegawai'] = $this->input->post('no_pegawai');
			// $data['nama'] = $this->input->post('nama');
			// $data['jenkel'] = $this->input->post('jenkel');
			// $tgl = $this->input->post('tgl');
			// $tgl1 = str_replace('/', '-', $tgl);
			// $data['tgl'] = date("Y-m-d", strtotime($tgl));
			// $data['status'] = $this->input->post('status');
			// $data['alamat'] = $this->input->post('alamat');
			// $data['gambar'] = $upload_data['uploads']['file_name'];
			// // var_dump($data);

			// // $this->karyawan_model->save($data);
			// // redirect('karyawan');
		} else {
			$this->load->view('template/header');
			$this->load->view('karyawan/create');
			$this->load->view('template/footer');
		}
	}

	function edit($no_pegawai)
	{
		$data['karyawan'] = $this->karyawan_model->getById($no_pegawai);
		$this->load->view('template/header');
		$this->load->view('karyawan/edit', $data);
		$this->load->view('template/footer');
	}

	public function update()
	{
		$this->form_validation->set_rules('no_pegawai', 'No Pegawai', 'required');
		$this->form_validation->set_rules('nama', 'Nama', 'required');
		$this->form_validation->set_rules('jenkel', 'Jenis Kelamin', 'required');
		$this->form_validation->set_rules('tgl', 'Tanggal Lahir', 'required');
		$this->form_validation->set_rules('status', 'status', 'required');
		$this->form_validation->set_rules('alamat', 'Alamat', 'required');
		if ($this->form_validation->run() == true) {
			$config['upload_path'] = './assets/gambar/'; // tempat penyimpanan foto bukti pembayaran
			$config['allowed_types'] = 'jpeg|jpg|png|ico'; // format yang diijinkan
			$config['max_size']     = '5000'; // ukuran foto maksimal
			// library upload
			$this->load->library('upload', $config);
			$field_name = 'gambar'; // nama field
			if (!$this->upload->do_upload($field_name)) {
				$this->load->view('template/header');
				$this->load->view('karyawan/edit');
				$this->load->view('template/footer');
			} else {
				// $data['karyawan']=$this->karyawan_model->getById($no_pegawai);

				// if($data->gambar)
				$upload_data = array('uploads' => $this->upload->data());
				$config['image_library'] = 'gd2';
				$config['source_image'] = './assets/gambar/' . $upload_data['uploads']['file_name'];
				$this->load->library('image_lib', $config);

				$data['no_pegawai'] = $this->input->post('no_pegawai');
				$data['nama'] = $this->input->post('nama');
				$data['jenkel'] = $this->input->post('jenkel');
				$tgl = $this->input->post('tgl');
				$tgl1 = str_replace('/', '-', $tgl);

				$data['tgl'] = date("Y-m-d", strtotime($tgl));
				$data['status'] = $this->input->post('status');
				$data['alamat'] = $this->input->post('alamat');
				// $data['gambar'] = $upload_data['uploads']['file_name'];
				// var_dump($upload_data);

				$this->karyawan_model->update($data);
				redirect('karyawan');
			}
			// // array
			// $data['no_pegawai'] = $this->input->post('no_pegawai');
			// $data['nama'] = $this->input->post('nama');
			// $data['jenkel'] = $this->input->post('jenkel');
			// $tgl = $this->input->post('tgl');
			// $tgl1 = str_replace('/', '-', $tgl);
			// $data['tgl'] = date("Y-m-d", strtotime($tgl));
			// $data['status'] = $this->input->post('status');
			// $data['alamat'] = $this->input->post('alamat');
			// $data['gambar'] = $upload_data['uploads']['file_name'];
			// // var_dump($data);

			// // $this->karyawan_model->save($data);
			// // redirect('karyawan');
		} else {
			$this->load->view('template/header');
			$this->load->view('karyawan/edit');
			$this->load->view('template/footer');
		}
	}

	function delete($no_pegawai)
	{
		$this->karyawan_model->delete($no_pegawai);
		redirect('karyawan');
	}

	// method detail karyawan
	public function detail($no_pegawai)
	{
		$data['karyawan'] = $this->karyawan_model->getById($no_pegawai);
		$this->load->view('template/header');
		$this->load->view('karyawan/detail', $data);
		$this->load->view('template/footer');
		$this->karyawan_model->detail($data, $no_pegawai);
	}

	// public function pdf()
	// {
	// 	$this->load->library('dompdf_gen');
	// 	$data['karyawan'] = $this->karyawan_model->tampil_data('tabel_karyawan')->result();
	// 	var_dump($data);
	// 	$this->load->view('laporan_pdf', $data);

	// 	// ukuran kertas
	// 	$paper_size = 'A4';
	// 	$orientation = 'landscape';
	// 	$html = $this->output->get_output();
	// 	$this->dompdf->set_paper($paper_size, $orientation);

	// 	//convert pdf
	// 	$this->dompdf->load_html($html);
	// 	$this->dompdf->render();
	// 	$this->dompdf->stream("Laporan Data Karyawan.pdf", array('Attachment' => 0));
	// }
}