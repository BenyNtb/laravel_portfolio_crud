@extends('layouts.index')

@section('content')
    <main id="">
        <section>
            <a href="{{route('portfolios.index')}}">Back to Portfolio</a>
            <div class="container">
                <h1>Edit Portfolio</h1>
                <form method="POST" action={{route('portfolios.update', $portfolio->id)}}>
                    @csrf
                    @method('PUT')
                <label for="title">Title</label>
                <input type="text" name="title" id="title" value="{{ $portfolio->title }}" class="form-control @error('title') is-invalid @enderror">
                @error('title')
                <span class="invalid-feedback"><strong>{{$message}}</strong></span>
                @enderror
                <hr>

                <label for="link">Link</label>
                <input type="text" name="link" id="link" value="{{ $portfolio->link }}" class="form-control @error('link') is-invalid @enderror">
                @error('link')
                <span class="invalid-feedback"><strong>{{$message}}</strong></span>
                @enderror
                
                <hr>

                <label for="filter">filter</label>
                <input type="text" name="filter" id="filter" value="{{ $portfolio->filter }}" class="form-control @error('filter') is-invalid @enderror">
                @error('filter')
                <span class="invalid-feedback"><strong>{{$message}}</strong></span>
                @enderror
                <hr>
                <div class="form-group">
                    <label for="link">Name of the file</label>
                    <input type="file" name="link" id="link" class="form-control-file">
                </div>
                <img src="{{asset('img/portfolio/'. $portfolio->nom)}}" alt="image">

                <button type="submit">Submit</button>
                </form>
            </div>
        </section>
    </main>

@endsection