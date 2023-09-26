@extends('layouts.main')
@section('content')
    <div class="container">
        <form action="{{ route('post.store') }}" method="post">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" name="title" class="form-control" id="title" placeholder="Title">
            </div>
            <div class="mb-3">
                <label for="content" class="form-label">content</label>
                <textarea class="form-control" name="content" id="content" placeholder="content" rows="3"></textarea>
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">image</label>
                <input type="text" class="form-control" name="image" id="image" placeholder="url image">
            </div>
            <button type="submit" class="btn btn-primary">create</button>
        </form>
    </div>
@endsection
