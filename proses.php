<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>

<body>
	<?php
	$saldoawal = $_POST['saldoawal'];
	$lamasimpan = $_POST['lamasimpan'];
	$jenis = $_POST['jenis'];
	$bunga = $_POST['bunga'];
	?>

	<center>
		<font size="20">
			Kalkulator Bunga
		</font>
		<table border="1" cellspacing="8" cellpadding="8"="center">
			<hr>
			<tr>
				<th>Bulan</th>
				<th>Saldo Awal</th>
				<th>Bunga</th>
				<th>Saldo Akhir</th>
			</tr>

			</thead>
			</tbody>

			<?php
		$saldo = $saldoawal;
		for ($i=0; $i < ($lamasimpan * 12); $i++) {
			$saldo_awal = $saldo;

			if ($jenis == "present") {
				$besar_bunga = ($saldoawal * $bunga) / 12;
			} elseif ($jenis == "future") {
				$besar_bunga = $saldo_awal * ($bunga / 12);
			}

			$saldo_akhir = $saldo_awal + $besar_bunga;

			echo "<tr>";
			echo "<td>". ($i + 1) ."</td>";
			echo "<td>". number_format($saldo, 2) ."</td>";
			echo "<td>". number_format($besar_bunga, 2) ."</td>";
			echo "<td>". number_format($saldo_akhir, 2) ."</td>";
			echo "</tr>";

			$saldo = $saldo_akhir;
		}
	?>

			</thead>
			</tbody>
		</table>

		<hr>
		<footer>
			<p>Revan's Kalkulator &#169; 2022, Revan Rionaldo</p>
		</footer>
</body>

</html>