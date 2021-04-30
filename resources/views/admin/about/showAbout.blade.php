@extends('layouts.index')

@section('content')
    <div>
        <h1>Show your informations</h1>
        <a href="{{route('abouts.index')}}">Go back to informations</a>
        <div class="card">
            <p>{{$presentation->title}}</p>
            <p>{{$presentation->description}}</p>
            <p>{{$presentation->image}}</p>
            <p>{{$presentation->subtitle}}</p>
            <p>{{$presentation->subparagraph}}</p>
            <p>{{$presentation->birthday}}</p>
            <p>{{$presentation->website}}</p>
            <p>{{$presentation->phone}}</p>
            <p>{{$presentation->city}}</p>
            <p>{{$presentation->age}}</p>
            <p>{{$presentation->degree}}</p>
            <p>{{$presentation->email}}</p>
            <p>{{$presentation->freelance}}</p>
            <form method="POST" action={{route('abouts.destroy', $presentation->id)}}>
                @csrf
                @method('DELETE')
                <button type="submit">DELETE</button>
            </form>
        </div>
    </div>
@endsection