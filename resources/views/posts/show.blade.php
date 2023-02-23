@extends('layout.app')

@section('title', "$post->title")


@section('content')

    <main class="flex-shrink-0">
        <h1 class="mt-5">{{ $post->title }}</h1>
        <small class="text-muted">
            {{ date('d M Y H:i', strtotime($post->created_at)) }}
        </small>
        <p class="lead mt-3">
            {{ $post->content }}
        </p>

        <small class="text-muted ">{{ $total_comments }} Komentar</small>

        @foreach ($comments as $comment)
            <div class="card my-3">
                <div class="card-body">
                    <p style="font-size: 12px">{{ $comment->comment }}</p>
                </div>
            </div>
        @endforeach

        <p><a href="{{ url('/posts') }}">Kembali</a> </p>
    </main>

@endsection
