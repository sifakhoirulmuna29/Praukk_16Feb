<?php
include("koneksi.php");
?>

<html>
    <head>
</head>
<body>
    <h1>PENDATAAN INVENTARIS</h1>
    <h4> <a href="tambah.php">Tambah data</a></h4>
    <table border="1">
        <tr>
            <th>No</th>
            <th>Nama User</th>
            <th>Jabatan</th>
            <th>Nama Bahan</th>
            <th>Jenis Bahan</th>
            <th>Stok</th>
            <th>Harga</th>
            <th>Kondisi</th>
            <th>Tanggal Masuk</th>
            <th>Aksi</th>
        </tr>

<?php
$sql="SELECT * FROM tb_user INNER JOIN tb_bahan ON tb_user.id_bahan = tb_bahan.id_bahan";
$query = mysqli_query($koneksi, $sql);

while($row=mysqli_fetch_array($query)){
      echo "<tr>";
      echo "<td>".$row['id_user']."</td>";
      echo "<td>".$row['nama_user']."</td>";
      echo "<td>".$row['jabatan']."</td>";
      echo "<td>".$row['nama_bahan']."</td>";
      echo "<td>".$row['jenis_bahan']."</td>";
      echo "<td>".$row['stok']."</td>";
      echo "<td>".$row['harga']."</td>";
      echo "<td>".$row['kondisi']."</td>";
      echo "<td>".$row['tgl_masuk']."</td>";
      echo "<td>";
      echo "<a href='edit.php?id_user=".$row['id_user']."'>Edit</a> |";
      echo "<a href='hapus.php?id_user=".$row['id_user']."'>Hapus</a> |";
      echo "</td>";
     echo '</tr>';


}
?>
</table>
</body>
</html>
