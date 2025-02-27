@extends('layouts.email')

@section('content')
<p><strong>{{ $name }}</strong> has sent feedback about your website.</p>
<p><strong>Email:</strong> {{ $email }}</p>
<p><strong>Comments:</strong></p>
<p>{{ $comment }}</p>
@endsection