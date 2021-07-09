<div class="main-content">

    <h2>APA - Data Akun Pasien</h2>
    <p><b>Copyright &copy;2019</b> <strong></strong><a href="#" target="_blank">AndrichardWS.</a> All rights reserved.</p>

<br />

    <ol class="breadcrumb bc-3" >
                        <li>
                <a href="#"><i class="entypo-gauge"></i>Dashboard</a>
            </li>
                    <li>

                            <a href="ui-panels.html">Data Akun Pasien</a>
                    </li>
                <!-- <li class="active">

                            <strong>Blockquotes</strong>
                    </li> -->
                    </ol>

<div class="row">
    <div class="col-md-12">

       <script>
        $(document).ready(function(){
            $('.dataTables-example').DataTable({
                pageLength: 10,
                responsive: true,
                dom: '<"html5buttons"B>lTfgitp',
                buttons: [
                    {extend: 'copy'},
                    {extend: 'csv'},
                    {extend: 'excel', title: 'Data Akun Pasien'},
                    {extend: 'pdf', title: 'Data Akun Pasien'},

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
        <div class="pull"><a href="#" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#ModalaAdd3"><i class="entypo-plus"></i>Tambah Data</a></div>

        <br />
        <?=$this->session->flashdata('notif') ?>   
        



        
        
         <table class="table table-striped  table-hover dataTables-example">
            <thead style="font-weight: bold; font-size: 13px;">
                <tr class="bg-warning">
                    <th class="col-sm-1">No</th>
                    <th>Nama Pasien</th>
                    <th>NIK (Nomor Induk Keluarga)</th>
                    <th>Password</th>
                    <th class="col-sm-1">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                        $no = 1;
                        // $no1 = "A00". 1;

                        foreach($tbl_pasien as $u){ 
                      ?>


                <tr class="odd gradeX">
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $u->nama_pasien; ?></td>
                    <td><?php echo $u->nik; ?></td>
                    <td><?php echo $u->password; ?></td>
                    <td class="center"><a 
                            href="javascript:;"
                            data-id_pasien="<?php echo $u->id_pasien ?>"
                            data-nama_pasien="<?php echo $u->nama_pasien ?>"
                            data-nik="<?php echo $u->nik ?>"
                            data-password="<?php echo $u->password ?>"
                            data-toggle="modal" data-target="#edit-data">
                            <button  data-toggle="modal" data-target="#ubah-data" class="btn btn-info btn-sm"><i class="entypo-pencil"></i></button>
                            </a>
                            <a href="<?php echo base_url()?>admin/C_crud_pasien/hapus/<?php echo $u->id_pasien; ?>" class="btn btn-danger btn-sm" onClick="return confirm('Apakah anda yakin ingin menghapus data ini?')" ><i class="entypo-trash"></i></a> </td>
                </tr>
                 <?php } ?>
                
            </tbody>
            <tfoot style="font-weight: bold; font-size: 13px";>
                <tr>
                    <th>No</th>
                    <th>Nama Pasien</th>
                    <th>NIK (Nomor Induk Keluarga)</th>
                    <th>Password</th>
                    <th>Aksi</th>
                </tr>
            </tfoot>
        </table>

    </div>

</div>



<!-- MODAL ADD -->
        <div class="modal fade" id="ModalaAdd3" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h3 class="modal-title" id="myModalLabel"><i class="fa fa-plus"></i> Tambah Data Akun Pasien</h3>
            </div>
            <form class="form-horizontal" action="<?php echo base_url()?>admin/C_crud_pasien/tambah" method="post">
                <div class="modal-body">


                  <div class="form-group">

                        <!-- <label class="control-label col-xs-3" >Id Pasienn</label> -->
                        <div class="col-xs-9">
                            <input name="id_pasien" class="form-control" type="hidden" placeholder="Id Pasien" style="width: 80px;">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-xs-3" >Nama Pasien</label>
                        <div class="col-xs-9">
                            <input name="nama_pasien" class="form-control" type="text" placeholder="Nama Pasien" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >NIK</label>
                        <div class="col-xs-9">
                            <input name="nik" class="form-control" type="text" placeholder="NIK (Nomor Induk Keluarga)" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Password</label>
                        <div class="col-xs-9">
                            <input name="password" class="form-control" type="text" placeholder="Password" required>
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
                <h3 class="modal-title" id="myModalLabel"><i class="fa fa-pencil"></i> Edit Data Akun Pasien</h3>
                    </div>

                    <form class="form-horizontal" action="<?php echo base_url()?>admin/C_crud_pasien/edit" method="post" enctype="multipart/form-data" role="form">
                        <div class="modal-body">

                            <div class="form-group">

                            <!-- <label class="control-label col-xs-3" >Id Pasienn</label> -->
                        <div class="col-xs-9">
                            <input name="id_pasien" id="id_pasien" class="form-control" type="hidden" placeholder="Id Pasien" style="width: 80px;">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-xs-3" >Nama Pasien</label>
                        <div class="col-xs-9">
                            <input name="nama_pasien" id="nama_pasien" class="form-control" type="text" placeholder="Nama Pasien" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >NIK</label>
                        <div class="col-xs-9">
                            <input name="nik" id="nik" class="form-control" type="text" placeholder="NIK (Nomor Induk Keluarga)" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Password</label>
                        <div class="col-xs-9">
                            <input name="password" id="password" class="form-control" type="text" placeholder="Password" required>
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


<script>
    $(document).ready(function() {
        // Untuk sunting
        $('#edit-data').on('show.bs.modal', function (event) {
            var div = $(event.relatedTarget) // Tombol dimana modal di tampilkan
            var modal          = $(this)
 
            // Isi nilai pada field
            modal.find('#id_pasien').attr("value",div.data('id_pasien'));
            modal.find('#nama_pasien').attr("value",div.data('nama_pasien'));
            modal.find('#nik').attr("value",div.data('nik'));
            modal.find('#password').attr("value",div.data('password'));
        
        });
    });
    </script>