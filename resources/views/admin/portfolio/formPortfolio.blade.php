@extends('layouts.admin')

@section('content')
    <section>
        <div class="container">
            <h1>Portfolio</h1>
            <form method="POST" action="{{route('portfolios.store')}}">
                @csrf

                <label for="title">Title</label>
                <input type="text" name="title" id="title" value="{{old('title')}}">

                <hr>

                <label for="paragraph">Paragraph</label>
                <input type="text" name="paragraph" id="paragraph" value="{{old('paragraph')}}">

                <hr>

                <label for="image">Image</label>
                <input type="text" name="image" id="image" value="{{old('image')}}">

                <button type="submit">Submit</button>
            </form>
        </div>
    </section>
@endsection