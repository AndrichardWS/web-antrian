<?php

class Mpoligigi extends CI_model{

	//Tampil Data
	public function tampil_data(){
		return $this->db->get('tbl_poli_gigi');
	}

	// Tambah Data
	public function tambah_data($data){

	    $this->db->insert('tbl_poli_gigi', $data);
	    return TRUE;

	}

	// Edit Data
	public function edit_data($data, $no_antrian){

	    $this->db->where('no_antrian',$no_antrian);
	    $this->db->update('tbl_poli_gigi', $data);
	    return TRUE;
	}

	//	Hapus Data
	public function hapus_data($no_antrian){

	    $this->db->where('no_antrian',$no_antrian);
	    $this->db->delete('tbl_poli_gigi');
    } 


    //	Reset Data
	public function reset_data(){

		$this->db->truncate('tbl_poli_gigi');
 	} 







}