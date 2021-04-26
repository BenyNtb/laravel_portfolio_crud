@extends('layouts.index')

@section('content')
    <div class="container">
        <h1>About Home Page</h1>
        <h4>List Items</h4>
        <div>
            {{-- <a class="btn" href={{route('abouts.edit', $about->id)}}>Add an item</a> --}}
            <a class="btn" href={{route('admin')}}>Go back to admin page</a>
        </div>
    
        <div class="container">
            <div class="row">
                @foreach ($about as $about)
                <div>
                    <p><span>Title:</span> <br>
                        {{$about->title}}</p>

                    <p><span>Description:</span> <br>
                        {{$about->description}}</p>

                    <p><span>Image:</span> <br>
                        {{$about->image}}</p>

                    <p><span>Subtitle:</span> <br>
                        {{$about->subtitle}}</p>

                    <p><span>Subparagraph:</span> <br>
                        {{$about->subparagraph}}</p>

                    <p><span>Birthday:</span> <br>
                        {{$about->birthday}}</p>

                    <p><span>Website:</span> <br>
                        {{$about->website}}</p>

                    <p><span>Phone:</span> <br>
                        {{$about->phone}}</p>

                    <p><span>City:</span> <br>
                        {{$about->city}}</p>

                    <p><span>Age:</span> <br>
                        {{$about->age}}</p>

                    <p><span>Degree:</span> <br>
                        {{$about->degree}}</p>

                    <p><span>Email:</span> <br>
                        {{$about->email}}</p>

                    <p><span>Freelance:</span> <br>
                        {{$about->freelance}}</p>
                    
                    <a href="{{route('abouts.show', $about->id)}}" class="btn btn-primary">Details</a>
                    <a href="{{route('abouts.edit', $about->id)}}" class="btn">Edit</a>
                    <form method="POST" action={{route('abouts.destroy', $about->id)}}>
                        @csrf
                        @method('DELETE')
                        <button type="submit">Delete</button>
                    </form>
                </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection