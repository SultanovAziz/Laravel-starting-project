@extends('layout.layout')

@section('title')   @parent Registry user  @endsection


@section('content')
    <div class="container">
        <form action="{{ route('register.store') }}" method="post">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Name: </label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" placeholder="Name" value="{{ old('name') }}">
                @error('name')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email: </label>
                <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="email@gmail.com" value="{{ old('email') }}"/>
                @error('email')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password: </label>
                <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password"/>
                @error('password')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="password_confirmation" class="form-label">Confirm password: </label>
                <input type="password" class="form-control @error('password_confirmation') is-invalid @enderror" id="password_confirmation" name="password_confirmation"/>
                @error('password_confirmation')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>



            <button type="submit" class="btn btn-primary ">Send</button>
        </form>
    </div>

@endsection
