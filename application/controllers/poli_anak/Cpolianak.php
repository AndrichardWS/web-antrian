<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cpolianak extends CI_Controller {

	public function __construct() {
        Parent::__construct();
        if (!isset($_SESSION['status_login'])) {
            redirect('Clogin');
        } elseif ($_SESSION['level']=="admin") {
        	redirect('admin/Cadmin');
        } elseif ($_SESSION['level']=="poli_gigi") {
        	redirect('poli_gigi/Cpoligigi');
        }elseif ($_SESSION['level']=="poli_umum") {
        	redirect('poli_umum/Cpoliumum');
        }
        
    }

	
	public function index(){

		// Tampil
		$this->data['tbl_poli_anak'] = $this->Mpolianak->tampil_data()->result();

		$this->template->load('poli_anak/_vtemplate_polianak','poli_anak/_vtemplate_dashboard',$this->data);

	}

}
