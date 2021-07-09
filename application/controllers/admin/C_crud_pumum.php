<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_crud_pumum extends CI_Controller {

	public function index(){

		// Tampil
		$this->data['tbl_poli_umum'] = $this->Mpoliumum->tampil_data()->result();

		$this->template->load('admin/_vtemplate_admin','admin/_vtemplate_crud_pumum',$this->data);
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

    $this->Mpoliumum->tambah_data($data);

    $this->session->set_flashdata('notif','<div class="alert alert-success" role="alert"> DATA BERHASIL DITAMBAH <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
    redirect('admin/C_crud_pumum');
 
}	


// edit
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

    $this->Mpoliumum->edit_data($data,$no_antrian);

    $this->session->set_flashdata('notif','<div class="alert alert-success" role="alert"> DATA BERHASIL DIUBAH <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
    redirect('admin/C_crud_pumum');
}


// Hapus
	public function hapus($no_antrian){

    $this->Mpoliumum->hapus_data($no_antrian); // fungsi delete ke database

    $this->session->set_flashdata('notif','<div class="alert alert-success" role="alert"> DATA BERHASIL DIHAPUS <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
    redirect('admin/C_crud_pumum'); // redirect kehalaman tetap
    }

// reset_data
    public function reset_data(){

            $this->Mpoliumum->reset_data();

            $this->session->set_flashdata('notif','<div class="alert alert-success" role="alert"> DATA BERHASIL DIRESET <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
            redirect('admin/C_crud_pumum');
    }


}