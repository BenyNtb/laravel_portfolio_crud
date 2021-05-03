@extends('layouts.index')

@include('template.backoffice.header')
@include('layouts.flash')
@section('content')
    <div class="container">
        <h1>Skills Home Page</h1>
        <h5>Here is your skills</h5>
        <a class="btn" href={{route('admin')}}>Go back to admin page</a>
    </div>

    <div class="container">
        <div class="row">
            @foreach ($skills as $skill)
            <div class="card">
                <p><span>Title:</span> <br>
                    {{$skill->title}}</p>
                    <br>
                    <p><span>Value:</span> <br>
                        {{$skill->value}}</p>
                        <br>    
                <a href="{{route('skills.show', $skill->id)}}" class="btn btn-primary">Details</a>
                    <a href="{{route('skills.edit', $skill->id)}}" class="btn btn-success">Edit</a>
                    <form method="POST" action={{route('skills.destroy', $skill->id)}}>
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger" type="submit">Delete</button>
                    </form>
            </div>
            @endforeach
        </div>
    </div>
@endsection