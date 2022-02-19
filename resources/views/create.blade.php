@extends('layout.layout')

@section('title') @parent {{$title}} @endsection

@section('content')
    <div class="container">
        <form method="post" action="{{ route('post.store') }}" class="mt-5">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="Title">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Content</label>
                <textarea class="form-control" id="content" rows="3" name="content" placeholder="Content"></textarea>
            </div>
            <div class="form-group">
                <label for="rubric_id">Rubric</label>

                <select class="form-select form-select-lg mb-3" name="rubric_id" aria-label=".form-select-lg example">
                    <option >Selected rubric</option>
                    @foreach($posts as $k => $v)
                        <option value="{{ $k }}">{{ $v }}</option>
                    @endforeach
                </select>
            </div>

            <button type="submit" class="btn btn-primary ">Submit</button>
        </form>
    </div>
@endsection
