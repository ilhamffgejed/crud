<html>

<body>
    <center>
        <h2><b>Data Bio</h2></b>
        <center>
            <a href="tambah.php">Tambah</a>
            <table border="1">
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Tanggal Lahir</th>
                    <th>Tempat Lahir</th>
                    <th>Jenis Kelamin</th>
                    <th>Agama</th>
                    <th>Alamat</th>
                    <th>Motivasi Hidup</th>
                    <th>Aksi</th>
                </tr>

                <?php
                include 'database.php';
                $biodata = new Biodata();
                $no = 1;
                foreach ($biodata->index() as $data) {
                    ?>

                    <tr>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $data['nama']; ?></td>
                        <td><?php echo $data['tanggal_lahir']; ?></td>
                        <td><?php echo $data['tempat_lahir']; ?></td>
                        <td><?php echo $data['jenis_kelamin']; ?></td>
                        <td><?php echo $data['agama']; ?></td>
                        <td><?php echo $data['alamat']; ?></td>
                        <td><?php echo $data['motivasi_hidup']; ?></td>
                        

<td><a href="show.php?id=<?php echo $data['id']; ?>">Tampil</a>
    <a href="edit.php?id=<?php echo $data['id']; ?>">Edit</a>
    <a href="proses.php?id=<?php echo $data['id']; ?>& aksi=delete" onclick="return confirm('Apakah Anda Yakin Mau Menghapus Data Ini?')">Hapus</a>
                        </td>
                    </tr>
                <?php
                }
                ?>
            </table>
</body>

</html>