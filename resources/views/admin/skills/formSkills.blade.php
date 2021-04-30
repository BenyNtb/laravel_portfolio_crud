@extends('layouts.admin')


@section('content')
    <section>
        <div class="container">
            <h1>Services</h1>
            <a href="{{route('skills.index')}}">Go back to skills</a>
            <form method="POST" action="{{route('skills.store')}}">
                @csrf

                <label for="title">Title</label>
                <input type="text" name="title" id="title" value="{{old('title')}}">

                <hr>

                <label for="paragraph">Paragraph</label>
                <input type="text" name="paragraph" id="paragraph" value="{{old('paragraph')}}">

                <hr>
            </form>
        </div>
    </section>
@endsection