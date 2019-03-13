@extends('layouts.main')

@section('heading', 'My profile')
@section('id', "$user->id" )
@section('username', "$user->firstName $user->lastName" )
@section('sidebar')
    @parent
@endsection
@section('content')

    <p>First Name: {{ $user->firstName }}</p>
    <p>Last Name: {{ $user->lastName }}</p>
    <p>Email: {{ $user->email }}</p>
    <p>Phone: {{ $user->phone }}</p>
    <p>Preference: {{ $user->keyword }}</p>
    
@endsection
@section('script')
    <script src="{{ asset('js/script.js') }}"></script>
@endsection