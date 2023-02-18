<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Posts</title>

    <link href="{{ asset('bootstrap-5/css/bootstrap.min.css') }}" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="{{ asset('bootstrap-5/js/bootstrap.bundle.min.js') }}"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
</head>

<body>

    <div class="container">
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
    </div>


</body>

</html>
