@extends('layout.layout')

@section('title')   Send Page   @endsection


@section('content')
    <div class="container">
        <form action="{{ route('send') }}" method="post">
            @csrf
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Name: </label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" placeholder="Name" value="{{ old('name') }}">
                @error('name')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Email: </label>
                <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="email@gmail.com" value="{{ old('email') }}"/>
                @error('email')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Message: </label>
                <textarea class="form-control @error('message') is-invalid @enderror" id="message" rows="5" name="message" placeholder="Message">{{ old('message') }}</textarea>
                @error('message')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary ">Send</button>
        </form>
    </div>

@endsection
