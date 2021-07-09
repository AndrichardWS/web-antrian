<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cadmin extends CI_Controller {

	public function __construct() {
        Parent::__construct();
        if (!isset($_SESSION['status_login'])) {
            redirect('Clogin');
        } elseif ($_SESSION['level']=="poli_anak") {
        	redirect('poli_anak/Cpolianak');
        } elseif ($_SESSION['level']=="poli_gigi") {
            redirect('poli_gigi/Cpoligigi');
        } elseif ($_SESSION['level']=="poli_umum") {
            redirect('poli_umum/Cpoliumum');
        }
    }

	
	public function index(){

        //hitung data tabel di database
        $data['pengguna'] = $this->db->get('tbl_pengguna')->num_rows();
        $data['anak'] = $this->db->get('tbl_poli_anak')->num_rows();
        $data['gigi'] = $this->db->get('tbl_poli_gigi')->num_rows();
        $data['umum'] = $this->db->get('tbl_poli_umum')->num_rows();

		$this->template->load('admin/_vtemplate_admin','admin/_vtemplate_dashboard', $data);
		// $this->load->view('admin/_vtemplate_admin');

	}

}
