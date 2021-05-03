@extends('layouts.index')

@section('content')
    <div class="container">
        <h1 class="text-center">About Home Page</h1>
        <h4 class="text-center">Here is your informations</h4>
        <div>
            {{-- <a class="btn" href={{route('abouts.edit', $about->id)}}>Add an item</a> --}}
            <a class="btn" href={{ route('admin') }}>Go back to admin page</a>
        </div>

        <div class="container">
            <div class="row">
                <div class="card">
                    <div>
                        @foreach ($presentation as $abouts)
                        <p><span>Image:</span> <br>
                            {{ $abouts->image }}</p>
                            <img src="{{asset($abouts->image)}}" alt="image" class="w-30 h-50" >
                            
                            <h4 class="font-weight-bold"><br>
                                {{ $abouts->subtitle }}</h4>

                            <p><span>Title:</span> <br>
                                {{ $abouts->title }}</p>
                        </div>


                        <p><span>Description:</span> <br>
                            {{ $abouts->description }}</p>



                        <p><span>Subparagraph:</span> <br>
                            {{ $abouts->subparagraph }}</p>

                        <p><span>Birthday:</span> <br>
                            {{ $abouts->birthday }}</p>

                        <p><span>Website:</span> <br>
                            {{ $abouts->website }}</p>

                        <p><span>Phone:</span> <br>
                            {{ $abouts->phone }}</p>

                        <p><span>City:</span> <br>
                            {{ $abouts->city }}</p>

                        <p><span>Age:</span> <br>
                            {{ $abouts->age }}</p>

                        <p><span>Degree:</span> <br>
                            {{ $abouts->degree }}</p>

                        <p><span>Email:</span> <br>
                            {{ $abouts->email }}</p>

                        <p><span>Freelance:</span> <br>
                            {{ $abouts->freelance }}</p>

                        <a href="{{ route('abouts.show', $abouts->id) }}" class="btn btn-primary">Details</a>
                        <a href="{{ route('abouts.edit', $abouts->id) }}" class="btn">Edit</a>
                        <form method="POST" action={{ route('abouts.destroy', $abouts->id) }}>
                            @csrf
                            @method('DELETE')
                            <button type="submit">Delete</button>
                        </form>
                        @endforeach
                    </div>
            </div>
        </div>
    </div>
@endsection
