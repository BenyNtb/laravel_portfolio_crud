@extends('layouts.index')

@section('content')
    <main id="">
        <section>
            <a href="{{route('facts.index')}}">Back to Facts</a>
            <div class="container">
                <h1>Edit Facts</h1>
                <form method="POST" action="{{route('facts.update', $fact->id)}}">
                    @csrf
                    @method('PUT')
                    <label for="description">Description</label>
                    <input type="text" name="description" id="description" value="{{old('description')}}">

                    <hr>

                    <label for="count">Count</label>
                    <input type="text" name="count" id="count" value="{{old('count')}}">

                    <hr>

                    <label for="icon">Icon</label>
                    <input type="text" name="Icon" id="icon" value="{{old('icon')}}">

                    <hr>

                    <button type="submit">Submit</button>
                </form>
            </div>
        </section>
    </main>
@endsection