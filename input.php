<?php
    include 'db.php';
    if (isset($_POST['submit'])) {
        $nama = $_POST['nama'];
        $alamat = $_POST['alamat'];
        $usia = $_POST['usia'];
        $db_tampil = new db();
        $db_tampil->simpan($nama, $alamat, $usia);
        header('Location: tampil.php');
    }
     
?>

<html>
    <form action="" method="post">
        <label>nama</label>
        <input type="text" name="nama">
        <br>
        <br>
        <label>alamat</label>
        <input type="text" name="alamat">
        <br>
        <br>
        <label>usia</label>
        <input type="number" name="usia">
        <br>
        <br>
        <input type="submit" name="submit">
    </form>
    
</html>