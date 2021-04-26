@extends('layouts.index')

@section('content')
    <div>
        <h1>Show your informations</h1>
        <a href="{{route('abouts.index')}}">Go back to informations</a>
        <div>
            <h1>{{$presentation->title}}</h1>
            <form method="POST" action={{route('abouts.destroy', $presentation->id)}}>
                @csrf
                @method('DELETE')
                <button type="submit">DELETE</button>
            </form>
        </div>
    </div>
@endsection