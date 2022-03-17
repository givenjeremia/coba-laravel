@extends('layouts.main')

@section('container')
<article>
    <h2>{{ $post->title }}</h2>
    <h5>By <a href="/authors/{{ $post->user->username }}"  class=" text-decoration-none">{{ $post->user->name }}</a> In <a href="/categories/{{ $post->category->slug }}">{{ $post->category->nama }}</a></h5>
    {{-- <h5>{{ $post['author'] }}</h5> --}}
    {{-- {{ $post->body }} --}}
    {!! $post->body !!}
    
</article>
<a href="/blog">Back To Blog</a>
@endsection

{{-- Post::create([
    'title' => 'Judul Ke Ketiga',
    'category_id' => 3,
    'slug' => 'judul-ketiga',
    'excerpt' => 'Ketiga Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam, recusandae exercitationem.',
    'body'=> '<p>Ketiga Lorem ipsum dolor sit amet consectetur adipisicing elit.</p><p>Ipsam, recusandae exercitationem.</p><p>Quas alias nobis, molestiae vero natus veniam cupiditate blanditiis ullam quam sint ad excepturi minus ex iure pariatur.</p><p>Commodi cumque ad magni fuga perspiciatis, obcaecati, id earum vitae recusandae asperiores distinctio eligendi dolorum. Quo amet obcaecati placeat maxime officiis.</p><p>Doloremque deserunt voluptates officia repudiandae corrupti ea eius neque, natus iste a, vel tenetur numquam? Accusamus incidunt numquam delectus nesciunt nihil quisquam voluptas dolorum consequuntur rerum, eos, et cum quam!</p>',
]) --}}

{{-- Post::find(3)->update(['title'=>'Judul Ke tiga Berubah']) --}}
{{-- Post::where('title','Judul Ke tiga Berubah')->update([]) --}}

