@extends('layouts.index')

@section('content')
    <div>
        <h1>Show your informations</h1>
        <a href="{{route('facts.index')}}">Go back to your facts</a>
        <div>
            <p>{{$fact->description}}</p>
            <p>{{$fact->count}}</p>
            <p>{{$fact->icon}}</p>
        </div>
    </div>
@endsection