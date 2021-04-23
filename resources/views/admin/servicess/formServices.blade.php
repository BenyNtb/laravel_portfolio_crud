@extends('layouts.admin')

@section('content')
    <section>
        <div class="container">
            <h1>Services</h1>
            <form action="">
                @csrf

                <label for="title">Title</label>
                <input type="text" name="title">

                <hr>

                <label for="paragraph">Paragraph</label>
                <input type="text" name="paragraph">

                <hr>
            </form>
        </div>
    </section>
@endsection