@extends('layouts.index')

@section('content')
    <main id="">
        <section>
            <a href="{{route('services.index')}}">Back to Service</a>
            <div class="container">
                <h1>Edit Service</h1>
                <form method="POST" action={{route('services.update', $service->id)}}>
                    @csrf
                    @method('PUT')
                <label for="title">Title</label>
                <input type="text" name="title" id="title" value="{{ $service->title }}" class="form-control @error('title') is-invalid @enderror">
                @error('title')
                <span class="invalid-feedback"><strong>{{$message}}</strong></span>
                @enderror

                <hr>

                <label for="description">Description</label>
                <input type="text" name="description" id="description" value="{{ $service->description }}" class="form-control @error('description') is-invalid @enderror">
                @error('description')
                <span class="invalid-feedback"><strong>{{$message}}</strong></span>
                @enderror

                <hr>

                <label for="icon">Icon</label>
                <input type="text" name="Icon" id="icon" value="{{ $service->icon }}" class="form-control @error('icon') is-invalid @enderror">
                @error('icon')
                <span class="invalid-feedback"><strong>{{$message}}</strong></span>
                @enderror

                <hr>



                <button type="submit">Submit</button>
                </form>
            </div>
        </section>
    </main>

@endsection