<style>
  th {
    width: 142px;
    text-align: center;
  }

  .clik {
    display: inline-block;
    padding: 6px 6px;
    font-size: 12px;
    cursor: pointer;
    text-align: center;
    text-decoration: none;
    outline: none;
    color: #fff;
    background-color: #4CAF50;
    border: none;
    border-radius: 10px;
    box-shadow: 0 4px #999;
  }

  .clik:hover {
    background-color: #3e8e41
  }

  .clik:active {
    background-color: #3e8e41;
    box-shadow: 0 2px #666;
    transform: translateY(4px);
  }
</style>
<link href="assets/plugins/DataTables/media/css/dataTables.bootstrap.min.css" rel="stylesheet" />
<link href="assets/plugins/DataTables/extensions/Buttons/css/buttons.bootstrap.min.css" rel="stylesheet" />
<link href="assets/plugins/DataTables/extensions/Responsive/css/responsive.bootstrap.min.css" rel="stylesheet" />
<!-- ================== END PAGE LEVEL STYLE ================== -->
<div id="content" class="content">
  <!-- begin row -->
  <div class="row">
    <div class="col-md-12">
      <div class="panel panel-inverse">
        <div class="panel-heading">
          <div class="panel-heading-btn">
            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-repeat"></i></a>
            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
          </div>
          <h4 class="panel-title">Data Accessor</h4>
        </div>


        <div class="panel-body">
          <div class="col-md-12 note note-success">
            <div class="col-md-4"> <a href="#" class="btn btn-md btn-primary btn-xs text-white font-weight-bold clik" data-toggle="modal" data-target="#tambah_data"><i class="fa fa-plus text-white"></i>&nbsp; Tambah Data</a>
            </div>
            <div class="col-md-4">
              <center>
                <h3 class="page-header">Data Pengajar / Accessor</h3>
              </center>
            </div>

          </div>
          <table id="data-table" class="table table-striped table-bordered">
            <thead>
              <tr>
                <th style="width:1%; text-align: center;">No</th>
                <th style="width:10%; text-align: center;">ID Acc</th>
                <th style="width:10%">Nik</th>
                <th style="width:10%">Nama</th>
                <th style="width:10%">Username</th>
                <!-- <th style="width:10%">Password</th> -->
                <th style="width:3%">Level</th>
                <th style="width:12%">Email</th>
                <th style="width:12%">Dept</th>
                <th style="width:4%">Status</th>
                <th style="width:16%">Action</th>
              </tr>
            </thead>
            <tbody>
              <?php
              include 'conn.php';
              $no = 1;
              $queryview = mysqli_query($conn, "SELECT * FROM pengajar");
              while ($data = mysqli_fetch_assoc($queryview)) {
              ?>
                <tr>
                  <td style="width:1%;"><?php echo $no; ?></td>
                  <td style="width:10%"><?php echo $data['id_pengajar']; ?></td>
                  <td style="width:10%"><?php echo $data['nik']; ?></td>
                  <td style="width:10%"><?php echo $data['nama']; ?></td>
                  <td style="width:10%"><?php echo $data['username']; ?></td>
                  <!-- <td style="width:10%"><?php echo $data['password']; ?></td> -->
                  <td style="width:3%">
                    <?php
                    if ($data['level'] == 'admin') { ?>
                      <button class="btn btn-xs" style="color:white; background-color:#CB2027;font-size:10px;"> Admin</button>
                    <?php
                    } else if ($data['level'] == 'acc') { ?>
                      <button class="btn btn-xs" style="color:white; background-color:#348fe2;font-size:10px;"> Accesor</button>
                    <?php
                    } else { ?>
                      <button class="btn btn-xs" style="color:white; background-color:#2cac00;font-size:10px;"> Student</button>
                    <?php
                    } ?>
                  </td>
                  <td style="color: blue; width:12%"><?php echo $data['email']; ?></td>
                  <td style="width:12%"><?php echo $data['dept']; ?></td>
                  <td style="width:4%">
                    <?php
                    if ($data['status'] == 'non-aktif') { ?>
                      <button class="btn btn-xs" style="color:white; background-color:#CB2027;font-size:10px;" disabled> Non-Aktif</button>
                    <?php
                    } else { ?>
                      <button class="btn btn-success btn-xs" style="color:white; background-color:green;font-size:10px;"> Aktif</button>
                    <?php
                    } ?>
                  </td>
                  <td style="width:18%">
                    <a href="#" class="btn btn-xs btn-primary" data-toggle="modal" data-target="#ubah<?php echo $data['id']; ?>" title="Edit Data"><i class="fa fa-pencil-square-o"></i></a>
                    |
                    <a href="#" class="btn btn-xs btn-danger" data-toggle="modal" data-target="#hapus<?php echo $data['id']; ?>" value="hapus" title="Hapus Data"><i class="fa fa-bitbucket" title="Hapus data"></i></a>
                  </td>
                </tr>
              <?php
                include 'modal_pengajar.php';
                $no++;
              }
              ?>
            </tbody>
          </table>
        </div>
      </div>
      <!-- end panel -->
    </div>
    <!-- end col-10 -->
  </div>
  <!-- end row -->
</div>
<!-- end #content -->



<!-- begin scroll to top btn -->
<a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top fade" data-click="scroll-top"><i class="fa fa-angle-up"></i></a>
<!-- end scroll to top btn -->
</div>
<!-- end page container -->


<!-- ================== BEGIN PAGE LEVEL JS ================== -->
<script src="assets/plugins/DataTables/media/js/jquery.dataTables.js"></script>
<script src="assets/plugins/DataTables/media/js/dataTables.bootstrap.min.js"></script>
<script src="assets/plugins/DataTables/extensions/Buttons/js/dataTables.buttons.min.js"></script>
<script src="assets/plugins/DataTables/extensions/Buttons/js/buttons.bootstrap.min.js"></script>
<script src="assets/plugins/DataTables/extensions/Buttons/js/buttons.flash.min.js"></script>
<script src="assets/plugins/DataTables/extensions/Buttons/js/jszip.min.js"></script>
<script src="assets/plugins/DataTables/extensions/Buttons/js/pdfmake.min.js"></script>
<script src="assets/plugins/DataTables/extensions/Buttons/js/vfs_fonts.min.js"></script>
<script src="assets/plugins/DataTables/extensions/Buttons/js/buttons.html5.min.js"></script>
<script src="assets/plugins/DataTables/extensions/Buttons/js/buttons.print.min.js"></script>
<script src="assets/plugins/DataTables/extensions/Responsive/js/dataTables.responsive.min.js"></script>
<script src="assets/js/table-manage-buttons.demo.min.js"></script>
<script src="assets/js/apps.min.js"></script>
<!-- ================== END PAGE LEVEL JS ================== -->

<script>
  $(document).ready(function() {
    App.init();
    TableManageButtons.init();
  });
</script>
<script>
  (function(i, s, o, g, r, a, m) {
    i['GoogleAnalyticsObject'] = r;
    i[r] = i[r] || function() {
      (i[r].q = i[r].q || []).push(arguments)
    }, i[r].l = 1 * new Date();
    a = s.createElement(o),
      m = s.getElementsByTagName(o)[0];
    a.async = 1;
    a.src = g;
    m.parentNode.insertBefore(a, m)
  })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

  ga('create', 'UA-53034621-1', 'auto');
  ga('send', 'pageview');
</script>
</body>

</html>