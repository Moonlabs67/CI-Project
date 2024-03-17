<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Direktur extends CI_Controller {
	public function index()
	{
		$data['title'] ='Dashboard';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

		$data['proyek'] = $this->db->get_where('data_proyek', ['progress'])->row_array();
		$data['bahan'] = $this->db->get_where('data_bahan', ['nama_bahan'])->row_array();

		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('direktur/index', $data);
		$this->load->view('templates/footer');
	}

	public function datapegawai()
	{
		$data['title'] ='Data Pengawas';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();


		$data['pegawai'] = $this->db->get('user')->result_array();

		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('direktur/data-pegawai', $data);
		$this->load->view('templates/footer');
	}


	public function dataproyek()
	{
		$data['title'] ='Data Proyek';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		
		$data['proyek'] = $this->db->get('data_proyek')->result_array();

		$this->form_validation->set_rules('namaproyek', 'Namaproyek', 'required');
		$this->form_validation->set_rules('lokasi', 'Lokasi', 'required');

		if($this->form_validation->run() == false ) {
			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar', $data);
			$this->load->view('templates/topbar', $data);
			$this->load->view('direktur/data-proyek', $data);
			$this->load->view('templates/footer');
		} else {
			$data = [
				'nama_proyek' => htmlspecialchars($this->input->post('namaproyek', true)),
				'lokasi' => htmlspecialchars($this->input->post('lokasi', true)),
				'nilai_proyek' => htmlspecialchars($this->input->post('nilai', true)),
				'tgl_mulai' => htmlspecialchars($this->input->post('tglmulai', true)),
				'tgl_akhir' => htmlspecialchars($this->input->post('tglakhir', true)),
				'deadline' => htmlspecialchars($this->input->post('deadline', true)),
				'progress' => htmlspecialchars($this->input->post('progress', true)),
			];

			$this->db->insert('data_proyek', $data);
			$this->session->set_flashdata('message', '<div class="alert alert-success"role="alert">Data Berhasil Ditambahkan</div>');
			redirect('direktur/dataproyek');
		}
	}


	public function editproyek(){
		$data['title'] ='Edit Proyek';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

		$this->load->model('My_model');
		$id_proyek = $this->uri->segment(3);

		$data['proyek'] = $this->My_model->proyek($id_proyek)->row_array();

		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('direktur/editproyek', $data);
		$this->load->view('templates/footer');
	}


	public function edit_simpan(){
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

		$id = $this->input->post('id');

		$dataproyek = array(
			'nama_proyek' => $this->input->post('namaproyek'),
			'lokasi' => $this->input->post('lokasi'),
			'nilai_proyek' => $this->input->post('nilai'),
			'tgl_mulai' => $this->input->post('tglmulai'),
			'tgl_akhir' => $this->input->post('tglakhir'),
			'deadline' => $this->input->post('deadline'));
		
		$this->db->where('id_proyek', $id);
		$this->db->update('data_proyek', $dataproyek);
		$this->session->set_flashdata('message', '<div class="alert alert-success"role="alert">Data Berhasil di Update</div>');
		redirect('direktur/dataproyek');
	}

	public function deleteproyek(){
		$id_proyek = $this->uri->segment(3);
	
		$this->db->where('id_proyek', $id_proyek);
		$this->db->delete('data_proyek');
		$this->session->set_flashdata('message', '<div class="alert alert-danger"role="alert">Data Berhasil di Hapus</div>');
		redirect('direktur/dataproyek');
	}








	public function databahan()
	{
		$data['title'] ='Data Pengawas';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		
		$data['bahan'] = $this->db->get('data_bahan')->result_array();
		
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('direktur/data-bahan', $data);
		$this->load->view('templates/footer');
	}


	public function chart(){
		{
			$data['title'] ='Chart';
			$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
			
			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar', $data);
			$this->load->view('templates/topbar', $data);
			$this->load->view('direktur/chart', $data);
			$this->load->view('templates/footer');
		}
	}
}