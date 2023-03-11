@extends('layouts.main')
@section('container')
    <article>
        <h2> {{ $post->title }}</h2>
        <p>By. Sandhika Galih in <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }} </a></p>
        {!! $post->body !!}
    </article>
    <a href="/blog">kembali ke blog</a>
@endsection