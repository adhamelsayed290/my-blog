@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-body">
        <h2 class="card-title">{{ $post->title }}</h2>
        <p class="text-muted">Published on: {{ $post->created_at->format('Y-m-d H:i') }}</p>
        <hr>
        <p>{!! nl2br(e($post->content)) !!}</p>

        <a href="{{ route('posts.index') }}" class="btn btn-link">Back to Home</a>
        <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-warning">Edit</a>

        <form action="{{ route('posts.destroy', $post->id) }}" method="POST" style="display:inline-block">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this post?')">
                Delete
            </button>
        </form>

    </div>
</div>
@endsection