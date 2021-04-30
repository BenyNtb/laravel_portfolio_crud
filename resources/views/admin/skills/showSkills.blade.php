@extends('layouts.index')

@include('layouts.flash')
@section('content')
    <div>
        <h1>Show your informations</h1>
        <a href="{{route('skills.index')}}">Go back to informations</a>
        <div>
            <p>{{$skill->title}}</p>
            <p>{{$skill->value}}</p>
            <form method="POST" action={{route('skills.destroy', $skill->id)}}>
                @csrf
                @method('DELETE')
                <button type="submit">DELETE</button>
            </form>
        </div>
    </div>
@endsection