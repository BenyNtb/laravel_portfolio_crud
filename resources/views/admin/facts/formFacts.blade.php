@extends('layouts.admin')

@section('content')
    <div class="container">
        <h1>Facts</h1>
        <form method="POST" action="">
            @csrf
            <label for="clients">Happy Clients</label>
            <input type="text" name="clients">

            <hr>

            <label for="projects">Projects</label>
            <input type="text" name="projects">

            <hr>

            <label for="hours">Hours Of Support</label>
            <input type="text" name="hours">

            <hr>

            <label for="workers">Hard Workers</label>
            <input type="text" name="workers">

            <hr>

            <button type="submit">Submit</button>
            
        </form>
    </div>
@endsection