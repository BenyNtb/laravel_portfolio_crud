@extends('layouts.index')

@section('content')
    <div class="container">
        <h1>Show Service</h1>
        <a href="{{route('services.index')}}">Go back to informations</a>
        <div class="container">
            <p>{{$service->title}}</p>
            <p>{{$service->description}}</p>
            <p>{{$service->icon}}</p>
            <form method="POST" action={{route('services.destroy', $service->id)}}>
                @csrf
                @method('DELETE')
                <button type="submit">DELETE</button>
            </form>
        </div>
    </div>