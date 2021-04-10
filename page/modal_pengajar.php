<!-- === Modal TAMBAH Data === -->
<div id="tambah_data" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <div class="alert alert-danger m-b-0">
          <center>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4><i class="fa fa-info-circle"></i> Tambah Data Pengajar / <em>Assessor</em></h4>
          </center>
        </div>
      </div>
      <div class="modal-body">
        <form method="POST" action="page/aksi_data_pengajar.php?act=tambah_data">

          <div class="col-md-6">
            <div class="form-group">
              <label>ID Accessor</label>
              <input type="text" name="id_pengajar" class="form-control" required="" placeholder="Input ID" />
            </div>
            <div class="form-group">
              <label>NIK</label>
              <input type="text" name="nik" class="form-control" required="" placeholder="Input Nik" />
            </div>
            <div class="form-group">
              <label>Nama Accessor</label>
              <input type="text" name="nama" class="form-control" required="" placeholder="Input Name" />
            </div>
            <div class="form-group">
              <label>Username</label>
              <input type="text" name="username" class="form-control" required="" placeholder="Input Username" />
            </div>
            <div class="form-group">
              <label>Password</label>
              <input type="text" name="password" class="form-control" required="" placeholder="Input Password" />
            </div>
          </div>

          <div class="col-md-6">
            <div class="form-group">
              <label class="col-md-12 control-label">Level User</label>
              <select class="form-control" name="level" required type="text">
                <option value="">--- Pilih Level User ---</option>
                <option value="admin">Admin</option>
                <option value="acc">Accessor</option>
                <!-- <option value="student">Student</option> -->
              </select>
            </div>
            <div class="form-group">
              <label>Email</label>
              <input type="text" name="email" class="form-control" required="" placeholder="Input Email" />
            </div>
            <div class="form-group">
              <label>Department</label>
              <input type="text" name="dept" class="form-control" required="" placeholder="Input department" />
            </div>
            <div class="form-group">
              <label>Status</label>
              <select class="form-control" name="status" required type="text">
                <option value="">--- Pilih Status User ---</option>
                <option value="aktif">Aktif</option>
                <option value="non-aktif">Non-Aktif</option>
              </select>
            </div>
          </div>
      </div>
      <div class="modal-footer">
        <center>
          <button type="submit" name="simpan" class="btn btn-default btn-sm clik" style="color: #fff;background: #031b29;
    border-color: #3c1012"> <i class="fa fa-paper-plane text-theme m-l-5"></a></i> Submit</button>
          </form>
          <button type="button" name="batal" class="btn btn-warning btn-sm clik" data-dismiss="modal">Cancel</button>
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
            <h4><i class="fa fa-info-circle"></i> Update Data Pengajar / <em>Accessor</em></h4>
          </center>
        </div>
      </div>
      <div class="modal-body">
        <form method="POST" action="page/aksi_data_pengajar.php?act=ubah&&id=<?php echo $data['id'] ?>">

          <div class="col-md-6">
            <div class="form-group">
              <label>ID Accessor</label>
              <input type="text" name="id_pengajar" class="form-control" required="" placeholder="Input ID" value="<?php echo $data['id_pengajar']; ?>" />
            </div>
            <div class="form-group">
              <label>NIK</label>
              <input type="text" name="nik" class="form-control" required="" placeholder="Input Nik" value="<?php echo $data['nik']; ?>" />
            </div>
            <div class="form-group">
              <label>Nama Accessor</label>
              <input type="text" name="nama" class="form-control" required="" placeholder="Input Name" value="<?php echo $data['nama']; ?>" />
            </div>
            <div class="form-group">
              <label>Username</label>
              <input type="text" name="username" class="form-control" required="" placeholder="Input Username" value="<?php echo $data['username']; ?>" />
            </div>
            <div class="form-group">
              <label>Password</label>
              <input type="password" name="password" class="form-control" required="" placeholder="Input Password" value="<?php echo $data['password']; ?>" />
            </div>
          </div>

          <div class="col-md-6">
            <div class="form-group">
              <label class="col-md-12 control-label">Level User</label>
              <select class="form-control" name="level" required type="text">
                <option value="">--- Pilih Level User ---</option>
                <option value="admin">Admin</option>
                <option value="acc">Accessor</option>
                <!-- <option value="student">Student</option> -->
              </select>
            </div>
            <div class="form-group">
              <label>Email</label>
              <input type="text" name="email" class="form-control" required="" placeholder="Input Email" value="<?php echo $data['email']; ?>" />
            </div>
            <div class="form-group">
              <label>Department</label>
              <input type="text" name="dept" class="form-control" required="" placeholder="Input department" value="<?php echo $data['dept']; ?>" />
            </div>
            <div class="form-group">
              <label>Status</label>
              <select class="form-control" name="status" required type="text">
                <option value="">--- Pilih Status User ---</option>
                <option value="aktif">Aktif</option>
                <option value="non-aktif">Non-Aktif</option>
              </select>
            </div>
          </div>
      </div>

      <div class="modal-footer">
        <center>
          <button type="submit" name="simpan" class="btn btn-default btn-sm clik" style="color: #fff;background: #031b29;border-color: #3c1012"> <i class="fa fa-paper-plane text-theme m-l-5"></a></i> Submit</button>
          </form>
          <button type="button" name="batal" class="btn btn-warning btn-sm clik" data-dismiss="modal">Cancel</button>
        </center>
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
            <h4><i class="fa fa-info-circle"></i> Hapus Data Pengajar / <em>Accessor</em></h4>
          </center>
        </div>
      </div>
      <div class="modal-body">
        <h5>Apakah anda yakin ingin menghapus data barang dengan nama <strong class="text-capitalize">"<?php echo $data['nama']; ?>"</strong> ?</h5>
      </div>

      <div class="modal-footer">
        <a class="btn btn-warning clik" style="color: #fff;background: #031b29;border-color: #3c1012" href="page/aksi_data_pengajar.php?act=hapus&&id=<?php echo $data['id'] ?>">Hapus Data</a>
        <button type="button" name="batal" class="btn btn-success clik" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>