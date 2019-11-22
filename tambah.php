<html>

<head>
	<title>CRUD</title>
</head>

<body>

	<center><b>SILAHKAN ISI BIO !!!</b></center>

	<form action="proses.php?aksi=tambah" method="post">

		<label><b>Nama &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp :</b></label>
		<input type="text" name="nama">
		<br><br>
		<label><b>Tanggal Lahir :</b></label>
		<input type="date" name="tanggal_lahir">
		<br><br>
		<label><b>Tempat Lahir : </b></label>
		<input type="text" name="tempat_lahir">
		<br><br>
		<label><b>Jenis Kelamin &nbsp: 
		<input type="radio" name="jenis_kelamin" value="Laki-laki" requered>Laki-laki
		<input type="radio" name="jenis_kelamin" value="Perempuan">Perempuan
		</b></label>
		<br><br>
		<b> Agama &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp : </b><select name="agama">
		<option value="">-</option>
		<option value="Islam">Islam</option>
		<option value="Kristen">Kristen</option>
		<option value="Katolik">Katolik</option>
		<option value="Hindu">Hindu</option>
		<option value="Budha">Budha</option>
		</select><br><br>
		Alamat &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp : <textarea name="alamat"></textarea> <br>
		Motivasi Hirup : <textarea name="motivasi_hidup"></textarea> <br>

		<br><br>
		 
		<button type="submit" name="simpan">Simpan</button>

	</form>
</body>

</html>