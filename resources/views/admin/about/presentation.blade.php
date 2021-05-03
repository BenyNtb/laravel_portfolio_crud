@extends('layouts.index')

@include('layouts.flash')
@include('template.backoffice.header')
@section('content')
<main id="main">
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
                        <table class="table table-striped">
                            @foreach ($presentation as $abouts)
                            
                                <div>
                                    <img src="{{asset($abouts->image)}}" alt="image" class=" w-50 h-30 d-flex align-content-center justify-content-center" >
                                </div>
                                
                                
                                <h4 class="font-weight-bold"><br>
                                    {{ $abouts->subtitle }}</h4>

                                <p ><span class="d-flex align-items-center justify-content-center">Title:</span> <br>
                                    {{ $abouts->title }}</p>
                            </table>

                        <div>
                            <p><span class="d-flex align-items-center justify-content-center">Description:</span> <br>
                                {{ $abouts->description }}</p>



                            <p><span class="d-flex align-items-center justify-content-center">Subparagraph:</span> <br>
                                {{ $abouts->subparagraph }}</p>

                            <p><span class="d-flex align-items-center justify-content-center">Birthday:</span> <br>
                                {{ $abouts->birthday }}</p>

                            <p><span class="d-flex align-items-center justify-content-center">Website:</span> <br>
                                {{ $abouts->website }}</p>

                            <p><span class="d-flex align-items-center justify-content-center">Phone:</span> <br>
                                {{ $abouts->phone }}</p>

                            <p><span class="d-flex align-items-center justify-content-center">City:</span> <br>
                                {{ $abouts->city }}</p>

                            <p><span class="d-flex align-items-center justify-content-center">Age:</span> <br>
                                {{ $abouts->age }}</p>

                            <p><span class="d-flex align-items-center justify-content-center">Degree:</span> <br>
                                {{ $abouts->degree }}</p>

                            <p><span class="d-flex align-items-center justify-content-center">Email:</span> <br>
                                {{ $abouts->email }}</p>

                            <p><span class="d-flex align-items-center justify-content-center">Freelance:</span> <br>
                                {{ $abouts->freelance }}</p>
                        </div>    

                        <a href="{{ route('abouts.show', $abouts->id) }}" class="btn btn-primary">Details</a>
                            <a href="{{ route('abouts.edit', $abouts->id) }}" class="btn btn-success">Edit</a>
                            <form method="POST" action={{ route('abouts.destroy', $abouts->id) }}>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                            @endforeach
                        </div>
                </div>
            </div>
        </div>
    </main>
@endsection
