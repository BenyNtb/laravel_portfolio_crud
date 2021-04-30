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
                        @foreach ($about as $about)
                        <p><span>Image:</span> <br>
                            {{ $about->image }}</p>
                            <img src="{{asset($about->image)}}" alt="image" class="w-30 h-50" >
                            
                            <h4 class="font-weight-bold"><br>
                                {{ $about->subtitle }}</h4>

                            <p><span>Title:</span> <br>
                                {{ $about->title }}</p>
                        </div>


                        <p><span>Description:</span> <br>
                            {{ $about->description }}</p>



                        <p><span>Subparagraph:</span> <br>
                            {{ $about->subparagraph }}</p>

                        <p><span>Birthday:</span> <br>
                            {{ $about->birthday }}</p>

                        <p><span>Website:</span> <br>
                            {{ $about->website }}</p>

                        <p><span>Phone:</span> <br>
                            {{ $about->phone }}</p>

                        <p><span>City:</span> <br>
                            {{ $about->city }}</p>

                        <p><span>Age:</span> <br>
                            {{ $about->age }}</p>

                        <p><span>Degree:</span> <br>
                            {{ $about->degree }}</p>

                        <p><span>Email:</span> <br>
                            {{ $about->email }}</p>

                        <p><span>Freelance:</span> <br>
                            {{ $about->freelance }}</p>

                        <a href="{{ route('abouts.show', $about->id) }}" class="btn btn-primary">Details</a>
                        <a href="{{ route('abouts.edit', $about->id) }}" class="btn">Edit</a>
                        <form method="POST" action={{ route('abouts.destroy', $about->id) }}>
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
