@extends('layouts.index')

@section('content')
    <div class="container">
        <h2>Send a mail</h2>
        <a class="btn" href={{route('admin')}}>Go back to admin page</a>
    </div>
    <div class="container">
        <div class="row">
            @foreach ($mails as $mail)
                <p>{{$mail->id}}</p>
                <p>{{$mail->created_at->format('d-M-Y h:i')}}</p>
                <p>{{$mail->name}}</p>
                <p>{{$mail->mail}}</p>
                <p>{{$mail->subject}}</p>
                <p>{{$mail->message}}</p>
                <form action=""></form>
            @endforeach
        </div>
    </div>

@endsection