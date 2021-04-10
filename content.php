<?php

if (isset($_GET['page'])) {

  $page = $_GET['page'];

  switch ($page) {

    case 'dashboard':
      include "page/dashboard.php";
      break;

    case 'menejemen_siswa':
      include "page/menejemen_siswa.php";
      break;

    case 'data_student':
      include "page/data_student.php";
      break;

    case 'pengguna':
      include "page/pengguna.php";
      break;

    case 'data_pengajar':
      include "page/data_pengajar.php";
      break;

    case 'data_pelajaran':
      include "page/data_pelajaran.php";
      break;

    case 'data_materi':
      include "page/data_materi.php";
      break;

      // case 'modal_data_student':
      //   include "page/modal_data_student.php";
      //   break;

    case 'manejemen_pelajaran':
      include "page/manejemen_pelajaran.php";
      break;

    case 'menejemen_materi':
      include "page/menejemen_materi.php";
      break;

    case 'menejemen_quiz':
      include "page/menejemen_quiz.php";
      break;

    case 'registrasi_siswa':
      include "page/registrasi_siswa.php";
      break;

    case 'menejemen_asesor':
      include "page/menejemen_asesor.php";
      break;

    case 'menejemen_modul':
      include "page/menejemen_modul.php";
      break;

    case 'berita':
      include "page/berita.php";
      break;

    default:
      echo "<center><h3>Maaf. Halaman tidak di temukan !</h3></center>";
      break;
  }
} else {
  include "page/dashboard.php";
}
