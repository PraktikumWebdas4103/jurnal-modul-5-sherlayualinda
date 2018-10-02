<!DOCTYPE html>
<html>
<body bgcolor ="skyblue">
	<form method="POST">
		<br><br><br>
	<center><h1>Pendaftaran</h1>
	<table border="1" bgcolor="floralwhite">
		<tr>
			<td>
				<table>
					<tr>
						<td>NIM</td>
						<td>:</td>
						<td><input type="text" name="nim" required></td>
					</tr>

					<tr>
						<td>Nama</td>
						<td>:</td>
						<td><input type="text" name="nama" required></td>
					</tr>

					<tr>
						<td>Email</td>
						<td>:</td>
						<td><input type="email" name="email" placeholder ="@gmail.com" required></td>
					</tr>

					<tr>
						<td></td>
					</tr>

					<tr>
						<td><input type="submit" name="submit" value="simpan"></td>
					</tr>
				</table>
			</td>
		</tr>
	</table>
	
</form>
</body>
</html>


<?php
	include_once 'koneksi.php';
	if (isset($_POST['submit'])) {
		$nim = $_POST['nim'];
		$nama = $_POST['nama'];
		$email =$_POST['email'];
		if (strlen($nim) != 10 && strlen($nama) > 25 ) {
			echo "Nim harus 10 karakter atau Nama harus huruf dengan maksimal 25 karakter";
		}else if(strlen($nim) == 10 && strlen($nama) < 25){
			$query = "INSERT INTO mahasiswa VALUES($nim,'$nama','$email')";
			$sql = mysqli_query($con,$query);
			if ($sql) {
				echo "Berhasil";
			}
			/*$masuk = mysqli_query($con,"INSERT INTO mahasiswa VALUES ($nim,'$nama','$email')");
			if ($masuk) {
			$_SESSION['nim'] = $nim;
			echo "Pendaftaran Berhasil";
			} */
		}
	}
?>
