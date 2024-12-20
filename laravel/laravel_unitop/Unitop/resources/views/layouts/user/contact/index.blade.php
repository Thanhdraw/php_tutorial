@extends('layouts.user.master')

@section('title', 'Contact Us')

@section('content')
<h1>Contact Us</h1>
<form>
    <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" class="form-control" id="name" placeholder="Your name">
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" id="email" placeholder="Your email">
    </div>
    <div class="mb-3">
        <label for="message" class="form-label">Message</label>
        <textarea class="form-control" id="message" rows="3" placeholder="Your message"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Send</button>
</form>
@endsection