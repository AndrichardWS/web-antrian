<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_crud_panak extends CI_Controller {

	public function index(){

		// Tampil
		$this->data['tbl_poli_anak'] = $this->Mpolianak->tampil_data()->result();

		$this->template->load('admin/_vtemplate_admin','admin/_vtemplate_crud_panak',$this->data);
		// $this->load->view('admin/_vtemplate_admin');

	}


	// Tambah
	public function tambah(){
    $data = array(
        'no_antrian'=> $this->input->post('no_antrian'),
        'jalur'		=> $this->input->post('jalur'),
        'no_bpjs'	=> $this->input->post('no_bpjs'),
        'nik'		=> $this->input->post('nik'),
        'nama'		=> $this->input->post('nama'),
        'jk'		=> $this->input->post('jk'),
        'ttl'		=> $this->input->post('ttl')
    );
    $this->Mpolianak->tambah_data($data);

    $this->session->set_flashdata('notif','<div class="alert alert-success" role="alert"> DATA BERHASIL DITAMBAHKAN <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
    redirect('admin/c_crud_panak');
 
}


// Edit
	public function edit(){
	$no_antrian = $this->input->post('no_antrian');
    $data = array(
       'no_antrian'=> $this->input->post('no_antrian'),
        'jalur'		=> $this->input->post('jalur'),
        'no_bpjs'	=> $this->input->post('no_bpjs'),
        'nik'		=> $this->input->post('nik'),
        'nama'		=> $this->input->post('nama'),
        'jk'		=> $this->input->post('jk'),
        'ttl'		=> $this->input->post('ttl')
    );

    $this->Mpolianak->edit_data($data,$no_antrian);

    $this->session->set_flashdata('notif','<div class="alert alert-success" role="alert"> DATA BERHASIL DIUBAH <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
    redirect('admin/c_crud_panak');
}


// Hapus
	public function hapus($no_antrian){

    $this->Mpolianak->hapus_data($no_antrian); // fungsi delete ke database

    $this->session->set_flashdata('notif','<div class="alert alert-success" role="alert"> DATA BERHASIL DIHAPUS <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
    redirect('admin/c_crud_panak'); // redirect kehalaman tetap
    }


// reset_data
    public function reset_data(){

            $this->Mpolianak->reset_data();

            $this->session->set_flashdata('notif','<div class="alert alert-success" role="alert"> DATA BERHASIL DIRESET <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
            redirect('admin/c_crud_panak');
    }




}