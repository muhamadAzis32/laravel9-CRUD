@extends('layout.app')

@section('title', 'Login')

@section('content')

    <div class="row">
        <div class="col-md-4">

        </div>
        <div class="col-md-4">
            <div class="card p-4 mt-4">
                <h1 class="text-center">Login</h1>

                @if (session()->has('error_message'))
                    <div class="alert alert-danger">
                        {{ session()->get('error_message') }}
                    </div>
                @endif

                <form action="{{ url('login') }}" method="post" class="form-control">
                    @csrf
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input name="email" type="email" class="form-control" id="exampleInputEmail1"
                            aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input name="password" type="password" class="form-control" id="exampleInputPassword1">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>

                </form>
            </div>
        </div>
    </div>

@endsection
