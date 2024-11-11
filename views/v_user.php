<?php
include_once '../controllers/c_user.php';
require_once 'template/header.php';
require_once 'template/navbar.php';
?>

<!-- awal dari isi body -->
<?php
// $user => intansiasi objek dari c_user.php
// tampil_data => functiton atau fungsi yang ada pada m_user.php
// as => alias
// $data => variabel bebas untuk menampung $user->tampil_data()
foreach ($user->tampil_data() as $data) :
?>

<p>
<?= $data['username']?> |
<?= $data['email']?> |
<?= $data['password']?> |
<?= $data['nama_user']?> |
<?= $data['alamat_user']?> |
<?= $data['jenis_kelamin']?> |
<?= $data['tempatlahir_user']?> |
<?= $data['tanggallahir_user']?>
</p>


<?php endforeach; ?>
<!-- akhir dari isi body -->
 
<?php
require_once 'template/footer.php';
?>