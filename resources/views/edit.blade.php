@extends('layouts.app')

@section('content')

    <div class="form-group">
    <form action="/proUp" method="post" enctype="multipart/form-data">
    @csrf
    @foreach ($berita as $b)
    
    <input type="hidden" class="form-control" required="required" name="id" value="{{$b->id}}">
    <select class="form-select" name="categori_id">
        <option>select category id</option>
        @foreach ($categoris_id as $a)
        <option value="{{$a->id}}" @if($b->categoris_id  == $a->id) selected @endif>
            {{$a->nama}}
</option>
@endforeach
</select>

</div>


<div class="form-group">
<div class="form-group">
    <label for="judul">Judul</label>
<input type="text" class="form-control" required="required" name="judul" value="{{$b->judul}}"></br>
</div>
<div class="form-group">
<label for="berita">berita</label>
<input type="text" class="form-control" required="required" name="berita" value="{{$b->berita}}"></br>
</div>
<div class="form-group">
<label for="img">image</label>
<input type="text" class="form-control" required="required" name="img" value="{{$b->img}}"></br>
</div>
 @endforeach
<button type="submit" name="edit" class="btn btn-primary float-right">Ubah Data</button>
</form>

</div>

@endsection