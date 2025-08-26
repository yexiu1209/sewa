<?php
include("koneksi.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
          <meta charset="UTF-8">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <title>Document</title>
</head>
<body>
          <table>
                    <tr>
                              <th>no</th>
                              <th>Nama Barang</th>
                              <th>Harga</th>
                              <th>Stok</th>
                              <th>Tanggal Masuk</th>
                              <th>Kondisi</th>
                              <th>Status</th>
                              <th>Jenis Barang</th>
                              <th>Action</th>
                    </tr>
                    <tr>
                              <?php
                             $no = 1;
                             $query = "SELECT * FROM barang JOIN jenis_barang ON barang.jenis_barang = jenis_barang.id ";
                             $sql = mysqli_query($koneksi, $query);
                             while ($row = mysqli_fetch_array($sql)) {
                             ?>
                              <td><?=$no?></td>
                              <td><?=$row['nama_barang']?></td>
                              <td><?=$row['stok']?></td>
                              <td><?=$row['harga']?></td>
                              <td><?=$row['tanggal_masuk']?></td>
                              <td><?=$row['kondisi']?></td>
                              <td><?=$row['status']?></td>
                              <td><?=$row['jenis_barang']?></td>
                              
                              <td><a>edit</a>
                    <a>delete</a></td>
                             <?php
                    $no++;         
                    }
                             ?>
                    </tr>
          </table>
</body>
</html>