@extends('layout.app')

@section('title', 'Buat Postingan')

@section('content')
    <div class="card p-4 mt-5">
        <h1>Buat Postingan Baru</h1>
        <form action="{{ url('posts') }}" method="post">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Judul</label>
                <input name="title" type="text" class="form-control" id="title" placeholder="Judul">
            </div>
            <div class="mb-3">
                <label for="konten" class="form-label">Konten</label>
                <textarea name="content" class="form-control" id="konten" rows="3"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
@endsection
