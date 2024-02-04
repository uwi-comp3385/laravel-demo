@extends('layouts.app')

@section('sidebar')
    @parent
    <h2>Social Media</h2>
    <ul>
        <li>Facebook</li>
        <li>Twitter</li>
        <li>Instagram</li>
        <li>LinkedIn</li>
    </ul>
@endsection

@section('content')
    <h2>About {{ $name }}</h2>
    <p>Laravel is a web application framework with expressive, elegant syntax. A web framework provides a structure and starting point for creating your application, allowing you to focus on creating something amazing while we sweat the details.</p>
@endsection
