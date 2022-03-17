
@extends('layouts.main')

@section('container')
    <h1>{{ $title }}</h1>

    {{-- CEK APAKAH ADA POSTINGAN --}}
    @if ($posts->count())
    <div class="card mb-3">
        <img src="..." class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title"></h5>
          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
          <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
        </div>
    </div>
    @else
        <p class="text-center fs-4">No Post Found</p>
    @endif

    
    @foreach ($posts as $item)
    <article class=" mb-5 border-bottom pb-4">
   
    <h2 >
        <a class=" text-decoration-none" href="/posts/{{ $item->slug }}">{{ $item->title }}</a>
    </h2>
    <h5>By <a href="/authors/{{ $item->user->username }}" class=" text-decoration-none">{{ $item->user->name }}</a> In <a  class="text-decoration-none" href="/categories/{{ $item->category->slug }}">{{ $item->category->nama }}</a></h5>
    
    <p>{{ $item->excerpt }}</p>
    
    <a class=" text-decoration-none" href="/posts/{{ $item->slug }}">Read More..</a>

</article>
@endforeach
@endsection