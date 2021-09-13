<!DOCTYPE html>
<html lang="en">

<head>
	<title>Kalkulator Sederhana</title>
	<link rel="stylesheet" href="Tugas4_[NUR SITI AISYAH].css">
</head>
<body>
	<form action=""method="POST">
	<div class="login">
		<h2> Kalkulator Sederhana</h2>
		<div class="input-group">
			<input type="text " name="bil1" id="bil1" required="">
			<span>Bilangan Pertama </span>
		</div>
		<div class="input-group">
			<input type="text"  name="bil2" id="bil2" required="">
			<span>Bilangan Kedua </span>
		</div>
		<div class="input-group">
			<input type="submit" name="submit" id="submit" value="Hitung">
		</div>


	<?php
	if (isset($_POST['submit'])) {
		$bil1 = $_POST['bil1'];
		$bil2 = $_POST['bil2'];


		function penjumlahan($a, $b){
			$hasil = $a + $b;
			return $hasil;
		}

		echo "Hasil Penjumlahan = " . penjumlahan($bil1, $bil2);
		echo "<br>";
	
		function pengurangan($a, $b){
			$hasil = $a - $b;
			return $hasil;
		}

		echo "Hasil Pengurangan = " . pengurangan($bil1, $bil2);
		echo "<br>";

		function perkalian($a, $b){
			$hasil = $a * $b;
			return $hasil;
		}

		echo "Hasil Perkalian = " . perkalian($bil1, $bil2);
		echo "<br>";

		function pembagian($a, $b){
			$hasil = $a / $b;
			return $hasil;
		}

		echo "Hasil Pembagian= " . pembagian($bil1, $bil2);
		echo "<br>";	
	}
	?>
	</div>
</form>
</body>


</html>