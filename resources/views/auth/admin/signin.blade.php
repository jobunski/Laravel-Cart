@extends('layout.master')
@section('title')
    Shopping Cart
@endsection
@section('content')
    <div class="row">
        <div class="col-md-4 mx-auto">
            <h1>Sign Up</h1>
            @if(count($errors)>0)
                <div class="alert alert-danger">
                    @foreach($errors->all() as $error)
                        <p>{{ $error }}</p>
                    @endforeach
                </div>
            @endif
            <form action="{{ route('admin.signin') }}" method="post">
                <div class="form-group">
                    <label for="email">Email address</label>
                    <input type="email" name="email" class="form-control" id="email" placeholder="Bob@gmail.com">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" class="form-control" id="password" placeholder="Password">
                </div>
                @csrf
                <button type="submit" name="button" class="btn btn-primary">Signin</button>
            </form>
        </div>
    </div>
@endsection

