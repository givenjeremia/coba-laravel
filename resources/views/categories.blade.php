
@extends('layouts.main')

@section('container')
    <h1>Halaman Categories</h1>
    @foreach ($categories as $item)
    <ul>
        <li>
            <h3>
                <a href="/categories/{{ $item->slug }}">{{ $item->nama }}</a>
            </h3>
        </li>
    </ul>
    @endforeach
    
@endsection