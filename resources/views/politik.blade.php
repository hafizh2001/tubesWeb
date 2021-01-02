@extends('layouts.master')

@section('content')
@foreach($politik as $b)
<div class="col">
    <div class="card">
      <img src="img/{{$b->img}}" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">{{$b->judul}}</h5>
        <p class="card-text">{{Str::limit($b->berita,70,'..')}}</p>
        
      </div>
      <a href="/articles/{{$b->id}}" class="btn btn-primary">Readmore</a>
    </div>
  </div>
  @endforeach
  @endsection