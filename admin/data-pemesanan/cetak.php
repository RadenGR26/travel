<?php
session_start();
include '../../koneksi.php';
$id = $_GET['id'];

$result = mysqli_query($conn, "SELECT * FROM pemesanan WHERE id=$id");

while($data = mysqli_fetch_array($result))
{
	$id = $data['id'];
	$username = $data['username'];
	$nama_paket = $data['nama_paket'];
	$nama_wisata1 = $data['nama_wisata1'];
	$gambar_wisata1 = $data['gambar_wisata1'];
	$nama_wisata2 = $data['nama_wisata2'];
	$gambar_wisata2 = $data['gambar_wisata2'];
	$nama_hotel = $data['nama_hotel'];
	$gambar_hotel = $data['gambar_hotel'];
	$nama_restoran = $data['nama_restoran'];
	$gambar_restoran = $data['gambar_restoran'];
	$nama_kendaraan = $data['nama_kendaraan'];
	$gambar_kendaraan = $data['gambar_kendaraan'];
	$keterangan = $data['keterangan'];
	$harga = $data['harga'];
	$tiket = $data['tiket'];
	$total = $data['total'];
	$dp = $data['dp'];
	$lunas = $data['lunas'];
	$tanggal_in = $data['tanggal_in'];
	$tanggal_out = $data['tanggal_out'];
	$status = $data['status'];
	$tanggal_dibuat = $data['tanggal_dibuat'];
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>CETAK KWITANSI PEMBAYARAN</title>
</head>
<body>
	<center>
		<p style="text-align: center;">
			<img src="../../images/logo.png" width="500" height="100"><br>
			Terima Kasih Telah Berlibur Bersama Kami
		</p>

	</center>


	<table border="1" style="text-align: center;">
		<tr>
			<th>Username</th>
			<th>Nama Paket</th>
			<th>Nama Wisata 1</th>
			<th>Nama Wisata 2</th>
			<th>Nama Hotel</th>
			<th>Nama Restoran</th>
			<th>Nama Kendaraan</th>
			<th>Keterangan</th>
			<th>Harga</th>
			<th>Jumlah Tiket</th>
			<th>Total Harga</th>
			<th>Mulai Tanggal</th>
			<th>Selesai Tanggal</th>
			<th>Status</th>
			<th>Tanggal Pemesanan</th>
		</tr>
		<tr>
			<td><?php echo $username;?></td>
			<td><?php echo $nama_paket;?></td>
			<td><?php echo $nama_wisata1;?></td>
			<td><?php echo $nama_wisata2;?></td>
			<td><?php echo $nama_hotel;?></td>
			<td><?php echo $nama_restoran;?></td>
			<td><?php echo $nama_kendaraan;?></td>
			<td><?php echo $keterangan;?></td>
			<td><?php echo $harga;?></td>
			<td><?php echo $tiket;?></td>
			<td><?php echo $total;?></td>
			<td><?php echo $tanggal_in;?></td>
			<td><?php echo $tanggal_out;?></td>
			<td><?php echo $status;?></td>
			<td><?php echo $tanggal_dibuat;?></td>
		</tr>

	</table>
	<p style="text-align: right;" type="date">
		Karawang, <?php echo $tanggal_dibuat;?>
	</p>

	<p style="text-align: right;">
		<img src="../../images/ttd.png" width="100" height="50"><br>
		Kasir Travel Usik Rent Car
	</p>
	<script>
		window.print();
	</script>

</body>
</html>