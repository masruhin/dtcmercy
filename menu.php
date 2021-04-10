<style>
	span {
		font-size: 14px;
	}

	a,
	li,
	span {
		font-size: 13px;
	}

	i {
		margin-right: 10px;
	}
</style>
<!-- begin #sidebar -->
<div id="sidebar" class="sidebar">
	<!-- begin sidebar scrollbar -->
	<div data-scrollbar="true" data-height="100%">
		<!-- begin sidebar user -->
		<ul class="nav">
			<li class="nav-profile">
				<div class="image">
					<a href="javascript:;"><img src="assets/img/user-13.jpg" alt="" /></a>
				</div>
				<div class="info">
					Sean Ngu
					<small>Front end developer</small>
				</div>
			</li>
		</ul>
		<!-- end sidebar user -->
		<!-- begin sidebar nav -->
		<ul class="nav">
			<li class="nav-header">Navigation</li>
			<li class="has-sub active">
				<a href="#">
					<i class="fa fa-laptop"></i>
					<span>Home</span>
				</a>
				<ul class="sub-menu">
					<li><a href="main.php">Dashboard</a></li>
				</ul>
			</li>
			<li class="has-sub active">
				<a href="javascript:;">
					<i class="fa fa-inbox"></i>
					<span style="margin-right: 40px;" title="Klik untuk melihat subMenu">Menu Utama</span>
					<b class=" fa fa-angle-double-down" title="Klik untuk melihat subMenu"></b>
				</a>
				<ul class="sub-menu">
					<li>
						<a href="main.php?page=pengguna">
							<i class="fa fa-users text-theme m-l-5"></i><span>Manage Student</span>
						</a>
					</li>
					<li>
						<a href="main.php?page=data_pengajar">
							<i class="fa fa-sliders text-theme m-l-5"></i><span>Manage Accessor</span>
						</a>
					</li>
					<li>
						<a href="main.php?page=data_pelajaran">
							<i class="fa fa-cubes text-theme m-l-5"></i><span>Manage Pelajaran</span>
						</a>
					</li>
					<li>
						<a href="main.php?page=data_materi">
							<i class="fa fa-file-archive-o text-theme m-l-5"></i><span>File Materi</span>
						</a>
					</li>
					<li><a href="index.html">Manage Quiz</a></li>
					<li><a href="index.html">Registrasi Siswa</a></li>
					<li><a href="index.html">Manage Assesor</a></li>
					<li><a href="index.html">Manage Modul</a></li>
					<li><a href="index.html">Manage Berita</a></li>
				</ul>
			</li>
			<li class="has-sub">
				<a href="javascript:;">
					<b class="caret pull-right"></b>
					<i class="fa fa-key"></i>
					<span>Login & Register</span>
				</a>
				<ul class="sub-menu">
					<li><a href="login.html">Login</a></li>
					<li><a href="login_v2.html">Login v2</a></li>
					<li><a href="login_v3.html">Login v3</a></li>
					<li><a href="register_v3.html">Register v3</a></li>
				</ul>
			</li>

			<li><a href="javascript:;" class="sidebar-minify-btn" data-click="sidebar-minify"><i class="fa fa-angle-double-left"></i></a></li>
			<!-- end sidebar minify button -->
		</ul>
		<!-- end sidebar nav -->
	</div>
	<!-- end sidebar scrollbar -->
</div>
<div class="sidebar-bg"></div>

<!-- end #sidebar -->