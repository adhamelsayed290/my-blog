@extends('layouts.app')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h1>All Posts</h1>
        <a href="{{ route('posts.create') }}" class="btn btn-primary">Add New Post</a>
    </div>

    @if($posts->isEmpty())
        <div class="card"><div class="card-body">No posts yet.</div></div>
    @else
        <div class="list-group">
            @foreach($posts as $post)
                <a href="{{ route('posts.show', $post->id) }}" class="list-group-item list-group-item-action">
                    <div class="d-flex w-100 justify-content-between">
                        <h5 class="mb-1">{{ $post->title }}</h5>
                        <small>{{ $post->created_at->format('Y-m-d') }}</small>
                    </div>
                    <p class="mb-1">{{ \Illuminate\Support\Str::limit($post->content, 120) }}</p>
                </a>
            @endforeach
        </div>
    @endif
@endsection
