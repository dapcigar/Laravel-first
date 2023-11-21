@extends('layouts.app')

@section('content')

    @forelse($messages as $message)

        <ul class="list-group p-2">

            <li class="list-group-item">{{ $message->name }}</li>

            <li class="list-group-item">{{ $message->email }}</li>

            <li class="list-group-item">{{ $message->subject }}</li>

            <li class="list-group-item">{{ $message->message }}</li>

        </ul>

    @empty
        <p>No messages available.</p>

    @endforelse

@endsection
