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
                              <td>no</td>
                              <td>Nama Barang</td>
                              <td>Harga</td>
                              <td>Stok</td>
                              <td>Tanggal Masuk</td>
                              <td>Kondisi</td>
                              <td>Status</td>
                              <td>Jenis Barang</td>
                              <td>Action</td>
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
                              <td></td>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td></td>
                             <?php
                    $no++;         
                    }
                             ?>
                    </tr>
          </table>
</body>
</html>