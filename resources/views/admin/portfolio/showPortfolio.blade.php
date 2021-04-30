@extends('layouts.index')

@section('content')
    <div>
        <h1>Show your informations</h1>
        <a href="{{route('portfolios.index')}}">Go back to informations</a>
        <div>
            <p>{{$portfolio->title}}</p>
            {{-- <p>{{$portfolio->link}}</p> --}}
            <p>{{$portfolio->filter}}</p>
            <img src="{{asset($portfolio->link)}}" alt="img">
            <form method="POST" action={{route('portfolios.destroy', $portfolio->id)}}>
                @csrf
                @method('DELETE')
                <button type="submit">DELETE</button>
            </form>
        </div>
    </div>
@endsection