<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_crud_pasien extends CI_Controller {

	public function index(){

		// Tampil
		$this->data['tbl_pasien'] = $this->Mpasien->tampil_data()->result();

		$this->template->load('admin/_vtemplate_admin','admin/_vtemplate_crud_pasien',$this->data);
		// $this->load->view('admin/_vtemplate_admin');

	}


	// Tambah
	public function tambah(){
    $data = array(
        'id_pasien'		=> $this->input->post('id_pasien'),
        'nama_pasien'	=> $this->input->post('nama_pasien'),
        'nik'			=> $this->input->post('nik'),
        'password'		=> $this->input->post('password')
    );

    $this->Mpasien->tambah_data($data);

    $this->session->set_flashdata('notif','<div class="alert alert-success" role="alert"> DATA BERHASIL DITAMBAH <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
    redirect('admin/C_crud_pasien');
 
}


// Edit
	public function edit(){
	$id_pasien = $this->input->post('id_pasien');
    $data = array(
       	'id_pasien'		=> $this->input->post('id_pasien'),
        'nama_pasien'	=> $this->input->post('nama_pasien'),
        'nik'			=> $this->input->post('nik'),
        'password'		=> $this->input->post('password')
  
    );

    $this->Mpasien->edit_data($data,$id_pasien);

    $this->session->set_flashdata('notif','<div class="alert alert-success" role="alert"> DATA BERHASIL DIUBAH <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
    redirect('admin/C_crud_pasien');
}


// Hapus
	public function hapus($id_pasien){

    $this->Mpasien->hapus_data($id_pasien); // fungsi delete ke database

    $this->session->set_flashdata('notif','<div class="alert alert-success" role="alert"> DATA BERHASIL DIHAPUS <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
    redirect('admin/C_crud_pasien'); // redirect kehalaman tetap
    }



}