@extends('layouts.master')

@section('content')
<div class="col">
<a class="btn btn-primary" href="tambah/add">Tambah</a>
<a href="/cetak_pdf" class="btn btn-primary"
target="_blank">CETAK PDF</a>
<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Id_user</th>
      <th scope="col">Id categori</th>
      <th scope="col">Judul</th>
      <th scope="col">Berita</th>
      <th scope="col">IMG</th>
      <th scope="col">aksi</th>
    </tr>
  </thead>
  <tbody>
  @foreach($berita as $b)
    <tr>
      <th scope="row">{{$b->id}}</th>
      <td>{{$b->id_user}}</td>
      <td>{{$b->categoris_id}}</td>
      <td>{{$b->judul}}</td>
      <td>{{Str::limit($b->berita,100,'..')}}</td>
      <td>{{$b->img}}</td>
      <td><a class="btn btn-primary" href="edit/{{$b->id}}">edit</a>
<a t class="btn btn-secondary" href="delete/{{$b->id}}">delete</a></td>
    </tr>
    @endforeach
  
  </tbody>
</table>

  </div>

  @endsection