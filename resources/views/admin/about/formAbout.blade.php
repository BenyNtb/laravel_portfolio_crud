@extends('layouts.admin')

@section('content')
    <section>
        <div class="container">
            <h1>About</h1>
            <form method="POST" action="">
                @csrf

                {{-- BEGINNING LEFT SIDE --}}

                <label for="title">Title</label>
                <input type="text" name="title">

                <hr>

                <label for="paragraph">Paragraph</label>
                <input type="text" name="paragraph">

                <hr>

                <label for="image">Image</label>
                <input type="text" name="image">

                <hr>

                <label for="subtitle">Subtitle</label>
                <input type="text" name="subtitle">

                <hr>

                <label for="subparagraph">Subparagraph</label>
                <input type="text" name="subparagraph">

                <hr>

                <label for="birthday">Birthday</label>
                <input type="text" name="birthday">

                <hr>

                <label for="website">Website</label>
                <input type="text" name="website">

                <hr>

                <label for="phone">Phone</label>
                <input type="text" name="phone">

                <hr>

                <label for="city">City</label>
                <input type="text" name="city">

                {{-- END LEFT SIDE --}}

                {{-- BEGINNING RIGHT SIDE --}}

                <hr>

                <label for="age">Age</label>
                <input type="text" name="age">

                <hr>

                <label for="degree">Degree</label>
                <input type="text" name="Degree">

                <hr>

                <label for="email">Email</label>
                <input type="text" name="email">

                <hr>

                <label for="freelance">Freelance</label>
                <input type="text" name="freelance">

                <hr>

                <button type="submit">Submit</button>

            </form>
        </div>
    </section>
@endsection
