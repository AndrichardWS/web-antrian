<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cpoligigi extends CI_Controller {

	public function __construct() {
        Parent::__construct();
        if (!isset($_SESSION['status_login'])) {
            redirect('Clogin');
        } elseif ($_SESSION['level']=="admin") {
        	redirect('admin/Cadmin');
        } elseif ($_SESSION['level']=="poli_anak") {
        	redirect('poli_anak/Cpolianak');
        }elseif ($_SESSION['level']=="poli_umum") {
        	redirect('poli_umum/Cpoliumum');
        }
    }

	
	public function index(){

		// Tampil
		$this->data['tbl_poli_gigi'] = $this->Mpoligigi->tampil_data()->result();

		$this->template->load('poli_gigi/_vtemplate_poligigi','poli_gigi/_vtemplate_dashboard',$this->data);

	}

}
