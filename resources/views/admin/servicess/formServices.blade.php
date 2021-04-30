@extends('layouts.admin')

@section('content')
    <section>
        <div class="container">
            <h1>Services</h1>
            <form method="POST" action="{{route('services.store')}}">
                @csrf

                <label for="title">Title</label>
                <input type="text" name="title" id="title" value="{{old('title')}}" class="form-control @error('title') is-invalid @enderror">
                @error('title')
                <span class="invalid-feedback"><strong>{{$message}}</strong></span>
                @enderror

                <hr>

                <label for="description">Description</label>
                <input type="text" name="decription" id="decription" value="{{old('decription')}}" class="form-control @error('description') is-invalid @enderror">
                @error('description')
                <span class="invalid-feedback"><strong>{{$message}}</strong></span>
                @enderror

                <hr>

                <label for="icon">Icon</label>
                <input type="text" name="icon" id="icon" value="{{old('icon')}}" class="form-control @error('icon') is-invalid @enderror">
                @error('icon')
                <span class="invalid-feedback"><strong>{{$message}}</strong></span>
                @enderror
            </form>
        </div>
    </section>
@endsection