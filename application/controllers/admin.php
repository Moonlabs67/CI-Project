<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	public function index()
	{
		$data['title'] ='Dashboard';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('admin/index', $data);
		$this->load->view('templates/footer');
	}


	public function role()
	{
		$data['title'] ='User Setting';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

		$data['role'] = $this->db->get('user_role')->result_array();

		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('admin/role', $data);
		$this->load->view('templates/footer');
	}

	/*
	-------------------------------------------------------------------------
	| USER SETTING USER
	| -------------------------------------------------------------------------
	*/
	public function usersetting (){
		$data['title'] ='User Setting';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

		$data['pengguna'] = $this->db->get('user')->result_array();

		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('admin/usersetting', $data);
		$this->load->view('templates/footer');

	}

	public function edituser (){
		$data['title'] ='Edit Proyek';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

		$this->load->model('My_model');
		$id_user = $this->uri->segment(3);

		$data['pengguna'] = $this->My_model->user($id_user)->row_array();

		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('admin/edituser', $data);
		$this->load->view('templates/footer');
	}

	public function edit_simpan(){
		
		$id = $this->input->post('id');

		$user = array(
				'email' => htmlspecialchars($this->input->post('email', true)),
				'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
				'nama' => htmlspecialchars($this->input->post('nama', true)),
				'alamat' => htmlspecialchars($this->input->post('alamat', true)),
				'image' => 'default.jpg',
				'no_hp' => htmlspecialchars($this->input->post('handphone', true)),
				'role_id' => htmlspecialchars($this->input->post('roleid', true)),
				'is_active' => 1
		);
		
		$this->db->where('id_user', $id);
		$this->db->update('user', $user);
		$this->session->set_flashdata('message', '<div class="alert alert-success"role="alert">Data Berhasil di Update</div>');
		redirect('admin/usersetting');
	}
	public function deleteuser(){
		$id_user = $this->uri->segment(3);
	
		$this->db->where('id_user', $id_user);
		$this->db->delete('user');
		$this->session->set_flashdata('message', '<div class="alert alert-danger"role="alert">Data Berhasil di Hapus</div>');
		redirect('admin/usersetting');
	}

	/*
	-------------------------------------------------------------------------
	| TAMBAH DATA USER
	| -------------------------------------------------------------------------
	*/
	public function registration()
	{
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		
		$this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]', [
			'is_unique' => 'Email ini sudah terdaftar!'
		]);
		$this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[3]|matches[password2]', [
			'matches' => 'Password harus sama',
			'min_length' => 'password minimal empat karakter'
		]);
		$this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');
		$this->form_validation->set_rules('nama', 'Nama', 'required');
		$this->form_validation->set_rules('alamat', 'Alamat', 'required');
		$this->form_validation->set_rules('handphone', 'handphone', 'required');

		if ($this->form_validation->run() == false) {
			$data['title'] = 'Registrasi User';

			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar', $data);
			$this->load->view('templates/topbar', $data);
			$this->load->view('admin/registration', $data);
			$this->load->view('templates/footer');
		} else {
			$data = [
				'email' => htmlspecialchars($this->input->post('email', true)),
				'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
				'nama' => htmlspecialchars($this->input->post('nama', true)),
				'alamat' => htmlspecialchars($this->input->post('alamat', true)),
				'image' => 'default.jpg',
				'no_hp' => htmlspecialchars($this->input->post('handphone', true)),
				'role_id' => htmlspecialchars($this->input->post('roleid', true)),
				'is_active' => 1
			];

			$this->db->insert('user', $data);
			$this->session->set_flashdata('message', '<div class="alert 
			alert-success" role="alert">User baru telah ditambahkan</div>');
			redirect('admin/usersetting');
		}
	}
}