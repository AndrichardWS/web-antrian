<div class="main-content">

	<h2>APA - Data Poli Anak</h2>
	<p><b>Copyright &copy;2019</b> <strong></strong><a href="#" target="_blank">AndrichardWS.</a> All rights reserved.</p>

<br />

	<ol class="breadcrumb bc-3" >
						<li>
				<a href="#"><i class="entypo-gauge"></i>Dashboard</a>
			</li>
					<li>

							<a href="ui-panels.html">Data Poli Anak</a>
					</li>
				<!-- <li class="active">

							<strong>Blockquotes</strong>
					</li> -->
					</ol>

<div class="row">
	<div class="col-md-12">


<!-- JS DATABLES -->
        <script>
        $(document).ready(function(){
            $('.dataTables-example').DataTable({
                pageLength: 10,
                responsive: true,
                dom: '<"html5buttons"B>lTfgitp',
                buttons: [
                    {extend: 'copy'},
                    {extend: 'csv'},
                    {extend: 'excel', title: 'Data Poli Anak'},
                    {extend: 'pdf', title: 'Data Poli Anak'},

                    {extend: 'print',
                     customize: function (win){
                            $(win.document.body).addClass('white-bg');
                            $(win.document.body).css('font-size', '10px');

                            $(win.document.body).find('table')
                                    .addClass('compact')
                                    .css('font-size', 'inherit');
                    }
                    }
                ]

            });

        });

    </script>

		<!-- <a href="javascript:;" onclick="jQuery('#modal-1').modal('show');" class="btn btn-info"><i class="entypo-plus"></i>Tambah Data</a> -->
		<div class="pull">
            <a href="#" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#ModalaAdd"><i class="entypo-plus"></i>Tambah Data</a>

            <a href="C_crud_panak/reset_data/" class="btn btn-sm btn-danger"><i class="entypo-cw"></i>Reset Data</a>

        </div>

        



		<br />
        <?=$this->session->flashdata('notif') ?>

		

            <table class="table table-striped  table-hover dataTables-example">
			<thead style="font-weight: bold; font-size: 13px;">
				<tr class="bg-warning">
					<th class="col-sm-1">Tipe Poli</th>
					<th>No Antrian</th>
					<th>Jalur</th>
					<th>No Bpjs</th>
					<th>NIK</th>
					<th>Nama Lengkap</th>
					<th>Jenis kelamin</th>
					<th>Tempat, Tanggal Lahir</th>
					<th>Aksi</th>
				</tr>
			</thead>
			<tbody>
				<?php 
                        // $no = 1;
                        // $no1 = "A00". 1;

                        foreach($tbl_poli_anak as $u){ 
                      ?>


				<tr class="odd gradeX">
					<td>A</td>
					<td><?php echo $u->no_antrian ?></td>
					<td><?php echo $u->jalur; ?></td>
					<td><?php echo $u->no_bpjs; ?></td>
					<td><?php echo $u->nik; ?></td>
					<td><?php echo $u->nama; ?></td>
					<td><?php echo $u->jk; ?></td>
					<td><?php echo $u->ttl; ?></td>
					<td class="center">
                        <a href="#ModalDetail" id="<?php echo $u->no_antrian ?>
                        |<?php echo $u->jalur ?>
                        |<?php echo $u->no_bpjs ?>
                        |<?php echo $u->nik ?>
                        |<?php echo $u->nama ?>
                        |<?php echo $u->jk ?>
                        |<?php echo $u->ttl ?>"  
                        data-toggle="modal" class="detail-panak">
                        <button class="btn btn-warning btn-sm"><i class="entypo-eye"></i></button>
                        </a>



                        <a 
                            href="javascript:;"
                            data-no_antrian="<?php echo $u->no_antrian ?>"
                            data-jalur="<?php echo $u->jalur ?>"
                            data-no_bpjs="<?php echo $u->no_bpjs ?>"
                            data-nik="<?php echo $u->nik ?>"
                            data-nama="<?php echo $u->nama ?>"
                            data-jk="<?php echo $u->jk ?>"
                            data-ttl="<?php echo $u->ttl ?>"
                            data-toggle="modal" data-target="#edit-data">
                            <button  data-toggle="modal" data-target="#ubah-data" class="btn btn-info btn-sm"><i class="entypo-pencil"></i></button>
                            </a>


                            <a href="<?php echo base_url()?>admin/C_crud_panak/hapus/<?php echo $u->no_antrian; ?>" class="btn btn-danger btn-sm" onClick="return confirm('Apakah anda yakin ingin menghapus data ini?')" ><i class="entypo-trash"></i></a> </td>
				</tr>
				 <?php } ?>
				
			</tbody>
			<tfoot style="font-weight: bold; font-size: 13px;">
				<tr>
					<th>Tipe Poli</th>
					<th>No Antrian</th>
					<th>Jalur</th>
					<th>No Bpjs</th>
					<th>NIK</th>
					<th>Nama Lengkap</th>
					<th>Jenis kelamin</th>
					<th>Tempat, Tanggal Lahir</th>
					<th>Aksi</th>
				</tr>
			</tfoot>
		</table>

	</div>

</div>


<!-- JS DETAIL -->
 <script>
    $(document).ready(function() {
        $('.detail-panak').on("click", function(){
        var datapanak= this.id;
        var ambildata = datapanak.split("|");
        $("#IsiModal").html('<table width="520" align="center" cellpadding="1" cellspacing="1" style="font-size:15px;"><tr></tr><tr><td width="153"><b>No. Antrian</b></td><td width="23"><div align="center" >:</div></td><td width="326">'+"A"+ambildata[0]+'</td></tr><tr><td><b>Jalur</b></td><td><div align="center" >:</div></td><td>'+ambildata[1]+'</td></tr><tr><td><b>No. BPJS</b></td><td><div align="center" >:</div></td><td>'+ambildata[2]+'</td></tr><tr><td><b>NIK</b></td><td><div align="center" >:</div></td><td>'+ambildata[3]+'</td></tr><tr><td><b>Nama Lengkap</b></td><td><div align="center" >:</div></td><td>'+ambildata[4]+'</td></tr><tr><td><b>Jenis Kelamin</b></td><td><div align="center" >:</div></td><td>'+ambildata[5]+'</td></tr><tr><td><b>Tempat, Tanggal Lahir</b></td><td><div align="center" >:</div></td><td>'+ambildata[6]+'</td></tr></table>');
        });
   
    });
    </script>




        <!-- MODAL DETAIL -->
        <div class="modal fade" id="ModalDetail" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h3 class="modal-title" id="myModalLabel"><i class="entypo-eye"></i> Detail Data Poli Anak</h3>
            </div>
            <form class="form-horizontal" action="" method="post">
                <div class="modal-body" id="IsiModal">


                </div>

                <div class="modal-footer">
                    <button class="btn btn-danger" data-dismiss="modal" aria-hidden="true">Kembali</button>
                </div>
            </form>
            </div>
            </div>
        </div>
        <!--END MODAL DETAIL-->







<!-- MODAL ADD -->
        <div class="modal fade" id="ModalaAdd" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h3 class="modal-title" id="myModalLabel"><i class="entypo-plus"></i> Tambah Data Poli Anak</h3>
            </div>
            <form class="form-horizontal" name="myform" action="<?php echo base_url()?>admin/C_crud_panak/tambah" method="post">
                <div class="modal-body">


                  <div class="form-group">

                        <!-- <label class="control-label col-xs-3" >No Antrian</label> -->
                        <div class="col-xs-9">
                            <input name="no_antrian" class="form-control" type="hidden" placeholder="No Antrian" style="width: 80px;">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-xs-3" >Jalur</label>
                
                        <div class="col-sm-5">
                                    <select class="form-control" name="jalur" onchange="enabledisabletext()" required="">
                                        <option>BPJS</option>
                                        <option>SWASTA</option>
                                    </select>
                                </div>
                    </div>

<script language="javascript">
    function enabledisabletext(){
        if(document.myform.jalur.value=='SWASTA'){
        // document.myform.no_bpjs.disabled=true;
         document.myform.no_bpjs.value="-";
        }

        if(document.myform.jalur.value=='BPJS'){
        // document.myform.no_bpjs.disabled=false;
        document.myform.no_bpjs.value="";
        // document.myform.mytext2.disabled=true;
        }
    }
</script>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >No Bpjs</label>
                        <div class="col-xs-9">
                            <input name="no_bpjs" class="form-control" type="text" placeholder="No Bpjs" required>
                        </div>
                    </div>


                    <div class="form-group">
                        <label class="control-label col-xs-3" >NIK</label>
                        <div class="col-xs-9">
                            <input name="nik" class="form-control" type="text" placeholder="NIK (Nomor Induk Kartu Keluarga)" required>
                        </div>
                    </div>

                     <div class="form-group">
                        <label class="control-label col-xs-3" >Nama Lengkap</label>
                        <div class="col-xs-9">
                            <input name="nama" class="form-control" type="text" placeholder="Nama Lengkap" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Jenis Kelamin</label>
                        <div class="col-sm-5">
                                    <select class="form-control" name="jk">
                                        <option>-</option>
                                        <option>Laki-Laki</option>
                                        <option>Perempuan</option>
                                    </select>
                                </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >TTL</label>
                        <div class="col-xs-9">
                            <input name="ttl" class="form-control" type="text" placeholder="Tempat, Tanggal Lahir" required>
                        </div>
                    </div>

                </div>

                <div class="modal-footer">
                    <button class="btn btn-info" type="submit">Simpan</button>
                    <button class="btn btn-danger" data-dismiss="modal" aria-hidden="true">Batal</button>
                </div>
            </form>
            </div>
            </div>
        </div>

        <!--END MODAL TAMBAH-->




		 <!-- MODAL EDIT -->
        <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="edit-data" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h3 class="modal-title" id="myModalLabel"><i class="entypo-pencil"></i> Edit Data Poli Anak</h3>
                    </div>

                    <form class="form-horizontal" name="myform2" action="<?php echo base_url()?>admin/C_crud_panak/edit" method="post" enctype="multipart/form-data" role="form">
                        <div class="modal-body">

                        	<div class="form-group">

                               <!-- <label class="control-label col-xs-3" >No Antrian</label> -->
                        <div class="col-xs-9">
                            <input name="no_antrian" id="no_antrian" class="form-control" type="hidden" placeholder="No Antrian" style="width: 80px;">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-xs-3" >Jalur</label>
                        <div class="col-sm-5">
                                    <select class="form-control" name="jalur" id="jalur" onchange="enabledisabletext2()">
                                        <option>BPJS</option>
                                        <option>SWASTA</option>
                                    </select>
                                </div>
                    </div>

<script language="javascript">
    function enabledisabletext2(){
        if(document.myform2.jalur.value=='SWASTA'){
        // document.myform2.no_bpjs.disabled=true;
        document.myform2.no_bpjs.value="-";
        // document.myform.mytext2.disabled=false;
        }

        if(document.myform2.jalur.value=='BPJS'){
        // document.myform2.no_bpjs.disabled=false;
        document.myform2.no_bpjs.value="";
        // document.myform.mytext2.disabled=true;
        }
    }
</script>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >No Bpjs</label>
                        <div class="col-xs-9">
                            <input name="no_bpjs" id="no_bpjs" class="form-control" type="text" placeholder="No Bpjs" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >NIK</label>
                        <div class="col-xs-9">
                            <input name="nik" id="nik" class="form-control" type="text" placeholder="NIK (Nomor Induk Kartu Keluarga)" required>
                        </div>
                    </div>

                     <div class="form-group">
                        <label class="control-label col-xs-3" >Nama Lengkap</label>
                        <div class="col-xs-9">
                            <input name="nama" id="nama" class="form-control" type="text" placeholder="Nama Lengkap" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Jenis Kelamin</label>
                        <div class="col-sm-5">
                                    <select class="form-control" name="jk" id="jk">
                                        <option>-</option>
                                        <option>Laki-Laki</option>
                                        <option>Perempuan</option>
                                    </select>
                                </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >TTL</label>
                        <div class="col-xs-9">
                            <input name="ttl" id="ttl" class="form-control" type="text" placeholder="Tempat, Tanggal Lahir" required>
                        </div>
                    </div>

                        </div>
                            
                            <div class="modal-footer">
                                <button class="btn btn-info" type="submit">Simpan</button>
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
<!-- END MODAL EDIT -->


<!-- JS EDIT -->
    <script>
    $(document).ready(function() {
        // Untuk sunting
        $('#edit-data').on('show.bs.modal', function (event) {
            var div = $(event.relatedTarget) // Tombol dimana modal di tampilkan
            var modal          = $(this)
 
            // Isi nilai pada field
            modal.find('#no_antrian').attr("value",div.data('no_antrian'));
            modal.find('#jalur').attr("value",div.data('jalur'));
            modal.find('#no_bpjs').attr("value",div.data('no_bpjs'));
            modal.find('#nik').attr("value",div.data('nik'));
            modal.find('#nama').attr("value",div.data('nama'));
            modal.find('#jk').attr("value",div.data('jk'));
            modal.find('#ttl').attr("value",div.data('ttl'));
        });
    });
    </script>