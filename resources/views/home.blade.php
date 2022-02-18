@extends('layout.layout')

@section('title') @parent {{ $title }} @endsection


@section('content')
    <div class="container">
        <h1>Привет</h1>
    </div>
@endsection

@section('text')
    <div class="main">
        @for($i=0; $i<5;$i++)
            <h1>Hellow world</h1>
        @endfor
    </div>
@endsection


