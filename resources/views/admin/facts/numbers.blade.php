@extends('layouts.index')

@section('content')
    <div class="container">
        <h1>Facts Home Page</h1>
        <h5>Here is your facts</h5>
        <a class="btn" href={{route('admin')}}>Go back to admin page</a>
    </div>

    <div class="container">
        <div class="row">
            @foreach ($facts as $fact)
            <div class="card">
                <p><span>Title:</span> <br>
                {{$fact->description}}</p>
                <br>
                <p><span>Count:</span> <br>
                    {{$fact->count}}</p>
                <br>
                <p><span>Icon:</span> <br>
                    {{$fact->icon}}</p>    
                <a href="{{route('facts.show', $fact->id)}}" class="btn btn-primary">Details</a>
                    <a href="{{route('facts.edit', $fact->id)}}" class="btn btn-success">Edit</a>
                    <form method="POST" action={{route('facts.destroy', $fact->id)}}>
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger" type="submit">Delete</button>
                    </form>
            </div>
            @endforeach
        </div>
    </div>
@endsection