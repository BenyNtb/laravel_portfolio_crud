@extends('layouts.index')

@section('content')
    <main id="">
        <section>
            <a href="{{route('abouts.index')}}">Back to About</a>
            <div class="container">
                <h1>Edit About</h1>
                <form method="POST" action={{route('abouts.update', $presentation->id)}}>
                    @csrf
                    @method('PUT')
                <label for="title">Title</label>
                <input type="text" name="title" value="{{$presentation->title}}" id="title" class="form-control @error('title') is-invalid @enderror">
                @error('title')
                    <span class="invalid-feedback"><strong>{{$message}}</strong></span>
                @enderror

                <hr>

                <label for="description">Description</label>
                <input type="text" name="description" value="{{$presentation->description}}" id="description" class="form-control @error('description') is-invalid @enderror">
                @error('description')
                    <span class="invalid-feedback"><strong>{{$message}}</strong></span>
                @enderror

                <hr>

                <label for="image">Image</label>
                <input type="text" name="image" value="{{$presentation->image}}" id="image" class="form-control @error('image') is-invalid @enderror">
                @error('image')
                    <span class="invalid-feedback"><strong>{{$message}}</strong></span>
                @enderror
                <div class="form-group">
                    <label for="link">Name of the file</label>
                    <input type="file" name="link" id="link" class="form-control-file">
                </div>
                <img src="{{asset('img/' .$presentation->image)}}" alt="image">
                <hr>

                <label for="subtitle">Subtitle</label>
                <input type="text" name="subtitle" value="{{$presentation->subtitle}}" id="subtitle" class="form-control @error('subtitle') is-invalid @enderror">
                @error('subtitle')
                    <span class="invalid-feedback"><strong>{{$message}}</strong></span>
                @enderror

                <hr>

                <label for="subparagraph">Subparagraph</label>
                <input type="text" name="subparagraph" value="{{$presentation->subparagraph}}" id="subparagraph" class="form-control @error('subparagraph') is-invalid @enderror">
                @error('subparagraph')
                    <span class="invalid-feedback"><strong>{{$message}}</strong></span>
                @enderror

                <hr>

                <label for="birthday">Birthday</label>
                <input type="text" name="birthday" value="{{$presentation->birthday}}" id="birthday" class="form-control @error('birthday') is-invalid @enderror">
                @error('birthday')
                    <span class="invalid-feedback"><strong>{{$message}}</strong></span>
                @enderror

                <hr>

                <label for="website">Website</label>
                <input type="text" name="website" value="{{$presentation->website}}" id="website" class="form-control @error('website') is-invalid @enderror">
                @error('website')
                    <span class="invalid-feedback"><strong>{{$message}}</strong></span>
                @enderror

                <hr>

                <label for="phone">Phone</label>
                <input type="text" name="phone" value="{{$presentation->phone}}" id="phone" class="form-control @error('phone') is-invalid @enderror">
                @error('phone')
                    <span class="invalid-feedback"><strong>{{$message}}</strong></span>
                @enderror

                <hr>

                <label for="city">City</label>
                <input type="text" name="city" value="{{$presentation->city}}" id="city" class="form-control @error('city') is-invalid @enderror">
                @error('city')
                    <span class="invalid-feedback"><strong>{{$message}}</strong></span>
                @enderror

                {{-- END LEFT SIDE --}}

                {{-- BEGINNING RIGHT SIDE --}}

                <hr>

                <label for="age">Age</label>
                <input type="text" name="age" value="{{$presentation->age}}" id="age" class="form-control @error('age') is-invalid @enderror">
                @error('age')
                    <span class="invalid-feedback"><strong>{{$message}}</strong></span>
                @enderror

                <hr>

                <label for="degree">Degree</label>
                <input type="text" name="degree" value="{{$presentation->degree}}" id="degree" class="form-control @error('degree') is-invalid @enderror">
                @error('degree')
                    <span class="invalid-feedback"><strong>{{$message}}</strong></span>
                @enderror

                <hr>

                <label for="email">Email</label>
                <input type="text" name="email" value="{{$presentation->email}}" id="email" class="form-control @error('email') is-invalid @enderror">
                @error('email')
                    <span class="invalid-feedback"><strong>{{$message}}</strong></span>
                @enderror

                <hr>

                <label for="freelance">Freelance</label>
                <input type="text" name="freelance" value="{{$presentation->freelance}}" id="freelance" class="form-control @error('freelance') is-invalid @enderror">
                @error('freelance')
                    <span class="invalid-feedback"><strong>{{$message}}</strong></span>
                @enderror

                <hr>

                <button type="submit">Submit</button>
                </form>
            </div>
        </section>
    </main>

@endsection