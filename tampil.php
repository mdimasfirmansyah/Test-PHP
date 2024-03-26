    <?php
include 'db.php';
$db_tampil = new db();
$data = $db_tampil->tampil();
?>

<html>
    <style>
    table, th, td {
    border: 1px solid black;
    }
    
    </style>
<br>
<br>
    <a href="input.php">input data baru</a>
    <br>
    <br>
    <table>
        <thead>
            <tr>
                <td>No.</td>
                <td>Nama</td>
                <td>Alamat</td>
                <td>Usia</td>
                <td>Opsi</td>
            </tr>
        </thead>
        <tbody>
        <?php
        for ($i=0; $i < count($data); $i++) { 
            $id = $data[$i]['id'];
        ?>
        <tr>
            <td><?php echo $data[$i]['id'] ?></td>
            <td><?php echo $data[$i]['nama'] ?></td>
            <td><?php echo $data[$i]['alamat'] ?></td>
            <td><?php echo $data[$i]['usia'] ?></td>
            <td><?php echo "<a href='proses_hapus.php?id=$id'>hapus</a>" ?></td>
        </tr>
        <?php
        }
        ?>
        </tbody>
    </table>


</html>