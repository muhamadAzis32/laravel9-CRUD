@extends('layout.app')

@section('title', 'Register')

@section('content')

    <div class="row">
        <div class="col-md-4">

        </div>
        <div class="col-md-4">
            <div class="card p-4 mt-4">
                <h1 class="text-center">Register</h1>

                <form action="{{ url('register') }}" method="post" class="form-control">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">Nama</label>
                        <input name="name" type="text" class="form-control">
                        @if ($errors->has('name'))
                            <span class="text-danger">{{ $errors->first('name') }}</span>
                        @endif
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input name="email" type="email" class="form-control" id="exampleInputEmail1"
                            aria-describedby="emailHelp">
                        @if ($errors->has('email'))
                            <span class="text-danger">{{ $errors->first('email') }}</span>
                        @endif
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input name="password" type="password" class="form-control" id="exampleInputPassword1">
                        @if ($errors->has('password'))
                            <span class="text-danger">{{ $errors->first('password') }}</span>
                        @endif
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Konfirmasi Password</label>
                        <input name="password_confirmation" type="password" class="form-control">
                    </div>

                    <button type="submit" class="btn btn-primary">Daftar</button>

                </form>
            </div>
        </div>
    </div>

@endsection
