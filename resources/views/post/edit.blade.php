@extends('layouts.main')
@section('content')
    <div class="container">
        <form action="{{ route('post.update', $post->id) }}" method="post">
            @csrf
            @method('patch')
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" name="title" class="form-control" id="title" placeholder="Title" value="{{ $post->title }}">
            </div>
            <div class="mb-3">
                <label for="content" class="form-label">content</label>
                <textarea class="form-control" name="content" id="content" placeholder="content" rows="3">{{ $post->content }}</textarea>
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">image</label>
                <input type="text" class="form-control" name="image" id="image" placeholder="url image" value="{{ $post->image }}">
            </div>
            <button type="submit" class="btn btn-primary">update</button>
        </form>
    </div>
@endsection
