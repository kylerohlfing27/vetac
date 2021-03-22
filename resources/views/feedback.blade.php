
@extends('layouts.app')

@section('content')
    <div class="container">
        <div class = "contact-title">
        <h1>Say Hello!</h1><h2>Please give us your feedback and suggestions on our website!</h2>
        </div>
        <div class = "contact-form">
            <form id = "contact-form" method = "POST" action="">
                <input name="name" type="text" class="form-control" placeholder="Your Name" required>
                 <br>
                <input name="email" type="email" class="form-control" placeholder="Email" required> <br>
                    <textarea name="message" class="form-control" placeholder="Message" required></textarea> <br>
            <input type ="submit" class="form-control submit" value = "SEND MESSAGE">
            </form> </div> </div>
@endsection
