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

                <label for="description">Description</label>
                <input type="text" name="description" id="description" value="{{old('description')}}" class="form-control @error('description') is-invalid @enderror">
                @error('description')
                    <span class="invalid-feedback"><strong>{{$message}}</strong></span>
                @enderror

                <hr>

                <label for="image">Image</label>
                <input type="text" name="image" id="image" value="{{old('image')}}" class="form-control @error('image') is-invalid @enderror">
                @error('image')
                    <span class="invalid-feedback"><strong>{{$message}}</strong></span>
                @enderror

                <hr>

                <label for="subtitle">Subtitle</label>
                <input type="text" name="subtitle" id="subtitle" value="{{old('subtitle')}}" class="form-control @error('subtitle') is-invalid @enderror">
                @error('subtitle')
                    <span class="invalid-feedback"><strong>{{$message}}</strong></span>
                @enderror

                <hr>

                <label for="subparagraph">Subparagraph</label>
                <input type="text" name="subparagraph" id="subtitle" value="{{old('subtitle')}}" class="form-control @error('subparagraph') is-invalid @enderror">
                @error('subparagraph')
                    <span class="invalid-feedback"><strong>{{$message}}</strong></span>
                @enderror

                <hr>

                <label for="birthday">Birthday</label>
                <input type="text" name="birthday" id="birthday" value="{{old('birthday')}}" class="form-control @error('birthday') is-invalid @enderror">
                @error('birthday')
                    <span class="invalid-feedback"><strong>{{$message}}</strong></span>
                @enderror

                <hr>

                <label for="website">Website</label>
                <input type="text" name="website" id="website" value="{{old('website')}}" class="form-control @error('website') is-invalid @enderror">
                @error('website')
                    <span class="invalid-feedback"><strong>{{$message}}</strong></span>
                @enderror

                <hr>

                <label for="phone">Phone</label>
                <input type="text" name="phone" id="phone" value="{{old('phone')}}" class="form-control @error('phone') is-invalid @enderror">
                @error('phone')
                    <span class="invalid-feedback"><strong>{{$message}}</strong></span>
                @enderror

                <hr>

                <label for="city">City</label>
                <input type="text" name="city" id="city" value="{{old('city')}}" class="form-control @error('city') is-invalid @enderror">
                @error('city')
                    <span class="invalid-feedback"><strong>{{$message}}</strong></span>
                @enderror

                {{-- END LEFT SIDE --}}

                {{-- BEGINNING RIGHT SIDE --}}

                <hr>

                <label for="age">Age</label>
                <input type="text" name="age" id="age" value="{{old('age')}}" class="form-control @error('age') is-invalid @enderror">
                @error('age')
                    <span class="invalid-feedback"><strong>{{$message}}</strong></span>
                @enderror

                <hr>

                <label for="degree">Degree</label>
                <input type="text" name="degree" id="degree" value="{{old('degree')}}" class="form-control @error('degree') is-invalid @enderror">
                @error('degree')
                    <span class="invalid-feedback"><strong>{{$message}}</strong></span>
                @enderror

                <hr>

                <label for="email">Email</label>
                <input type="text" name="email" id="email" value="{{old('email')}}" class="form-control @error('email') is-invalid @enderror">
                @error('email')
                    <span class="invalid-feedback"><strong>{{$message}}</strong></span>
                @enderror

                <hr>

                <label for="freelance">Freelance</label>
                <input type="text" name="freelance" id="freelance" value="{{old('freelance')}}" class="form-control @error('freelance') is-invalid @enderror">
                @error('freelance')
                    <span class="invalid-feedback"><strong>{{$message}}</strong></span>
                @enderror

                <hr>

                <button type="submit">Submit</button>

            </form>
        </div>
    </section>
@endsection

