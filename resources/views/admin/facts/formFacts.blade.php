@extends('layouts.admin')

@section('content')
    <div class="container">
        <h1>Facts</h1>
        <form method="POST" action="{{route('skills.store')}}">
            @csrf
            <label for="clients">Happy Clients</label>
            <input type="text" name="clients" id="clients"  value="{{old('clients')}}" class="form-control @error('clients') is-invalid @enderror">
            @error('clients')
                <span class="invalid-feedback"><strong>{{$message}}</strong></span>
            @enderror

            <hr>

            <label for="projects">Projects</label>
            <input type="text" name="projects" id="projects" value="{{old('projects')}}" class="form-control @error('projects') is-invalid @enderror">
            @error('projects')
                <span class="invalid-feedback"><strong>{{$message}}</strong></span>
            @enderror

            <hr>

            <label for="hours">Hours Of Support</label>
            <input type="text" name="hours" id="hours" value="{{old('hours')}}" class="form-control @error('hours') is-invalid @enderror">
            @error('hours')
                <span class="invalid-feedback"><strong>{{$message}}</strong></span>
            @enderror

            <hr>

            <label for="workers">Hard Workers</label>
            <input type="text" name="workers" id="workers" value="{{old('workers')}}" class="form-control @error('workers') is-invalid @enderror">
            @error('workers')
                <span class="invalid-feedback"><strong>{{$message}}</strong></span>
            @enderror

            <hr>

            <button type="submit">Submit</button>
            
        </form>
    </div>
@endsection