<?php
include '../conn.php';

if ($_GET['act'] == 'tambahuser') {
  $nik        = $_POST['nik'];
  $nama       = $_POST['nama'];
  $jk         = $_POST['jk'];
  $username   = $_POST['username'];
  $password   = $_POST['password'];
  $status     = $_POST['status'];
  $pekerjaan  = $_POST['pekerjaan'];
  $dept       = $_POST['dept'];
  $level      = $_POST['level'];

  $sql = "INSERT INTO karyawan (nik,nama,jk,username,password,status,pekerjaan,dept,level)
          VALUES ('$nik','$nama','$jk','$username','$password','$status','$pekerjaan','$dept','$level')";

  $simpan = mysqli_query($conn, $sql);
  if ($simpan) {
    // var_dump($simpan);
    // die();
    echo "<script>alert('Anda Berhasil Menambah Data')</script>";
    echo '<meta http-equiv="refresh" content="0; url=../main.php?page=data_student">';
  } else {
    echo "<script>alert('Anda Gagal Menambah Data')</script>";
    echo '<meta http-equiv="refresh" content="0; url=../main.php?page=data_student">';
  }
} else if ($_GET['act'] == 'updateuser') {
  // $id = isset($_GET['id']) ? $_GET['id'] : '';
  $id         = $_POST['id'];
  $nik        = $_POST['nik'];
  $nama       = $_POST['nama'];
  $jk         = $_POST['jk'];
  $username   = $_POST['username'];
  $password   = $_POST['password'];
  $status     = $_POST['status'];
  $pekerjaan  = $_POST['pekerjaan'];
  $dept       = $_POST['dept'];
  $level      = $_POST['level'];

  $ubah       = mysqli_query($conn, "UPDATE karyawan SET  nik ='$nik',nama = '$nama', jk = '$jk', username = '$username', password ='$password', status = '$status', pekerjaan = '$pekerjaan', dept = '$dept', level = '$level' WHERE id='$id' ");

  if ($ubah) {
    // var_dump($ubah);
    // die();
    echo "<script>alert('Anda Berhasil Mengubah Data')</script>";
    echo '<meta http-equiv="refresh" content="0; url=../main.php?page=data_student">';
  }
  // echo "<script>alert('Anda Gagal Mengubah Data')</script>";
  echo '<meta http-equiv="refresh" content="0; url=../main.php?page=data_student">';
}
