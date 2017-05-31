<?php
/**
 * @author Pizaini <pizaini@uin-suska.ac.id>
 * http://pizaini.wordpress.com
 * (c) 2017
 */
include 'connection.php';
?>
    <h1>Data Mahasiswa</h1>
    <a href="form-insert.php">Tambah Data</a>
<?php
$querySelect = 'select * from mahasiswa';
$result = $connection->query($querySelect);
if(!$result === false): ?>
    <table border="1">
        <thead>
            <tr>
                <th>#</th>
                <th>NIM</th>
                <th>Nama</th>
                <th>Jenis Kelamin</th>
                <th>Alamat</th>
                <th>Tgl. Lahir</th>
                <th>&nbsp;</th>
            </tr>
        </thead>
        <tbody>
    <?php foreach ($result as $no => $mahasiswa): ?>
        <tr>
            <td><?=++$no?></td>
            <td><?=$mahasiswa['nim']?></td>
            <td><?=$mahasiswa['nama']?></td>
            <td><?=$mahasiswa['jenis_kelamin']?></td>
            <td><?=$mahasiswa['alamat']?></td>
            <td><?=$mahasiswa['tgl_lahir']?></td>
            <td>
                <a href="detail.php?id=<?=$mahasiswa['id']?>">Detail</a> |
                <a href="delete.php?id=<?=$mahasiswa['id']?>">Delete</a>
            </td>
        </tr>
    <?php endforeach; ?>
        </tbody>
    </table>
<?php endif;