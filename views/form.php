<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <center>
    <h1>Tambah User</h1>

    <form action="" method="get">
        <label for="username">Username :</label>
        <input type="text" name="username" placeholder="Username" id="username" required>
        <br>
        <br>
        <label for="email">Email :</label>
        <input type="email" name="email" placeholder="Email" id="email" required>
        <br>
        <br>
        <label for="password">Password :</label>
        <input type="password" name="password" placeholder="Password" id="password" required>
        <br>
        <br>
        <label for="alamat_user">Alamat User :</label>
        <input type="text" name="alamat_user" placeholder="Alamat User" id="alamat_user" required>
        <br>
        <br>
        <button type="submit" name="kirim">Kirim</button><hr>



<?php
    //cara menangkap inputan dari user

    $username = $_GET['username'];
    $email = $_GET['email'];
    $password = $_GET['password'];
    $alamat = $_GET['alamat_user'];

    // bagaimana cara untuk menampilkan data yang di inputkan oleh user

    echo "Username = " . $username;
    echo "<br>";
    echo "<br>";
    echo "Email = " . $email;
    echo "<br>";
    echo "<br>";
    echo "Password = " . $password;
    echo "<br>";
    echo "<br>";
    echo "Alamat = " . $alamat;

?>
        </form>
        </center>

</body>

</html>