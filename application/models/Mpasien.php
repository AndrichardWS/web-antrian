<?php

class Mpasien extends CI_model{

	//Tampil Data
	public function tampil_data(){
		return $this->db->get('tbl_pasien');
	}

	// Tambah Data
	public function tambah_data($data){

	    $this->db->insert('tbl_pasien', $data);
	    return TRUE;

	}

	// Edit Data
	public function edit_data($data, $id_pasien){

	    $this->db->where('id_pasien',$id_pasien);
	    $this->db->update('tbl_pasien', $data);
	    return TRUE;
	}

	//	Hapus Data
	public function hapus_data($id_pasien){

	    $this->db->where('id_pasien',$id_pasien);
	    $this->db->delete('tbl_pasien');
    } 










}