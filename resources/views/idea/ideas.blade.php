@extends('layouts.app')

@section('content')

<div class="container">
    <div style="text-align:center;">
        <h1><strong>Ideas</strong></h1>
    </div>

    <div>
        @foreach ($ideas as $idea)
            <span>{{ $idea->teamid }}</span>
            <h2>{{ $idea->userid }}</h2>
            <p>{{ $idea->description }}</p>
            <hr>
        @endforeach
    </div>
</div>

@endsection