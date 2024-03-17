<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengawas extends CI_Controller {
	public function index()
		{
			$data['title'] ='Pengawas';
			$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])
			->row_array();

			$data['proyek'] = $this->db->get_where('data_proyek', ['progress'])->row_array();
			$data['bahan'] = $this->db->get_where('data_bahan', ['nama_bahan'])->row_array();
			$data['chart_pie'] = $this->db->query("SELECT * FROM data_proyek;")->result();

			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar', $data);
			$this->load->view('templates/topbar', $data);
			$this->load->view('pengawas/index', $data);
			$this->load->view('templates/footer');
		}

	public function dashboard_data_proyek()
		{
			$data = $this->db->query("SELECT * FROM data_proyek;")->result();
			echo json_encode($data);
		}


		/*
		| -------------------------------------------------------------------------
		| CRUD DATA BAHAN 
		| -------------------------------------------------------------------------
		*/
	public function databahan()
	{
		$data['title'] ='Data Bahan';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

		$data['bahan'] = $this->db->get('data_bahan')->result_array();
		$data['proyek'] = $this->db->get('data_proyek')->result_array();

		$this->form_validation->set_rules('namabahan', 'Namabahan', 'required');
		$this->form_validation->set_rules('satuan', 'Satuan', 'required');

		if($this->form_validation->run() == false ) {
			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar', $data);
			$this->load->view('templates/topbar', $data);
			$this->load->view('pengawas/databahan', $data);
			$this->load->view('templates/footer');
		} else {
			$data = [
				'nm_proyek' => htmlspecialchars($this->input->post('namaproyek', true)),
				'nama_bahan' => htmlspecialchars($this->input->post('namabahan', true)),
				'satuan' => htmlspecialchars($this->input->post('satuan', true)),
				'harga_satuan' => htmlspecialchars($this->input->post('harga', true)),
				'tgl_masuk' => htmlspecialchars($this->input->post('tglmasuk', true)),
				'jumlah' => htmlspecialchars($this->input->post('jumlah', true)),
				'tgl_pakai' => htmlspecialchars($this->input->post('tglpakai', true)),
				'jumlah_pakai' => htmlspecialchars($this->input->post('jumlahpakai', true)),
				
			];

			$this->db->insert('data_bahan', $data);

			$this->session->set_flashdata('message', '<div class="alert alert-success"role="alert">Data Berhasil Ditambahkan</div>');
			redirect('pengawas/databahan');
		}
	}

	public function editbahan(){
		$data['title'] ='Edit Bahan';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

		$this->load->model('My_model');
		$id_bahan = $this->uri->segment(3);

		$data['bahan'] = $this->My_model->bahan($id_bahan)->row_array();
		$data['proyek'] = $this->db->get('data_proyek')->result_array();

		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('pengawas/editbahan', $data);
		$this->load->view('templates/footer');
	}

	public function edit_simpanbahan(){
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['proyek'] = $this->db->get('data_proyek')->result_array();
		$id = $this->input->post('id');

		$databahan = array(
			'nm_proyek' => $this->input->post('namaproyek'),
			'nama_bahan' => $this->input->post('namabahan'),
			'satuan' => $this->input->post('satuan'),
			'harga_satuan' => $this->input->post('harga'),
			'tgl_masuk' => $this->input->post('tglmasuk'),
			'jumlah' => $this->input->post('jumlah'),
			'tgl_pakai' => $this->input->post('tglpakai'),
			'jumlah_pakai' => $this->input->post('jumlahpakai'));
		
		$this->db->where('id_bahan', $id);
		$this->db->update('data_bahan', $databahan);
		$this->session->set_flashdata('message', '<div class="alert alert-success"role="alert">Data Berhasil di Update</div>');
		redirect('pengawas/databahan');
	}
	public function deletebahan(){
		$id_bahan = $this->uri->segment(3);
	
		$this->db->where('id_bahan', $id_bahan);
		$this->db->delete('data_bahan');
		$this->session->set_flashdata('message', '<div class="alert alert-danger"role="alert">Data Berhasil di Hapus</div>');
		redirect('pengawas/databahan');
	}


		/*
		| -------------------------------------------------------------------------
		| CRUD DATAP ROYEK
		| -------------------------------------------------------------------------
		*/
	public function dataproyek()
	{
		$data['title'] ='Data Proyek';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		
		$data['proyek'] = $this->db->get('data_proyek')->result_array();

			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar', $data);
			$this->load->view('templates/topbar', $data);
			$this->load->view('pengawas/dataproyek', $data);
			$this->load->view('templates/footer');
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
		$this->load->view('pengawas/editproyek', $data);
		$this->load->view('templates/footer');
	}


	public function edit_simpan(){
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

		$id = $this->input->post('id');

		$dataproyek = array(
		
			'progress' => $this->input->post('progress'));
		
		$this->db->where('id_proyek', $id);
		$this->db->update('data_proyek', $dataproyek);
		$this->session->set_flashdata('message', '<div class="alert alert-success"role="alert">Data Berhasil di Update</div>');
		redirect('pengawas/dataproyek');
	}
	

	public function progress(){
		{
			$data['title'] ='Chart';
			$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
			
			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar', $data);
			$this->load->view('templates/topbar', $data);
			$this->load->view('pengawas/progress', $data);
			$this->load->view('templates/footer');
		}
	}

}