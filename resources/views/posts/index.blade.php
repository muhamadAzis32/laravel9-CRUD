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
        <h1>Blog Codepolitan</h1>
        @foreach ($posts as $post)
            <div class="card mb-3">
                {{-- <img src="..." class="card-img-top" alt="..."> --}}
                <div class="card-body">
                    <h5 class="card-title">{{ $post[0] }} </h5>
                    <p class="card-text">{{ $post[1] }}</p>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    <a href="" class="btn btn-primary">Selengkapnya</a>
                </div>
            </div>
        @endforeach
    </div>


</body>

</html>
