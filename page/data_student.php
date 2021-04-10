<style>
  .content {
    top: 0;
    bottom: 0;
    position: fixed;
    overflow-y: scroll;
    overflow-x: scroll;
  }

  .box-primary {
    overflow-x: scroll;
  }

  th,
  td {
    min-width: 100%;
  }

  .clik {
    display: inline-block;
    padding: 10px 10px;
    font-size: 12px;
    cursor: pointer;
    text-align: center;
    text-decoration: none;
    outline: none;
    color: #fff;
    background-color: #4CAF50;
    border: none;
    border-radius: 10px;
    box-shadow: 0 6px #999;
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
<div id="content" class="content">
  <ol class="breadcrumb pull-right">
    <li><a href="javascript:;">Home</a></li>
  </ol>
  <center>
    <h3 class="page-header">Student</h3>
  </center><br>

  <input class='btn btn-primary clik' type=button value='Add Data' onclick="window.location.href='main.php?page=modal_data_student' ;">
  <br>
  <div>
    <br>
  </div>

  <div class="row">
    <div class="col-md-12 col-sm-12">
      <div class="panel panel-inverse">
        <div class="panel-heading" style="background-color: darkgreen;">
          <div class="panel-heading-btn">
            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-repeat"></i></a>
          </div>
          <h4 class="panel-title" style="background-color: darkgreen;">Data Student / Peserta Training</h4>
        </div>
        <div class="panel-body">
          <table id="data-table" class="table table-striped table-bordered" style="width: 100%;">
            <thead>
              <tr>
                <th style="width:1%;">No</th>
                <th style="width:10%">Nik</th>
                <th style="width:10%">Nama</th>
                <th style="width:10%">Gender</th>
                <th style="width:10%">Username</th>
                <th style="width:10%">Password</th>
                <th style="width:10%">Status</th>
                <th style="width:12%">Pek</th>
                <th style="width:12%">Dept</th>
                <th style="width:10%">Level</th>
                <th style="width:5%">Action</th>
              </tr>
            </thead>
            <tbody>
              <?php
              include 'conn.php';
              $no = 1;
              $queryview = mysqli_query($conn, "SELECT * FROM karyawan");
              while ($row = mysqli_fetch_assoc($queryview)) {
              ?>
                <tr>
                  <td style="width:1%"><?php echo $no++; ?></td>
                  <td style="width:10%"><?php echo $row['nik']; ?></td>
                  <td style="width:12%"><?php echo $row['nama']; ?></td>
                  <td style="width:8%">
                    <?php
                    if ($row['jk'] == 'L') { ?>
                      <button class="btn btn-xs" style="color:white; background-color:#2672EC; font-size:10px;" disabled> Pria</button>
                    <?php
                    } else { ?>
                      <button class="btn btn-warning btn-xs" style="font-size: 10px;"> Wanita</button>
                    <?php
                    } ?>
                  </td>
                  <td style="width:10%"><?php echo $row['username']; ?></td>
                  <td style="width:10%"><?php echo $row['password']; ?></td>
                  <td style="width:10%">
                    <?php
                    if ($row['status'] == 'non-aktif') { ?>
                      <button class="btn btn-xs" style="color:white; background-color:#CB2027;font-size:10px;" disabled> Non-Aktif</button>
                    <?php
                    } else { ?>
                      <button class="btn btn-success btn-xs"> Aktif</button>
                    <?php
                    } ?>
                  </td>
                  <td style="width:12%"><?php echo $row['pekerjaan']; ?></td>
                  <td style="width:12%"><?php echo $row['dept']; ?></td>
                  <td style="width:10%">
                    <?php
                    if ($row['level'] == 'admin') { ?>
                      <button class="btn btn-xs" style="color:white; background-color:#CB2027;font-size:10px;" disabled> Admin</button>
                    <?php
                    } else if ($row['level'] == 'acc') { ?>
                      <button class="btn btn-xs" style="color:white; background-color:#348fe2;font-size:10px;" disabled> Accesor</button>
                    <?php
                    } else { ?>
                      <button class="btn btn-xs" style="color:white; background-color:#2cac00;font-size:10px;" disabled> Student</button>
                    <?php
                    } ?>
                  </td>
                  <td style="width:5%">

                    <a href="#" class="btn btn-inverse btn-flat btn-xs" data-toggle="modal" data-target="#modal-dialog<?php echo $no; ?>"><i class=" fa fa-edit"></i> </a>
                    <a href="#" class="btn btn-danger btn-flat btn-xs" data-toggle="modal" data-target="#hapus<?php echo $data['nik']; ?>"><i class="fa fa-trash"></i> </a>

                    <!-- ==modal update==== -->
                    <div class="modal fade" role="dialog" id="modal-dialog<?php echo $no; ?>">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            <div class="alert alert-danger m-b-0">
                              <center>
                                <h4><i class="fa fa-info-circle"></i> Update Data Student</h4>
                              </center>
                            </div>
                          </div>
                          <div class="modal-body">
                            <form class="form-horizontal" action="page/aksi_data_student.php?act=ubah" method="POST">
                              <?php
                              $id_user = $row['id_user'];
                              $query = "SELECT * FROM karyawan WHERE id_user='$id_user'";
                              $result = mysqli_query($conn, $query);
                              while ($row = mysqli_fetch_assoc($result)) {
                              ?>
                                <div class="form-group">
                                  <label class="col-md-3 control-label">NIK Student</label>
                                  <div class="col-md-9">
                                    <input type="text" name="nik" class="form-control" id="nik" placeholder="Default input" required type="text" value="<?php echo $row['nik']; ?>" />
                                  </div>
                                </div>

                                <div class="form-group">
                                  <label class="col-md-3 control-label">Nama</label>
                                  <div class="col-md-9">
                                    <input type="text" name="nama" class="form-control" id="name" placeholder="Default input" required type="text" value="<?php echo $row['nama']; ?>" />
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
                                    <input type="text" name="username" class="form-control" id="username" placeholder="Default input" required type="text" value="<?php echo $row['username']; ?>" />
                                  </div>
                                </div>

                                <div class="form-group">
                                  <label class="col-md-3 control-label">Password</label>
                                  <div class="col-md-9">
                                    <input type="text" name="password" class="form-control" id="password" placeholder="Default input" required type="text" value="<?php echo $row['password']; ?>" />
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
                                    <input type="text" name="pekerjaan" class="form-control" id="pekerjaan" placeholder="Default input" required type="text" value="<?php echo $row['pekerjaan']; ?>" />
                                  </div>
                                </div>

                                <div class="form-group">
                                  <label class="col-md-3 control-label">Department</label>
                                  <div class="col-md-9">
                                    <input type="text" name="dept" class="form-control" id="dept" placeholder="Default input" required type="text" value="<?php echo $row['dept']; ?>" />
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
                                    <a href="javascript:;" class="btn btn-sm btn-white" data-dismiss="modal">Close</a>
                                  </div>
                                </div>
                              <?php
                              }
                              ?>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
                  </td>
                </tr>
              <?php
              }
              ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>