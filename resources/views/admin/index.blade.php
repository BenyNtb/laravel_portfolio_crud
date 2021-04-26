@extends('layouts.admin')

@section('content')
    <section>
        <h1>Admin | My Dashboard</h1>
        <a href={{route('home')}}>Go back to portfolio</a>
        <div>
            <div>
                <h3>Modify About</h3>
                <a href={{route('abouts.index')}}>Presentation</a>
            </div>
        </div>
        <div>
            <div>
                <h3>Modify Facts</h3>
                <a href="">Presentation</a>
            </div>
        </div>
        <div>
            <div>
                <h3>Modify Portfolio</h3>
                <a href="">Presentation</a>
            </div>
        </div>
        <div>
            <div>
                <h3>Modify Services</h3>
                <a href="">Presentation</a>
            </div>
        </div>
    </section>
@endsection
