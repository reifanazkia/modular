<?php

include_once '../models/m_user.php';

$user = new user();




try {
  
  if (!empty($_GET['aksi'])) {

      if (!($_GET['aksi'] == 'hapus')) {

          $id_user = $_POST['id_user'];
          $username = $_POST['username'];
          $email = $_POST['email'];
          $password = $_POST['password'];
          $nama = $_POST['nama_user'];
          $alamat = $_POST['alamat_user'];
          $jk = $_POST['jenis_kelamin'];
          $tempat = $_POST['tempatlahir_user'];
          $tanggal = $_POST['tanggallahir_user'];

          if ($_GET['aksi'] == 'tambah') {

              $user->tambah_user($id_user, $username, $email, $password, $nama, $alamat, $jk, $tempat, $tanggal);

          } elseif ($_GET['aksi'] == 'update') {

              $user->ubah_user($id_user, $username, $email, $password, $nama, $alamat, $jk, $tempat, $tanggal);
          }
      } else {

          $id_user = $_GET['id'];

          $user->hapus_user($id_user);
      }
  } else {

      $user = $user->tampil_data();

  }
} catch (Exception $e) {

  echo $e->getMessage();
}