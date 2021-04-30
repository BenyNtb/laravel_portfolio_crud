@extends('layouts.admin')

@section('content')
    <section>
        <div class="container">
            <h1>About</h1>
            <a href="{{route('abouts.index')}}">Go back to about</a>
            <form method="POST" action="{{('abouts.store')}}">
                @csrf

                {{-- BEGINNING LEFT SIDE --}}

                <label for="title">Title</label>
                <input type="text" name="title" id="title" value="{{old('title')}}" class="form-control @error('title') is-invalid @enderror" value="{{old('title')}}" placeholder="Title">
                @error('title')
                    <span class="invalid-feedback"><strong>{{$message}}</strong></span>
                @enderror

                <hr>

                <label for="paragraph">Paragraph</label>
                <input type="text" name="paragraph" id="paragraph" value="{{old('paragraph')}}">

                <hr>

                <label for="image">Image</label>
                <input type="text" name="image" id="image" value="{{old('image')}}">

                <hr>

                <label for="subtitle">Subtitle</label>
                <input type="text" name="subtitle" id="subtitle" value="{{old('subtitle')}}">

                <hr>

                <label for="subparagraph">Subparagraph</label>
                <input type="text" name="subparagraph" id="subtitle" value="{{old('subtitle')}}">

                <hr>

                <label for="birthday">Birthday</label>
                <input type="text" name="birthday" id="birthday" value="{{old('birthday')}}">

                <hr>

                <label for="website">Website</label>
                <input type="text" name="website" id="website" value="{{old('website')}}">

                <hr>

                <label for="phone">Phone</label>
                <input type="text" name="phone" id="phone" value="{{old('phone')}}">

                <hr>

                <label for="city">City</label>
                <input type="text" name="city" id="city" value="{{old('city')}}">

                {{-- END LEFT SIDE --}}

                {{-- BEGINNING RIGHT SIDE --}}

                <hr>

                <label for="age">Age</label>
                <input type="text" name="age" id="age" value="{{old('age')}}">

                <hr>

                <label for="degree">Degree</label>
                <input type="text" name="degree" id="degree" value="{{old('degree')}}">

                <hr>

                <label for="email">Email</label>
                <input type="text" name="email" id="email" value="{{old('email')}}">

                <hr>

                <label for="freelance">Freelance</label>
                <input type="text" name="freelance" id="freelance" value="{{old('freelance')}}">

                <hr>

                <button type="submit">Submit</button>

            </form>
        </div>
    </section>
@endsection

