@extends('layouts.index')

@section('content')
    <main id="">
        <section>
            <a href="{{route('services.index')}}">Back to Service</a>
            <div class="container">
                <h1>Edit Service</h1>
                <form method="POST" action={{route('services.update', $service->id)}}>
                    @csrf
                    @method('PUT')
                <label for="title">Title</label>
                <input type="text" name="title">

                <hr>

                <label for="description">Description</label>
                <input type="text" name="description">

                <hr>

                <label for="icon">Icon</label>
                <input type="text" name="Icon">

                <hr>



                <button type="submit">Submit</button>
                </form>
            </div>
        </section>
    </main>

@endsection