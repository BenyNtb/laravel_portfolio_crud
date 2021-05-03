@extends('layouts.index')

@section('content')
    <section class="container">
        <div>
            <h1>Portfolio Home Page</h1>
            <h5>Here is your cards</h5>
            <a class="btn" href={{route('admin')}}>Go back to admin page</a>
        </div>
        <div class="container">
            @foreach ($portfolios as $portfolio)
                <div class="card">
                    <p><span>Title:</span> <br>
                        {{$portfolio->title}}</p>
                        <br>
                    <p><span>Link:</span> <br>
                        <img src={{asset('img/portfolio/' . $portfolio->link)}}></p>
                        <br>
                        <p><span>Filter:</span> <br>
                            {{$portfolio->filter}}</p>
                        <a href="{{route('portfolios.show', $portfolio->id)}}" class="btn btn-primary">Details</a>
                            <a href="{{route('portfolios.edit', $portfolio->id)}}" class="btn btn-success">Edit</a>
                            <form method="POST" action={{route('portfolios.destroy', $portfolio->id)}}>
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger" type="submit">Delete</button>
                            </form>
                </div>
            @endforeach
        </div>
    </section>
@endsection