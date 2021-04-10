<!-- === Modal Tambah Data === -->
<div id="tambah_data" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <div class="alert alert-danger m-b-0">
          <center>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4><i class="fa fa-info-circle"></i> Tambah Data Student</h4>
          </center>
        </div>
      </div>
      <div class="modal-body">
        <form method="POST" action="page/aksi_data_pengguna.php?act=tambah_data">
          <div class="form-group">
            <label>NIK</label>
            <input type="text" name="nik" class="form-control" required="" placeholder="Input Nik" />
          </div>
          <div class="form-group">
            <label>Nama</label>
            <input type="nama" name="nama" class="form-control" required="" placeholder="Input Name" />
          </div>
          <div class="form-group">
            <label>Gender</label>
            <select class="form-control" name="jk" required type="text">
              <option value="">--- Pilih Gender User ---</option>
              <option value="L">Pria</option>
              <option value="P">Wanita</option>
            </select>
          </div>
          <div class="form-group">
            <label>Username</label>
            <input type="text" name="username" class="form-control" required="" />
          </div>
          <div class="form-group">
            <label>Password</label>
            <input type="text" name="password" class="form-control" required="" placeholder="Input Password" />
          </div>
          <div class="form-group">
            <label>Status</label>
            <select class="form-control" name="status" required type="text">
              <option value="">--- Pilih Status User ---</option>
              <option value="aktif">Aktif</option>
              <option value="non-aktif">Non-Aktif</option>
            </select>
          </div>
          <div class="form-group">
            <label>Pekerjaan</label>
            <input type="text" name="pekerjaan" class="form-control" required="" placeholder="Input Pekerjaan" />
          </div>
          <div class="form-group">
            <label>Department</label>
            <input type="text" name="dept" class="form-control" required="" placeholder="Input department" />
          </div>
          <div class="form-group">
            <label class="col-md-3 control-label">Level User</label>
            <select class="form-control" name="level" required type="text">
              <option value="">--- Pilih Level User ---</option>
              <option value="admin">Admin</option>
              <option value="acc">Accessor</option>
              <option value="student">Student</option>
            </select>
          </div>
      </div>
      <div class="modal-footer">
        <center>
          <button type="submit" name="simpan" class="btn btn-default btn-sm" style="color: #fff;background: #031b29;
    border-color: #3c1012"> <i class="fa fa-paper-plane text-theme m-l-5"></a></i> Submit</button>
          </form>
          <button type="button" name="batal" class="btn btn-warning btn-sm" data-dismiss="modal">Close</button>
        </center>
      </div>
    </div>
  </div>
</div>


<!-- == ubah === -->
<div id="ubah<?php echo $data['id'] ?>" class="modal fade" role="dialog">
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

        <form class="form-horizontal" method="POST" action="page/aksi_data_pengguna.php?act=ubah&&id=<?php echo $data['id'] ?>">

          <div class="form-group">
            <label class="col-md-3 control-label">NIK Student</label>
            <div class="col-md-9">
              <input type="text" name="nik" class="form-control" placeholder="Default input" required type="text" value="<?php echo $data['nik']; ?>" />
            </div>
          </div>

          <div class="form-group">
            <label class="col-md-3 control-label">Nama</label>
            <div class="col-md-9">
              <input type="text" name="nama" class="form-control" placeholder="Default input" required type="text" value="<?php echo $data['nama']; ?>" />
            </div>
          </div>

          <div class="form-group">
            <label class="col-md-3 control-label">Gender</label>
            <div class="col-md-9">
              <select class="form-control" name="jk" required type="text">
                <option value="">--- Pilih Gender User ---</option>
                <option value="L">Pria</option>
                <option value="P">Wanita</option>
              </select>
            </div>
          </div>

          <div class="form-group">
            <label class="col-md-3 control-label">Username</label>
            <div class="col-md-9">
              <input type="text" name="username" class="form-control" placeholder="Default input" required type="text" value="<?php echo $data['username']; ?>" />
            </div>
          </div>

          <div class="form-group">
            <label class="col-md-3 control-label">Password</label>
            <div class="col-md-9">
              <input type="text" name="password" class="form-control" placeholder="Default input" required type="text" value="<?php echo $data['password']; ?>" />
            </div>
          </div>

          <div class="form-group">
            <label class="col-md-3 control-label">Status</label>
            <div class="col-md-9">
              <select class="form-control" name="status" required type="text">
                <option value="">--- Pilih Status User ---</option>
                <option value="aktif">Aktif</option>
                <option value="non-aktif">Non-Aktif</option>
              </select>
            </div>
          </div>

          <div class="form-group">
            <label class="col-md-3 control-label">Pekerjaan</label>
            <div class="col-md-9">
              <input type="text" name="pekerjaan" class="form-control" placeholder="Default input" required type="text" value="<?php echo $data['pekerjaan']; ?>" />
            </div>
          </div>

          <div class="form-group">
            <label class="col-md-3 control-label">Department</label>
            <div class="col-md-9">
              <input type="text" name="dept" class="form-control" placeholder="Default input" required type="text" value="<?php echo $data['dept']; ?>" />
            </div>
          </div>

          <div class="form-group">
            <label class="col-md-3 control-label">Level User</label>
            <div class="col-md-9">
              <select class="form-control" name="level" required type="text">
                <option value="">--- Pilih Level User ---</option>
                <option value="admin">Admin</option>
                <option value="acc">Accessor</option>
                <option value="student">Student</option>
              </select>
            </div>
          </div>

      </div>

      <div class="modal-footer">
        <button type="submit" name="simpan" class="btn btn-primary">Submit</button>
        </form>
        <button type="button" name="batal" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>

<div id="hapus<?php echo $data['id'] ?>" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">

      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <div class="alert alert-danger m-b-0">
          <center>
            <h4><i class="fa fa-info-circle"></i> Hapus Data Student</h4>
          </center>
        </div>
      </div>
      <div class="modal-body">
        <h5>Apakah anda yakin ingin menghapus data barang dengan nama <strong class="text-capitalize">"<?php echo $data['nama']; ?>"</strong> ?</h5>
      </div>

      <div class="modal-footer">
        <a class="btn btn-primary" href="page/aksi_data_pengguna.php?act=hapus&id=<?php echo $data['id']; ?>">Hapus Data</a>
        <button type="button" name="batal" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>













<tbody>
  <?php
  include 'conn.php';
  $no = 1;
  $queryview = mysqli_query($conn, "SELECT * FROM pengajar");
  while ($data = mysqli_fetch_assoc($queryview)) {
  ?>
    <tr>
      <td><?php echo $no; ?></td>
      <td><?php echo $data['id_pengajar']; ?></td>
      <td><?php echo $data['nik']; ?></td>
      <td><?php echo $data['nama']; ?></td>
      <td><?php echo $data['username']; ?></td>
      <td><?php echo $data['password']; ?></td>
      <td>
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
      <td><?php echo $data['email']; ?></td>
      <td><?php echo $data['dept']; ?></td>
      <td>
        <?php
        if ($data['status'] == 'non-aktif') { ?>
          <button class="btn btn-xs" style="color:white; background-color:#CB2027;font-size:10px;" disabled> Non-Aktif</button>
        <?php
        } else { ?>
          <button class="btn btn-success btn-xs"> Aktif</button>
        <?php
        } ?>
      </td>
      <td>
        <a href="#" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#ubah<?php echo $data['id']; ?>" title="Edit Data"><i class="fa fa-pencil-square-o"></i></a>

        <a href="#" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#hapus<?php echo $data['id']; ?>" value="hapus" title="Hapus Data"><i class="fa fa-bitbucket" title="Hapus data"></i></a>
      </td>
    </tr>
  <?php
    include 'modal_pengajar.php';
    $no++;
  }
  ?>
</tbody>