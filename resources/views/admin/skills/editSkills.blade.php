@extends('layouts.index')

@section('content')
    <main id="">
        <section>
            <a href="{{ route('skills.index') }}">Back to Skills</a>
            <div class="container">
                <h1>Edit Skills</h1>
                <form method="POST" action={{ route('skills.update', $skill->id) }}>
                    @csrf
                    @method('PUT')
                    <label for="title">Title</label>
                    <input type="text" name="title" id="title" value="{{ $skill->title }}" class="form-control @error('title') is-invalid @enderror">
                    @error('title')
                    <span class="invalid-feedback"><strong>{{$message}}</strong></span>
                    @enderror
                    
                    <hr>

                    <label for="value">Value</label>
                    <input type="text" name="value" id="value" value="{{ $skill->value }}" class="form-control @error('value') is-invalid @enderror">
                    @error('value')
                    <span class="invalid-feedback"><strong>{{$message}}</strong></span>
                    @enderror

                    <hr>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </section>
    </main>

@endsection
