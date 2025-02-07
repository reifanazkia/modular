<?php

include_once '../models/m_reglog.php';

$reglog = new reglog();

try {
    
    if ($_GET['aksi'] == 'registrasi') {
        $id_user = $_POST['id_user'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password = password_hash($password, PASSWORD_DEFAULT);
    $nama = $_POST['nama_user'];
    $alamat = $_POST['alamat_user'];
    $jk = $_POST['jenis_kelamin'];
    $tempat = $_POST['tempatlahir_user'];
    $tanggal = $_POST['tanggallahir_user'];
    $role = $_POST['role'];


    $reglog->regist($id_user, $username, $email, $password, $nama, $alamat, $jk, $tempat, $tanggal, $role);


    }elseif ($_GET['aksi'] == 'login') {
        $email = $_POST['email'];
        $password = $_POST['password'];

        $reglog->login($email, $password);
    }elseif ($_GET['aksi'] == 'logout') {
        # code...
    }

} catch (Exception $e) {

    echo $e->getMessage();

}

?>