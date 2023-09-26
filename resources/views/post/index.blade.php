@extends('layouts.main')
@section('content')
    <div class="container">
        <a href="{{ route('post.create') }}" class="btn btn-primary mb-3"> add post</a>
        @foreach($posts as $post)
            <div class="mb-2"><a href="{{ route('post.show', $post->id) }}">{{ $post->id }}. {{ $post->title }}</a></div>
        @endforeach
    </div>
@endsection
