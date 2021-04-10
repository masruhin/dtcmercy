<style>
  input {
    margin-bottom: 20px;
  }

  select {
    margin-bottom: 20px;
  }
</style>
<!-- MODAL Hapus -->
<div id="hapus<?php echo $data['id_user'] ?>" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title"><strong>Hapus Data User</strong></h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
        <h5>Apakah anda yakin ingin menghapus data barang dengan nama <strong class="text-capitalize">"<?php echo $data['id_user']; ?>"</strong> ?</h5>
      </div>
      <div class="modal-footer">
        <a class="btn btn-primary" href="page/aksi_siswa.php?act=hapus&id_user=<?php echo $data['id_user']; ?>">Hapus Data</a>
        <button type="button" name="batal" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- END MODAL Hapus -->




<div id="ubah<?php echo $data['id'] ?>" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">

      <div class="modal-header">
        <h4 class="modal-title"><strong>Ubah Data User</strong></h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <div class="modal-body">

        <form method="POST" action="page/aksi_siswa.php?act=ubah&&id=<?php echo $data['id'] ?>">
          <div class="form-group">
            <label>ID</label>
            <input type="text" name="id_user" class="form-control" value="<?php echo $data['id_user']; ?>" required="" />
          </div>
          <div class="form-group">
            <label>Username</label>
            <input type="text" name="username" class="form-control" value="<?php echo $data['username']; ?>" required="" />
          </div>
          <div class="form-group">
            <label>Password</label>
            <input type="password" name="password" value="<?php echo $data['password']; ?>" class="form-control" required="" />
          </div>
          <div class="form-group">
            <label>Job</label>
            <input type="text" name="pekerjaan" class="form-control" value="<?php echo $data['pekerjaan']; ?>" required="" />
          </div>
          <div class="form-group">
            <label>Status User</label>
            <select class="form-control" name="status">
              <option value="">--- Pilih Status User ---</option>
              <option value="aktif">Aktif</option>
              <option value="non-aktif">Non-Aktif</option>
            </select>
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


<!-- START MODAL ubah -->
<!-- begin col-6 -->
<!-- <div class="col-md-6">
  <div class="modal fade" id="ubah<?php echo $data['id_user'] ?>">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-body">
          <div class="panel panel-inverse" data-sortable-id="form-stuff-1">
            <div class="panel-heading">
              <div class="panel-heading-btn">
                <a href="javascript:;" class="btn btn-sm btn-warning" data-dismiss="modal">Close</a>
              </div>
              <center>
                <h4 class="panel-title">Update Data</h4>
              </center>
            </div>
            <div class="panel-body">
              <form class="form-horizontal" action=page/aksi_siswa.php?act=ubah&&id_user=<?php echo $data['id_user']; ?>" method="post">
                <div class="form-group">
                  <label class="col-md-3 control-label">ID</label>
                  <div class="col-md-9">
                    <input type="text" name="id_user" class="form-control" value="<?php echo $data['id_user']; ?>" required="" />
                  </div>
                </div>
                <br>
                <div class="form-group">
                  <label class="col-md-3 control-label">Username</label>
                  <div class="col-md-9">
                    <input type="text" name="username" class="form-control" placeholder="input Name Student" value="<?php echo $data['username']; ?>" />
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-md-3 control-label">Password</label>
                  <div class="col-md-9">
                    <input type="text" name="password" class="form-control" placeholder="input Password" value="<?php echo $data['password']; ?>" />
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-md-3 control-label">Job</label>
                  <div class="col-md-9">
                    <input type="text" name="pekerjaan" class="form-control" placeholder="input Name Student / masukan" / value="<?php echo $data['pekerjaan']; ?>">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-md-3 control-label">Status</label>
                  <div class="col-md-9">
                    <select class="form-control" name="status">
                      <?php
                      if ($data['status'] == "aktif") echo "<option value='aktif' selected>aktif</option>";
                      else echo "<option value='aktif'>aktif</option>";

                      if ($data['status'] == "non-aktif") echo "<option value='non-aktif' selected>non-aktif</option>";
                      else echo "<option value='non-aktif'>non-aktif</option>";
                      ?>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-md-3 control-label"></label>
                  <div class="col-md-9">
                    <a class="btn btn-primary" href="aksi_siswa.php?act=ubah&&id_user=<?php echo $data['id_user']; ?>">Simpan</a>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
        <div class="modal-footer">
        </div>
      </div>
    </div>
  </div>

</div> -->
<!-- end col-6 -->
<!-- END MODAL ubah -->