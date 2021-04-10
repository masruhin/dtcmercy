		<!-- begin #content -->
		<div id="content" class="content">
			<!-- begin breadcrumb -->
			<ol class="breadcrumb pull-right">
				<li><a href="javascript:;">Home</a></li>
			</ol>
			<!-- end breadcrumb -->
			<!-- begin page-header -->
			<center>
				<h1 class="page-header">Form Input Data Student</small></h1>
			</center>
			<!-- end page-header -->

			<div class="col-md-2"></div>
			<!-- begin row -->
			<div class="row">
				<!-- begin col-6 -->
				<div class="col-md-8">
					<!-- begin panel -->
					<div class="panel panel-inverse" data-sortable-id="form-stuff-1">
						<div class="panel-heading">
							<div class="panel-heading-btn">
								<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-repeat"></i></a>
							</div>
							<center>
								<h4 class="panel-title">========================================</h4>
							</center>
						</div>


						<div class="panel-body">
							<form class="form-horizontal" action="page/aksi_data_student.php?act=tambahuser" method="POST">
								<div class="form-group">
									<label class="col-md-3 control-label">NIK Student</label>
									<div class="col-md-9">
										<input type="text" name="nik" class="form-control" id="nik" placeholder="Default input" required type="text" />
									</div>
								</div>

								<div class="form-group">
									<label class="col-md-3 control-label">Nama</label>
									<div class="col-md-9">
										<input type="text" name="nama" class="form-control" id="name" placeholder="Default input" required type="text" />
									</div>
								</div>

								<div class="form-group">
									<label class="col-md-3 control-label">Gender</label>
									<div class="col-md-9">
										<select class="form-control" name="jk" id="jk" required type="text">
											<option value="">--- Pilih Gender User ---</option>
											<option value="L">Pria</option>
											<option value="P">Wanita</option>
										</select>
									</div>
								</div>

								<div class="form-group">
									<label class="col-md-3 control-label">Username</label>
									<div class="col-md-9">
										<input type="text" name="username" class="form-control" id="username" placeholder="Default input" required type="text" />
									</div>
								</div>

								<div class="form-group">
									<label class="col-md-3 control-label">Password</label>
									<div class="col-md-9">
										<input type="text" name="password" class="form-control" id="password" placeholder="Default input" required type="text" />
									</div>
								</div>

								<div class="form-group">
									<label class="col-md-3 control-label">Status</label>
									<div class="col-md-9">
										<select class="form-control" name="status" id="status" required type="text">
											<option value="">--- Pilih Status User ---</option>
											<option value="aktif">Aktif</option>
											<option value="non-aktif">Non-Aktif</option>
										</select>
									</div>
								</div>

								<div class="form-group">
									<label class="col-md-3 control-label">Pekerjaan</label>
									<div class="col-md-9">
										<input type="text" name="pekerjaan" class="form-control" id="pekerjaan" placeholder="Default input" required type="text" />
									</div>
								</div>

								<div class="form-group">
									<label class="col-md-3 control-label">Department</label>
									<div class="col-md-9">
										<input type="text" name="dept" class="form-control" id="dept" placeholder="Default input" required type="text" />
									</div>
								</div>

								<div class="form-group">
									<label class="col-md-3 control-label">Level User</label>
									<div class="col-md-9">
										<select class="form-control" name="level" id="level" required type="text">
											<option value="">--- Pilih Level User ---</option>
											<option value="admin">Admin</option>
											<option value="acc">Accessor</option>
											<option value="student">Student</option>
										</select>
									</div>
								</div>

								<div class="form-group">
									<div class="col-md-3"></div>
									<div class="col-md-9">
										<button type="submit" class="btn btn-sm btn-success">Submit Button</button>
									</div>
								</div>
							</form>
						</div>
					</div>
					<!-- end panel -->
				</div>
				<!-- end col-6 -->
			</div>
			<!-- end row -->
		</div>
		<!-- end #content -->