<?php
include '../conn.php';
if ($_GET['act'] == 'tambahuser') {
  $id_user    = $_POST['id_user'];
  $username   = $_POST['username'];
  $password   = $_POST['password'];
  $pekerjaan  = $_POST['pekerjaan'];
  $status     = $_POST['status'];
  $sql = "INSERT INTO user (id_user,username,password,pekerjaan,status) VALUES ('$id_user','$username','$password',' $pekerjaan','$status')";
  $simpan = mysqli_query($conn, $sql);
  if ($simpan) {
    echo "<script>alert('Anda Berhasil Menambah Data')</script>";
    echo '<meta http-equiv="refresh" content="0; url=../main.php?page=menejemen_siswa">';
    // echo $simpan;
  } else {
    echo "<script>alert('Anda Gagal Menambah Data')</script>";
    echo '<meta http-equiv="refresh" content="0; url=../main.php?page=dashboard">';
  }
} elseif ($_GET['act'] == 'hapus') {
  $id_user = $_GET['id_user'];

  $hapus = mysqli_query($conn, "DELETE FROM user WHERE id_user = '$id_user'");

  if ($hapus) {
    echo "<script>alert('Anda Berhasil Menghapus Data')</script>";
    echo '<meta http-equiv="refresh" content="0; url=../main.php?page=menejemen_siswa">';
  } else {
    echo "error, data gagal dihapus" . mysqli_error($conn);
  }
} elseif ($_GET['act'] == 'ubah') {

  $id = $_GET['id'];
  $id_user = $_POST['id_user'];
  $username = $_POST['username'];
  $password = md5($_POST['password']);
  $pekerjaan = $_POST['pekerjaan'];
  $status = $_POST['status'];

  $ubah = mysqli_query($conn, "UPDATE user SET id_user='$id_user', username='$username', pekerjaan='$pekerjaan' , status='$status' WHERE id='$id' ");

  // var_dump($ubah);
  // die();
  if ($ubah) {
    echo "<script>alert('Anda Berhasil Mengubah Data')</script>";
    echo '<meta http-equiv="refresh" content="0; url=../main.php?page=menejemen_siswa">';
  } else {
    echo "<script>alert('Anda Gagal Mengubah Data')</script>";
    echo '<meta http-equiv="refresh" content="0; url=../main.php?page=menejemen_siswa">';
  }
}
