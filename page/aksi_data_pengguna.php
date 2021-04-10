<?php
include '../conn.php';

if ($_GET['act'] == 'tambah_data') {

  $nik        = $_POST['nik'];
  $nama       = $_POST['nama'];
  $jk         = $_POST['jk'];
  $username   = $_POST['username'];
  $password   = md5($_POST['password']);
  $status     = $_POST['status'];
  $pekerjaan  = $_POST['pekerjaan'];
  $dept       = $_POST['dept'];
  $level      = $_POST['level'];

  $tambah = mysqli_query($conn, "INSERT INTO karyawan (nik,nama,jk,username,password,status,pekerjaan,dept,level)VALUES ('$nik','$nama','$jk','$username','$password','$status','$pekerjaan','$dept','$level')");

  // var_dump($tambah);
  // die();
  if ($tambah) {
    echo "<script>alert('Anda Berhasil Menambah Data')</script>";
    echo '<meta http-equiv="refresh" content="0; url=../main.php?page=pengguna">';
  } else {
    echo "<script>alert('Anda Gagal Menambah Data')</script>";
    echo '<meta http-equiv="refresh" content="0; url=../main.php?page=pengguna">';
  }
} elseif ($_GET['act'] == 'ubah') {

  $id = $_GET['id'];
  $nik        = $_POST['nik'];
  $nama       = $_POST['nama'];
  $jk         = $_POST['jk'];
  $username   = $_POST['username'];
  $password   = $_POST['password'];
  $status     = $_POST['status'];
  $pekerjaan  = $_POST['pekerjaan'];
  $dept       = $_POST['dept'];
  $level      = $_POST['level'];

  $ubah = mysqli_query($conn, "UPDATE karyawan SET  nik ='$nik',nama = '$nama', jk = '$jk', username = '$username', password ='$password', status = '$status', pekerjaan = '$pekerjaan', dept = '$dept', level = '$level'  WHERE id='$id' ");

  // var_dump($ubah);
  // die();
  if ($ubah) {
    echo "<script>alert('Anda Berhasil Mengubah Data')</script>";
    echo '<meta http-equiv="refresh" content="0; url=../main.php?page=pengguna">';
  } else {
    echo "<script>alert('Anda Gagal Mengubah Data')</script>";
    echo '<meta http-equiv="refresh" content="0; url=../main.php?page=pengguna">';
  }
} elseif ($_GET['act'] == 'hapus') {

  $id = $_GET['id'];

  $hapus = mysqli_query($conn, "DELETE FROM karyawan WHERE id='$id' ");
  // var_dump($hapus);
  // die();
  if ($hapus) {
    echo "<script> alert('Anda Berhasil Menghapus Data')</script>";
    echo '<meta http-equiv="refresh" content="0; url=../main.php?page=pengguna">';
  } else {
    echo "<script>alert('Anda Gagal Menghapus Data')</script>";
    echo '<meta http-equiv="refresh" content="0; url=../main.php?page=pengguna">';
  }
}
