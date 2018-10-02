<form action=" " method="POST">
 <center>
 	<h1>KOMENTAR</h1>
 	<table>
 		<tr>
 			<td>Inputkan Kata</td>
 			<td>:</td>
 			<td><input type="textarea" name="kata" ></td>
 			<td> <input type="submit" name="submit" value="Cari"></td>
 			
 		</tr>
 	</table>
</center>
</form>

<?php
	if (isset($_POST['submit'])) {
		$kata =$_POST['kata'];
		$jmlh = str_word_count($kata);

		if (str_word_count($_POST['kata']) < 5) {
			echo "komentar harus lebih dari 5 kata";
		}
		else{
			echo "Jumlah kata : $jmlh . </br>";
		}
	}
?>
