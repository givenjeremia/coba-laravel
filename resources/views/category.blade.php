
@extends('layouts.main')

@section('container')
    <h1>Post Category : {{ $category }}</h1>
    <article class="mb-5">
    @foreach ($posts as $item)
    <h3>
        <a href="/posts/{{ $item->slug }}">{{ $item->title }}</a>
    </h3>
    {{-- <h6>By : {{ $item['author'] }}</h6> --}}
    <p>{{ $item->excerpt }}</p>
    @endforeach
</article>
    
@endsection