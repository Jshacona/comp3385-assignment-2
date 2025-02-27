@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Feedback Form</h2>
        <form action="{{ url('/feedback/send') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Full Name <span style="color: red;">(Required)</span></label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email <span style="color: red;">(Required)</span></label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="mb-3">
                <label for="comment" class="form-label">Comments <span style="color: red;">(Required)</span></label>
                <textarea class="form-control" id="comment" name="comment" rows="4" required></textarea>
            </div>
            <p>Let us know what you think of our website.</p>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection