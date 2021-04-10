<?php
include '../conn.php';
$folder = "gambar_admin";

if ($_GET['act'] == 'tambah_data') {

  $id_pelajaran = $_POST['id_pelajaran'];
  $nama_pel     = $_POST['nama_pel'];
  $id_pengajar  = $_POST['id_pengajar'];
  $deskripsi    = $_POST['deskripsi'];
  $location = "gambar_admin/";
  $file1 = $_FILES['images']['name'];
  $file_tmp1 = $_FILES['images']['tmp_name'];
  // $data = [];
  // $data = [$file1];
  $tambah       = mysqli_query($conn, "INSERT INTO 	pelajaran 
                                          (id_pelajaran,
                                            nama_pel,
                                            id_pengajar,
                                            deskripsi,
                                            images)
                                    VALUES ('$id_pelajaran',
                                            '$nama_pel',
                                            '$id_pengajar',
                                            '$deskripsi',
                                            '$file1')");

  // var_dump($tambah);
  // die();
  if ($tambah) {
    move_uploaded_file($file_tmp1, $location . $file1);
    echo "<script>alert('Anda Berhasil Menambah Data')</script>";
    echo '<meta http-equiv="refresh" content="0; url=../main.php?page=data_pelajaran">';
  } else {
    echo "<script>alert('Anda Gagal Menambah Data')</script>";
    echo '<meta http-equiv="refresh" content="0; url=../main.php?page=data_pelajaran">';
  }
} elseif ($_GET['act'] == 'ubah') {

  $id = $_GET['id'];
  $id_pelajaran = $_POST['id_pelajaran'];
  $nama_pel     = $_POST['nama_pel'];
  $id_pengajar  = $_POST['id_pengajar'];
  $deskripsi    = $_POST['deskripsi'];

  $ubah = mysqli_query($conn, "UPDATE pelajaran 
                               SET  id_pelajaran='$id_pelajaran',
                                    nama_pel ='$nama_pel', 
                                    id_pengajar = '$id_pengajar', 
                                    deskripsi = '$deskripsi'
                               WHERE id='$id'");

  // var_dump($ubah);
  // die();
  if ($ubah) {
    echo "<script>alert('Anda Berhasil Mengubah Data')</script>";
    echo '<meta http-equiv="refresh" content="0; url=../main.php?page=data_pelajaran">';
  } else {
    echo "<script>alert('Anda Gagal Mengubah Data')</script>";
    echo '<meta http-equiv="refresh" content="0; url=../main.php?page=data_pelajaran">';
  }
} elseif ($_GET['act'] == 'hapus') {

  $id = $_GET['id'];

  $hapus = mysqli_query($conn, "DELETE FROM pelajaran WHERE id='$id' ");
  // var_dump($hapus);
  // die();
  if ($hapus) {
    echo "<script> alert('Anda Berhasil Menghapus Data')</script>";
    echo '<meta http-equiv="refresh" content="0; url=../main.php?page=data_pelajaran">';
  } else {
    echo "<script>alert('Anda Gagal Menghapus Data')</script>";
    echo '<meta http-equiv="refresh" content="0; url=../main.php?page=data_pelajaran">';
  }
}
