<?php

// Memanggil file c_koneksi yang ada pada folder controllers
include_once '../controllers/c_koneksi.php';

class user
{
  // Membuat fungsi untuk menampilkan data dari tabel user yang ada di db/database

  function tampil_data()
  {
    // kita buat / instansiasi objek dari class atau file koneksi
    $conn = new koneksi();

    // Perintah untuk menampilkan semua data dari tabel user
    // select => tampilkan, * => semua data, from => dari, user => merupakan tabel yang datanya akan ditampilkan
    $sql = "SELECT * FROM user";

    // eksekutor untuk perintah diatas ($sql)
    $query = mysqli_query($conn->koneksi, $sql);


    // Untuk mengecek apakah $query ada datanya atau tidak
    if ($query -> num_rows > 0) {
      // Kita mencacah data menjadi data array asosiatif
      while($data = mysqli_fetch_object($query)){
        // Kita bungkus hasil cacahan dari $data
        $hasil[] = $data;
      }
      // Mengembalikan nilai
      return $hasil;
    } else {
      echo "Data pada tabel user kosong";
    }
    
  }

  // membuat fungsi untuk menambahkan data user dari form yang kita buat
  // parameter, argumennya di c_user
  function tambah_user($id, $username,$email,$password,$nama,$alamat,$jk,$tempatlahir, $tanggallahir){
    $conn = new koneksi();
    $sql = "INSERT INTO user VALUES ('$id', '$username','$email','$password','$nama','$alamat','$jk','$tempatlahir', '$tanggallahir')";
    $query = mysqli_query($conn->koneksi,$sql);

    if ($query) {
      echo "<script>alert('data berhasil ditambahkan'), window.location='../views/dashboard.php'</script>";
    } else {
      echo "<script>alert('data gagal ditambahkan'), window.location='../views/form.php'</script>";
    }
    
  } 
  
function tampil_data_byid($id){
  $conn = new koneksi();
  $sql = "SELECT *    FROM user WHERE id_user = $id";

  $query = mysqli_query($conn->koneksi,$sql);

  if ($query-> num_rows > 0) {
    while($data = mysqli_fetch_object($query)){
      $result[] = $data;
    }
    return $result;
  } else {
    echo "Tidak Ada Data";
  }
}


}
