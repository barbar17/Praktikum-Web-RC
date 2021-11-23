<html>
<link rel="stylesheet" href="css_tampil_barang.css">
<table class="tabel" align="center">
    <tr>
        <th>No</th>
        <th>ID</th>
        <th>Nama Barang</th>
        <th>Jenis</th>
        <th>Qty</th>
        <th>Harga(Rp)</th>
    </tr>
    <?php
        include "koneksi_DB.php";
        $hasil = mysqli_query($kon,"select * from barang order by id asc");
        $no = 0;
        while ($data = mysqli_fetch_array($hasil)):
            $no++;
    ?>
    <tr>
        <td><?php echo $no; ?></td>
        <td><?php echo $data['id']; ?></td>
        <td><?php echo $data['nama']; ?></td>
        <td><?php echo $data['jenis']; ?></td>
        <td><?php echo $data['qty']; ?></td>
        <td><?php echo $data['harga']; ?></td>
    </tr>
        <?php endwhile;?>
</table>
</html>