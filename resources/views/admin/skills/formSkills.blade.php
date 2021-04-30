@extends('layouts.admin')


@section('content')
    <section>
        <div class="container">
            <h1>Services</h1>
            <a href="{{route('skills.index')}}">Go back to skills</a>
            <form method="POST" action="{{route('skills.store')}}">
                @csrf

                <label for="title">Title</label>
                <input type="text" name="title" id="title" value="{{old('title')}}" class="form-control @error('title') is-invalid @enderror">
                @error('title')
                <span class="invalid-feedback"><strong>{{$message}}</strong></span>
                @enderror

                <hr>

                <label for="paragraph">Paragraph</label>
                <input type="text" name="paragraph" id="paragraph" value="{{old('paragraph')}}" class="form-control @error('paragraph') is-invalid @enderror">
                @error('paragraph')
                <span class="invalid-feedback"><strong>{{$message}}</strong></span>
                @enderror

                <hr>
            </form>
        </div>
    </section>
@endsection