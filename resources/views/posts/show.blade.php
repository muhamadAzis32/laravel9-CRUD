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
    <main class="flex-shrink-0">
        <div class="container">
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
        </div>
    </main>

</body>

</html>
