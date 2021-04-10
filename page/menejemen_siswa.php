<style>
	td:before {
		content: attr(data-title);
	}

	.panel-inverse {
		overflow-x: scroll;
		overflow-y: scroll;
	}
</style>
<!-- begin #content -->
<div id="content" class="content">
	<!-- begin page-header -->
	<h1 class="page-header">Form Input User</h1>
	<!-- end page-header -->
	<!-- begin row -->
	<div class="row">
		<div class="col-md-4">
			<div class="panel panel-inverse" data-sortable-id="form-stuff-1">
				<div class="panel-heading">
					<div class="panel-heading-btn">
						<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-repeat"></i></a>
					</div>
					<h4 class="panel-title">Input </h4>
				</div>
				<div class="panel-body">
					<form class="form-horizontal" action="page/aksi_siswa.php?act=tambahuser" method="POST">
						<div class="form-group">
							<label class="col-md-3 control-label">ID</label>
							<div class="col-md-9">
								<input type="text" name="id_user" class="form-control" placeholder="input ID" />
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-3 control-label">Username</label>
							<div class="col-md-9">
								<input type="text" name="username" class="form-control" placeholder="input Name Student" />
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-3 control-label">Password</label>
							<div class="col-md-9">
								<input type="text" name="password" class="form-control" placeholder="input Password" />
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-3 control-label">Job</label>
							<div class="col-md-9">
								<input type="text" name="pekerjaan" class="form-control" placeholder="input Name Student / masukan" />
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-3 control-label">Status</label>
							<div class="col-md-9">
								<select class="form-control" name="status">
									<option value="">--- Pilih Status User ---</option>
									<option value="aktif">Aktif</option>
									<option value="non-aktif">Non-Aktif</option>
								</select>
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-3 control-label"></label>
							<div class="col-md-9">
								<button type="submit" name="submit" value="Simpan" class="btn btn-sm btn-success">Submit Button</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
		<div class="col-md-8">
			<!-- begin panel -->
			<div class="panel panel-inverse">
				<div class="panel-heading">
					<div class="panel-heading-btn">
						<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-repeat"></i></a>
					</div>
					<center>
						<h4 class="panel-title"> Data User</h4>
					</center>
				</div>
				<div class="panel-body">
					<table id="example" class="table table-striped table-bordered" style="width:100%">
						<thead>
							<tr>
								<th style="width:10%">No</th>
								<th style="width:15%">ID</th>
								<th style="width:15%">username</th>
								<th style="width:15%">Password</th>
								<th style="width:20%">Job </th>
								<th>Status</th>
								<th style="width:15%">Action</th>
							</tr>
						</thead>
						<tbody style="width:100%">
							<tr class="odd gradeX">
								<?php
								include 'conn.php';
								$no = 1;
								$sql = "SELECT * FROM user";
								$query = mysqli_query($conn, $sql);
								while ($data = mysqli_fetch_assoc($query)) {
								?>
							<tr class="odd gradeX">
								<td style="width:10%"><?php echo $no; ?></td>
								<td style="width:15%"><?php echo $data['id_user']; ?></td>
								<td style="width:15%"><?php echo $data['username']; ?></td>
								<td style="width:15%"><?php echo $data['password']; ?></td>
								<td style="width:20%"><?php echo $data['pekerjaan']; ?></td>
								<td style="width:10%" class="text-capitalize text-center">
									<?php
									if ($data['status'] == 'non-aktif') { ?>
										<button class="btn btn-xs" style="color:white; background-color:#CB2027" disabled> Non-Aktif</button>
									<?php
									} else { ?>
										<button class="btn btn-success btn-xs"> Aktif</button>
									<?php
									} ?>
								</td>
								<td style="width:15%">
									<a href="#" class="btn btn-inverse btn-flat btn-xs" data-toggle="modal" data-target="#ubah<?php echo $data['id']; ?>"><i class=" fa fa-edit"></i> </a>
									<a href="#" class="btn btn-danger btn-flat btn-xs" data-toggle="modal" data-target="#hapus<?php echo $data['id_user']; ?>"><i class="fa fa-trash"></i> </a>
								</td>
							</tr>
						<?php
									include 'modal_menejemen_siswa.php';
									$no++;
								}
						?>
						</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
</div>
<!-- end #content -->

<!-- modal delete -->
<div class="example-modal">
	<div id="deleteuser<?php echo $data['id_user']; ?>" class="modal fade" role="dialog" style="display:none;">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h3 class="modal-title">Konfirmasi Delete Data User</h3>
				</div>
				<div class="modal-body">
					<h4 align="center">Apakah anda yakin ingin menghapus user id <?php echo $data['id_user']; ?><strong><span class="grt"></span></strong> ?</h4>
				</div>
				<div class="modal-footer">
					<button id="nodelete" type="button" class="btn btn-danger pull-left" data-dismiss="modal">Cancle</button>
					<a href="user_student_aksi.php?act=deleteuser&id_user=<?php echo $data['id_user']; ?>" class="btn btn-primary">Delete</a>
				</div>
			</div>
		</div>
	</div>
</div><!-- modal delete -->

<script>
	$(document).ready(function() {
		var table = $('#example').DataTable({
			rowRecorder: {
				selector: 'td:nth-child(2)'
			},
			responsive: true
		});
	});
</script>