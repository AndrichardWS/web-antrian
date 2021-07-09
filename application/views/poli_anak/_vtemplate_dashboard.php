<div class="main-content">


<h2><i class="entypo-monitor"></i> Administrator - Poli Anak</h2>
<p><b>Copyright &copy;2019</b> <strong></strong><a href="#" target="_blank">AndrichardWS.</a> All rights reserved.</p>

<br />




<ol class="breadcrumb bc-3" >
						<li>
				<a href="index.html"><i class="entypo-gauge"></i>Dashboard</a>
			</li>
					<!-- <li>

							<a href="ui-panels.html">UI Elements</a>
					</li> -->
				<!-- <li class="active">

							<strong>Blockquotes</strong>
					</li> -->
					</ol>

					<div class="row">
	<div class="col-md-12">
		
		<div class="panel panel-gradient">
			<div class="panel-heading">
				<div class="panel-title"><i class="entypo-gauge"></i> Welcome!</div>

				<div class="panel-options">
					<!-- <a href="#sample-modal" data-toggle="modal" data-target="#sample-modal-dialog-1" class="bg"><i class="entypo-cog"></i></a> -->
					<a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
					<a href="#" data-rel="reload"><i class="entypo-arrows-ccw"></i></a>
					<a href="#" data-rel="close"><i class="entypo-cancel"></i></a>
				</div>
			</div>
			<div class="panel-body">
				<div class="well">
					<!-- <h1>November 04, 2015</h1> -->
					<h3><i class="entypo-megaphone"></i>Selamat Datang, <strong><?php echo $_SESSION['nama_pengguna']; ?>!</strong></h3>
					<p><b>Aplikasi Pelayanan Antrian berbasis website</b> atau di singkat <b>APA</b> dirancang pada tahun 2019 dan didesain secara khusus untuk mempermudah pasien dalam pengambilan nomor antrian secara online. Aplikasi ini juga sudah terhubung ke smartphone. <a href="#">Download aplikasi android sekarang!</a> </p>
				</div>
			</div>
		</div>

<div class="row">
	<div class="col-md-12">
		<script type="text/javascript">
		jQuery( document ).ready( function( $ ) {
			var $table1 = jQuery( '#table-1' );
			
			// Initialize DataTable
			$table1.DataTable( {
				"aLengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
				"bStateSave": true
			});
			
			// Initalize Select Dropdown after DataTables is created
			$table1.closest( '.dataTables_wrapper' ).find( 'select' ).select2( {
				minimumResultsForSearch: -1
			});
		} );
		</script>
		
		<table class="table table-bordered datatable" id="table-1">
			<thead style="font-weight: bold; font-size: 13px;">
				<tr>
					<th>Tipe Poli</th>
					<th>No Antrian</th>
					<th>Jalur</th>
					<th>No Bpjs</th>
					<th>Nik</th>
					<th>Nama Lengkap</th>
					<th>Jenis kelamin</th>
					<th>Tempat, Tanggal Lahir</th>
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
				</tr>
				 <?php } ?>
				
			</tbody>
			<tfoot style="font-weight: bold; font-size: 13px;">
				<tr>
					<th>Tipe Poli</th>
					<th>No Antrian</th>
					<th>Jalur</th>
					<th>No Bpjs</th>
					<th>Nik</th>
					<th>Nama Lengkap</th>
					<th>Jenis kelamin</th>
					<th>Tempat, Tanggal Lahir</th>
				</tr>
				 



			</tfoot>
		</table>
	</div>
	
</div>