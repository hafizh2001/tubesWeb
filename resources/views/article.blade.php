@extends('layouts.master')
@section('content')

<div class="col-md-12">



<!-- Blog Post -->
@foreach($articles as $a)
<div class="card mb-1">

<img src="img/{{$a->img}}" class="card-img-top" alt="">
  <div class="card-body">
    <h2 class="card-title">{{$a->judul}}</h2>
    <p class="card-text">{{$a->berita}}</p>
    
  </div>
  
</div>
@endforeach

@endsection