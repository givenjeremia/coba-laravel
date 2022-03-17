@extends('layouts.main')
@section('container')
<h1>Halaman About</h1>   
<h3> {!! $nama !!} </h3>
<p>{!! $email !!}</p>
<img src="img/{!! $img !!}" alt="" width="25%" class=" img-thumbnail rounded-circle">
@endsection
    
