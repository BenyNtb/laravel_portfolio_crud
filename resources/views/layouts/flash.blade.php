{{-- @dump(Session::all()) --}}

{{-- message success --}}
@if ($message = Session::get('success'))
    <div class="alert alert-success alert-block text-center">
        <strong>{{$message}}</strong>
    </div>
@endif

{{-- message warning --}}
@if ($message = Session::get('warning'))
    <div class="alert alert-warning alert-block text-center">
        <strong>{{$message}}</strong>
    </div>
@endif


