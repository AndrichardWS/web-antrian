<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Clogin extends CI_Controller {

	public function __construct() {
        Parent::__construct();
    }

	
	public function index(){

		if (isset($_SESSION['status_login'])) {
        	if (isset($_SESSION['level'])=="poli_anak") {
	        	redirect('poli_anak/Cpolianak');
	        } elseif (isset($_SESSION['level'])=="admin") {
	        	redirect('admin/Cadmin');
	        } elseif (isset($_SESSION['level'])=="poli_gigi") {
	        	redirect('poli_gigi/Cpoligigi');
	        } elseif (isset($_SESSION['level'])=="poli_umum") {
	        	redirect('poli_umum/Cpoliumum');
	        }
        }

		// $this->template->load('admin/_vtemplate_admin','_vtemplate_dashboard');
		$this->load->view('_vlogin');

	}


	public function cek_login() {

		if (isset($_SESSION['status_login'])) {
        	if (isset($_SESSION['level'])=="poli_anak") {
	        	redirect('poli_anak/Cpolianak');
	        } elseif (isset($_SESSION['level'])=="admin") {
	        	redirect('admin/Cadmin');
	        } elseif (isset($_SESSION['level'])=="poli_gigi") {
	        	redirect('poli_gigi/Cpoligigi');
	        } elseif (isset($_SESSION['level'])=="poli_umum") {
	        	redirect('poli_umum/Cpoliumum');
	        }
        }


        $username = $this->input->post('username', TRUE);
		$password = $this->input->post('password', TRUE);


		$data_cek_login = array(
				'username' => $username, 
				'password' => md5($password)
			);


		$cek_login_user = $this->Mlogin->check_data('tbl_pengguna',$data_cek_login);


		if ($cek_login_user->num_rows() == 1) {

			foreach ($cek_login_user->result() as $sess) {

				$sess_data['id']     			= $sess->id;
				$in 							= $sess->id;
				$sess_data['level']				= $sess->level;
				$level							= $sess->level;

				$sess_data['nama_pengguna']		= $sess->nama_pengguna;
				$nama_pengguna					= $sess->nama_pengguna;
				$sess_data['status_login']		= 'active';
			}

			$this->session->set_userdata($sess_data);


			if ($nama_pengguna == "Administrator") {
				redirect('admin/Cadmin');
			} elseif ($nama_pengguna == "Poli anak") {
				redirect('poli_anak/Cpolianak');
			} elseif ($nama_pengguna == "Poli gigi") {
				redirect('poli_gigi/Cpoligigi');
			} elseif ($nama_pengguna == "Poli umum") {
				redirect('poli_umum/Cpoliumum');
			}


		}
		else {
			// echo "<script>alert('Gagal login: Cek Nama Pengguna, Kata Sandi!');history.go(-1);</script>";
			$this->session->set_flashdata('notif','<div class="alert alert-danger" role="alert"> USERNAME & PASSWORD SALAH! <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
			redirect('Clogin');
		}
	}


	function logout() {
		session_destroy();
		redirect(base_url());
	}

}