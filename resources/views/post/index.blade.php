@extends('layouts.main')
@section('content')
    <div class="container">
        <a href="{{ route('post.create') }}" class="btn btn-primary mb-3"> add post</a>
        @php
          $i=1
        @endphp
        @foreach($posts as $post)
            <div class="mb-2"><a href="{{ route('post.show', $post->id) }}">{{ $i }}. {{ $post->title }}</a></div>
            @php
              $i++
            @endphp
        @endforeach
    </div>
@endsection
