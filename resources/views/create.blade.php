
@extends('layouts.master')

@section('content')
<div class="col-md-12">
<div class="card mb-1">
<form action="/tambah/create" method="post"enctype="multipart/form-data">
    
    @csrf

    <div class="form-group">
    <select class="form-select" name="categoris_id">
        <option>select category id</option>
        @foreach ($category as $a)
        <option value="{{$a->id}}">
            {{$a->nama}}
</option>
@endforeach
</select>

</div>
<div class="form-group">

        <label for="judul">Judul</label>
        <input type="varchar" class="form-control"
        required="required" name="judul"></br>
    </div>
    <div class="form-group">
        <label for="berita">berita</label>
        <input type="text" class="form-control"
        required="required" name="berita"></br>
    </div>
    <div class="form-group">
    <label for="img">Image</label>
    <input type="file" class="form-control" name="img"></br>
    </div>

    <button type="submit" name="add" class="btn btnprimary float-right">Tambah Data</button>
    </form>
</div>
</div>
@endsection