<?php
	$model->panjang = $_GET['panjang'];
	$model->lebar = $_GET['lebar'];
	$model->tebal = $_GET['tebal'];
	$model->jari = $_GET['jari'];
	$model->tinggi = $_GET['tinggi'];
	
	echo "<h2>Perhitungan Persegi Panjang</h2><br>";
	echo "<hr> </hr> ";
	echo "<table>
			<tr>
				<td width='20'>Panjang</td>
				<td width='5'> = </td>
				<td>" . $model->panjang;
	echo "		</td>
			</tr>";
	
	echo "	<tr>
				<td>Lebar</td>
				<td> = </td>
				<td>" . $model->lebar;
	echo "		</td>
			</tr>";

	echo "	<tr>
				<td>Tebal</td>
				<td> = </td>
				<td>" . $model->tebal;
	echo "		</td>
			</tr>";		

	echo "	<tr>
				<td>Jari-Jari</td>
				<td> = </td>
				<td>" . $model->jari;
	echo "		</td>
			</tr>";	

	echo "	<tr>
				<td>Tinggi</td>
				<td> = </td>
				<td>" . $model->tinggi;
	echo "		</td>
			</tr>";			
			
	echo "	<tr>
				<td colspan = '3'><br></td>

			</tr>";
			
	echo "	<tr>
				<td>Luas</td>
				<td> = </td>
				<td>" . $model->luas();
	echo "		</td>
			</tr>";
			
	echo "	<tr>
				<td>Keliling</td>
				<td> = </td>
				<td>" . $model->keliling();
	echo "		</td>
			</tr>";

	echo "	<tr>
				<td>Volume</td>
				<td> = </td>
				<td>" . $model->volume();
	echo "		</td>
			</tr>";		

	echo "	<tr>
				<td>Luas lingkaran</td>
				<td> = </td>
				<td>" . $model->luaslingkaran();
	echo "		</td>
			</tr>";		
			
	echo "	<tr>
				<td>Silinder</td>
				<td> = </td>
				<td>" . $model->silinder();
	echo "		</td>
			</tr>";		

	echo "</table>";
	
	echo "</hr>";
	echo "<br><br>";
	
	
?>