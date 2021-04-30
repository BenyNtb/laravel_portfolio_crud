@extends('layouts.admin')

@section('content')
    <section>
        <div class="container">
            <h1>Portfolio</h1>
            <form method="POST" action="{{route('portfolios.store')}}">
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

                <label for="image">Image</label>
                <input type="text" name="image" id="image" value="{{old('image')}}" class="form-control @error('image') is-invalid @enderror">
                @error('image')
                <span class="invalid-feedback"><strong>{{$message}}</strong></span>
                @enderror

                <button type="submit">Submit</button>
            </form>
        </div>
    </section>
@endsection