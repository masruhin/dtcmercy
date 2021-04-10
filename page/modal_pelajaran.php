<!-- === Modal TAMBAH Data === -->
<div id="tambah_data" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <div class="alert alert-danger m-b-0">
          <center>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4><i class="fa fa-info-circle"></i> Tambah Data Pelajaran / <em>Course</em></h4>
          </center>
        </div>
      </div>
      <div class="modal-body">
        <form method="POST" action="page/aksi_data_pelajaran.php?act=tambah_data" enctype="multipart/form-data">

          <div class="col-md-6">
            <div class="form-group">
              <label>ID Pelajaran / <em>ID Course</em> </label>
              <input type="text" name="id_pelajaran" class="form-control" required="" placeholder="Input ID" />
            </div>
            <div class="form-group">
              <label> Nama Kursus / <em>Course Name</em> </label>
              <input type="text" name="nama_pel" class="form-control" required="" placeholder="Input Name Course" />
            </div>

            <div class="form-group">
              <label>Nama Pengajar / <em>Accessor Name</em></label>
              <select name="id_pengajar" class="form-control">
                <option value="BLANK" class="form-control">-- Pilih Accessor --</option>
                <?php
                include 'conn.php';
                $query = mysqli_query($conn, "SELECT * FROM pengajar ORDER BY id_pengajar");
                while ($a  = mysqli_fetch_array($query)) {
                  if ($datapekerjaan == $a['id_pengajar']) {
                    $cek = " selected";
                  } else {
                    $cek = "";
                  }
                  echo "<option value='$a[id_pengajar]' class='form-control' $cek>$a[nama]</option>";
                ?>
                <?php
                }
                ?>
              </select>
            </div>
            <div class="form-group">
              <label for="exampleInputFile">Foto</label>
              <div class="input-group">
                <div class="custom-file">
                  <input name="images" type="file" class="custom-file-input" id="images">
                </div>
                <div class="input-group-append">
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-6">
            <div class="form-group">
              <label>Deskripsi / <em>Description</em> </label>
              <textarea name="deskripsi" class="form-control" placeholder="Input Description" rows="5" style="height: 248px;"></textarea>
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
            <h4><i class="fa fa-info-circle"></i> Update Data Course</h4>
          </center>
        </div>
      </div>
      <div class="modal-body">
        <form method="POST" action="page/aksi_data_pelajaran.php?act=ubah&&id=<?php echo $data['id'] ?>">

          <div class="col-md-6">
            <div class="form-group">
              <label>ID Pelajaran / <em>ID Course</em> </label>
              <input type="text" name="id_pelajaran" class="form-control" required="" placeholder="Input ID" value="<?php echo $data['id_pelajaran'] ?>" />
            </div>
            <div class="form-group">
              <label> Nama Kursus / <em>Course Name</em> </label>
              <input type="text" name="nama_pel" class="form-control" required="" placeholder="Input Name Course" value="<?php echo $data['nama_pel'] ?>" />
            </div>

            <div class="form-group">
              <label>Nama Pengajar / <em>Accessor Name</em></label>
              <select name="id_pengajar" class="form-control">
                <option value="<?php echo $data['id_pengajar'] ?>" class="form-control">-- Pilih Accessor --</option>
                <?php
                include 'conn.php';
                $query = mysqli_query($conn, "SELECT * FROM pengajar ORDER BY id_pengajar");
                while ($a  = mysqli_fetch_array($query)) {
                  if ($datapekerjaan == $a['id_pengajar']) {
                    $cek = " selected";
                  } else {
                    $cek = "";
                  }
                  echo "<option value='$a[id_pengajar]' class='form-control' $cek>$a[nama]</option>";
                ?>
                <?php
                }
                ?>
              </select>
            </div>
          </div>

          <div class="col-md-6">
            <div class="form-group">
              <label>Deskripsi / <em>Description</em> </label>
              <textarea name="deskripsi" class="form-control" placeholder="Input Description" rows="5" style="height: 177px;" value="<?php echo $data['deskripsi'] ?>"><?php echo $data['deskripsi'] ?></textarea>
            </div>
          </div>
      </div>

      <div class="modal-footer">
        <center>
          <button type="submit" name="simpan" class="btn btn-default btn-sm clik" style="color: #fff;background: #031b29;border-color: #3c1012"> <i class="fa fa-paper-plane text-theme m-l-5"></a></i> Update</button>
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
            <h4><i class="fa fa-info-circle"></i> Hapus Data Course</h4>
          </center>
        </div>
      </div>
      <div class="modal-body">
        <h5>Apakah anda yakin ingin menghapus data barang dengan nama <strong class="text-capitalize">"<?php echo $data['nama']; ?>"</strong> ?</h5>
      </div>

      <div class="modal-footer">
        <a class="btn btn-warning clik" style="color: #fff;background: #031b29;border-color: #3c1012" href="page/aksi_data_pelajaran.php?act=hapus&&id=<?php echo $data['id'] ?>">Hapus Data</a>
        <button type="button" name="batal" class="btn btn-success clik" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>



<!-- === Modal TAMBAH Data === -->
<!-- <div id="tambah_data" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <div class="alert alert-danger m-b-0">
          <center>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4><i class="fa fa-info-circle"></i> Tambah Data Pelajaran / <em>Course</em></h4>
          </center>
        </div>
      </div>
      <div class="modal-body">
        <form method="POST" action="page/aksi_data_pelajaran.php?act=tambah_data">

          <div class="col-md-6">
            <div class="form-group">
              <label>ID Pelajaran / <em>ID Course</em> </label>
              <input type="text" name="id_pelajaran" class="form-control" required="" placeholder="Input ID" />
            </div>
            <div class="form-group">
              <label> Nama Kursus / <em>Course Name</em> </label>
              <input type="text" name="nama_pel" class="form-control" required="" placeholder="Input Name Course" />
            </div>

            <div class="form-group">
              <label>Nama Pengajar / <em>Accessor Name</em></label>
              <select name="id_pengajar" class="form-control">
                <option value="BLANK" class="form-control">-- Pilih Accessor --</option>
                <?php
                include 'conn.php';
                $query = mysqli_query($conn, "SELECT * FROM pengajar ORDER BY id_pengajar");
                while ($a  = mysqli_fetch_array($query)) {
                  if ($datapekerjaan == $a['id_pengajar']) {
                    $cek = " selected";
                  } else {
                    $cek = "";
                  }
                  echo "<option value='$a[id_pengajar]' class='form-control' $cek>$a[nama]</option>";
                ?>
                <?php
                }
                ?>
              </select>
            </div>
          </div>

          <div class="col-md-6">
            <div class="form-group">
              <label>Deskripsi / <em>Description</em> </label>
              <textarea name="deskripsi" class="form-control" placeholder="Input Description" rows="5" style="height: 177px;"></textarea>
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
</div> -->