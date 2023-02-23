@extends('layout.app')

@section('title', 'Edit Postingan')

@section('content')
    <div class="card p-4 mt-5">
        <h1>Update Postingan</h1>
        <form action="{{ url("/posts/{$post->id}") }}" method="post">
            @method('PATCH')
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Judul</label>
                <input name="title" type="text" class="form-control" id="title" placeholder="Judul"
                    value="{{ $post->title }}">
            </div>
            <div class="mb-3">
                <label for="konten" class="form-label">Konten</label>
                <textarea name="content" class="form-control" id="konten" rows="3">{{ $post->content }}
                    </textarea>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>

        <form action="{{ url("/posts/$post->id") }}" method="post">
            @method('DELETE')
            <button type="submit" class="btn btn-danger">
                Hapus
            </button>
            @csrf
        </form>
    </div>

@endsection
