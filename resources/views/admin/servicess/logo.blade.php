@extends('layouts.index')

@section('content')
    <div class="container">
        <h1>Service Home Page</h1>
        <h5>Here is your facts</h5>
        <a class="btn" href={{route('admin')}}>Go back to admin page</a>
    </div>

    <div class="container">
        <div class="row">
            @foreach ($service as $service)
            <div class="card">
                <p><span>Title:</span> <br>
                    {{$service->title}}</p>
                    <br>
                <p><span>Title:</span> <br>
                {{$service->description}}</p>
                
                <p><span>Icon:</span> <br>
                    {{$service->icon}}</p>
                    <br>
                <a href="{{route('services.show', $service->id)}}" class="btn btn-primary">Details</a>
                    <a href="{{route('services.edit', $service->id)}}" class="btn btn-success">Edit</a>
                    <form method="POST" action={{route('services.destroy', $service->id)}}>
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger" type="submit">Delete</button>
                    </form>
            </div>
            @endforeach
        </div>
    </div>
@endsection