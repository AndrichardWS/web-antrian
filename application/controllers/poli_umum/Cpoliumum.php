<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cpoliumum extends CI_Controller {

	public function __construct() {
        Parent::__construct();
        if (!isset($_SESSION['status_login'])) {
            redirect('Clogin');
        } elseif ($_SESSION['level']=="admin") {
        	redirect('admin/Cadmin');
        } elseif ($_SESSION['level']=="poli_anak") {
        	redirect('poli_anak/Cpolianak');
        }elseif ($_SESSION['level']=="poli_gigi") {
        	redirect('poli_gigi/Cpoligigi');
        }
    }
	
	public function index(){

		// Tampil
		$this->data['tbl_poli_umum'] = $this->Mpoliumum->tampil_data()->result();

		$this->template->load('poli_umum/_vtemplate_poliumum','poli_umum/_vtemplate_dashboard',$this->data);

	}

}
