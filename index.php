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
                              <th>Nama Jenis</th>
                              <th>Keterangan</th>
                              <th>Action</th>
                    </tr>
                     <?php
                             $no = 1;
                             $query = "SELECT * FROM jenis_barang ";
                             $sql = mysqli_query($koneksi, $query);
                             while ($row = mysqli_fetch_array($sql)) {
                             ?>
                    <tr>
                             
                              <td><?=$no?></td>
                              <td><?=$row['nama_jenis']?></td>
                              <td><?=$row['ketereangan']?></td>

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