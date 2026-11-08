@extends('layouts.app')

@section('title', 'Welcome Page')

@section('content')
    <p>This is the Welcome section.</p>
    <p>Welcome to activity 11.</p>
    <p>Hello, {{ $name }}.</p>

    @if (count($records) === 0)
        <p>I have one record</p>
    @elseif (count($records) > 1)
        <p>I have multiple records</p>
    @else
        <p>I don't have any records!</p>
    @endif
@endsection