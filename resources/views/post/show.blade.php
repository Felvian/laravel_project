@extends('layouts.main')
@section('content')
    <div class="container">
            <div class="mb-2">{{ $post->id }}. {{ $post->title }}</div>
            <div class="mb-5">{{ $post->content }}</div>
        <div class="mb-3">
            <a href="{{route('post.edit', $post->id)}}" class="btn btn-primary">edit</a>
        </div>
        <div class="mb-3">
            <form action="{{route('post.delete', $post->id)}}" method="post">
                @csrf
                @method('delete')
                <input type="submit" value="delete" class="btn btn-danger">
            </form>
        </div>
        <div>
            <a href="{{route('post.index')}}" class="btn btn-primary">back</a>
        </div>
    </div>
@endsection
