@extends('layouts.index')

@section('content')
    <main id="">
        <section>
            <a href="{{route('facts.index')}}">Back to Facts</a>
            <div class="container">
                <h1>Edit Facts</h1>
                <form method="POST" action="{{route('facts.update', $fact->id)}}">
                    @csrf
                    @method('PUT')
                    <label for="description">Description</label>
                    <input type="text" name="description" id="description" value="{{$fact->description}}" class="form-control @error('description') is-invalid @enderror">
                    @error('description')
                    <span class="invalid-feedback"><strong>{{$message}}</strong></span>
                    @enderror

                    <hr>

                    <label for="count">Count</label>
                    <input type="text" name="count" id="count" value="{{$fact->count}}" class="form-control @error('count') is-invalid @enderror">
                    @error('count')
                    <span class="invalid-feedback"><strong>{{$message}}</strong></span>
                    @enderror

                    <hr>

                    <label for="icon">Icon</label>
                    <input type="text" name="icon" id="icon" value="{{$fact->icon}}" class="form-control @error('icon') is-invalid @enderror">
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