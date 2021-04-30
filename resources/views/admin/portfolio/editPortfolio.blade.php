@extends('layouts.index')

@section('content')
    <main id="">
        <section>
            <a href="{{route('portfolios.index')}}">Back to Portfolio</a>
            <div class="container">
                <h1>Edit Portfolio</h1>
                <form method="POST" action={{route('portfolios.update', $portfolio->id)}}>
                    @csrf
                    @method('PUT')
                <label for="title">Title</label>
                <input type="text" name="title" id="title" value="{{ $portfolio->title }}">

                <hr>

                <label for="link">Link</label>
                <input type="text" name="link" id="link" value="{{ $portfolio->link }}">

                <hr>

                <label for="filter">filter</label>
                <input type="text" name="filter" id="filter" value="{{ $portfolio->filter }}">

                <hr>



                <button type="submit">Submit</button>
                </form>
            </div>
        </section>
    </main>

@endsection