<!DOCTYPE html>
<html>
<head>
	<title>Membuat Laporan PDF Dengan DOMPDF Laravel</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<style type="text/css">
		table tr td,
		table tr th{
			font-size: 9pt;
		}
	</style>
	<center>
		<h5>Laporan History Rental Mobil</h4>
		{{-- <h6><a target="_blank" href="https://www.malasngoding.com/membuat-laporan-…n-dompdf-laravel/">www.malasngoding.com</a></h5> --}}
	</center>

	<table class='table table-bordered'>
		<thead>
			<tr>
				<th>No</th>
				<th>Nama Peminjam</th>
				<th>NIK</th>
				<th>Tanggal Peminjaman</th>
				<th>Batas Peminjaman</th>
				<th>Deskripsi Mobil</th>
			</tr>
		</thead>
		<tbody>
			@foreach($data_cetak as $dc)
			<tr>
				<td>{{ $loop->iteration }}</td>
				<td>{{$dc->nama_pinjam}}</td>
				<td>{{$dc->nik_pinjam}}</td>
				<td>{{$dc->tgl_pinjam}}</td>
				<td>{{$dc->batas_pinjam}}</td>
				<td>Empty</td>
			</tr>
			@endforeach
		</tbody>
	</table>

</body>
</html>
