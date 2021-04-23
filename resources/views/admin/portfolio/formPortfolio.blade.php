@extends('layouts.admin')

@section('content')
    <section>
        <div class="container">
            <h1>Portfolio</h1>
            <form method="POST" action="">
                @csrf

                <label for="title">Title</label>
                <input type="text" name="title">

                <hr>

                <label for="paragraph">Paragraph</label>
                <input type="text" name="paragraph">

                <hr>

                <label for="image">Image</label>
                <input type="text" name="image">

                <button type="submit">Submit</button>
            </form>
        </div>
    </section>
@endsection