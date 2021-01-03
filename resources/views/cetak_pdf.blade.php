<!DOCTYPE html>
<html>
<head>
<title>Membuat Laporan PDF Dengan DOMPDF Laravel</title>
</head>
<body>
<style type="text/css">
table tr td,
table tr th{
font-size: 9pt;
}
</style>
<center>
<h5>Laporan</h4>
</center>
<table class='table table-bordered'>
<thead>
<tr>
<th>No</th>
<th>ID user</th>
<th>Category</th>
<th>Judul</th>
<th>berita</th>
<th>img</th>
</tr>
</thead>
<tbody>
@foreach($berita as $a)
<tr>
<td>{{$a->id}}</td>
<td>{{$a->id_user}}</td>
<td>{{$a->categoris_id}}</td>
<td>{{$a->judul}}</td>
<td>{{$a->berita}}</td>
<td> <img src="img/{{$a->img}}" width="30%"></td>
</tr>
@endforeach
</tbody>
</table>
</body>
</html>
