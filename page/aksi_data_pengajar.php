<?php
include '../conn.php';

if ($_GET['act'] == 'tambah_data') {

  $id_pengajar = $_POST['id_pengajar'];
  $nik        = $_POST['nik'];
  $nama       = $_POST['nama'];
  $username   = $_POST['username'];
  $password   = $_POST['password'];
  $level      = $_POST['level'];
  $email      = $_POST['email'];
  $dept       = $_POST['dept'];
  $status     = $_POST['status'];

  $tambah = mysqli_query($conn, "INSERT INTO pengajar 
                                          (id_pengajar,
                                            nik,
                                            nama,
                                            username,
                                            password,
                                            level,
                                            email,
                                            dept,
                                            status)
                                    VALUES ('$id_pengajar',
                                            '$nik',
                                            '$nama',
                                            '$username',
                                            '$password',
                                            '$level',
                                            '$email',
                                            '$dept',
                                            '$status')");

  // var_dump($tambah);
  // die();
  if ($tambah) {
    echo "<script>alert('Anda Berhasil Menambah Data')</script>";
    echo '<meta http-equiv="refresh" content="0; url=../main.php?page=data_pengajar">';
  } else {
    echo "<script>alert('Anda Gagal Menambah Data')</script>";
    echo '<meta http-equiv="refresh" content="0; url=../main.php?page=data_pengajar">';
  }
} elseif ($_GET['act'] == 'ubah') {

  $id = $_GET['id'];
  $id_pengajar = $_POST['id_pengajar'];
  $nik        = $_POST['nik'];
  $nama       = $_POST['nama'];
  $username   = $_POST['username'];
  $password   = $_POST['password'];
  $level      = $_POST['level'];
  $email      = $_POST['email'];
  $dept       = $_POST['dept'];
  $status     = $_POST['status'];

  $ubah = mysqli_query($conn, "UPDATE pengajar 
                               SET  id_pengajar='$id_pengajar',
                                    nik ='$nik', 
                                    nama = '$nama', 
                                    username = '$username', 
                                    password ='$password', 
                                    level = '$level',  
                                    email ='$email', 
                                    dept = '$dept', 
                                    status = '$status'  
                               WHERE id='$id'");

  // var_dump($ubah);
  // die();
  if ($ubah) {
    echo "<script>alert('Anda Berhasil Mengubah Data')</script>";
    echo '<meta http-equiv="refresh" content="0; url=../main.php?page=data_pengajar">';
  } else {
    echo "<script>alert('Anda Gagal Mengubah Data')</script>";
    echo '<meta http-equiv="refresh" content="0; url=../main.php?page=data_pengajar">';
  }
} elseif ($_GET['act'] == 'hapus') {

  $id = $_GET['id'];

  $hapus = mysqli_query($conn, "DELETE FROM pengajar WHERE id='$id' ");
  // var_dump($hapus);
  // die();
  if ($hapus) {
    echo "<script> alert('Anda Berhasil Menghapus Data')</script>";
    echo '<meta http-equiv="refresh" content="0; url=../main.php?page=data_pengajar">';
  } else {
    echo "<script>alert('Anda Gagal Menghapus Data')</script>";
    echo '<meta http-equiv="refresh" content="0; url=../main.php?page=data_pengajar">';
  }
}
