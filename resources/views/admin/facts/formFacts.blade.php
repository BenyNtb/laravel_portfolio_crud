@extends('layouts.admin')

@section('content')
    <div class="container">
        <h1>Facts</h1>
        <form method="POST" action="{{route('skills.store')}}">
            @csrf
            <label for="clients">Happy Clients</label>
            <input type="text" name="clients" id="clients"  value="{{old('clients')}}">

            <hr>

            <label for="projects">Projects</label>
            <input type="text" name="projects" id="projects" value="{{old('projects')}}">

            <hr>

            <label for="hours">Hours Of Support</label>
            <input type="text" name="hours" id="hours" value="{{old('hours')}}">

            <hr>

            <label for="workers">Hard Workers</label>
            <input type="text" name="workers" id="workers" value="{{old('workers')}}">

            <hr>

            <button type="submit">Submit</button>
            
        </form>
    </div>
@endsection