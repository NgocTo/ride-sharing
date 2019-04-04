@extends('layouts.main')

@section('heading', 'Users')
@section('sidebar')
    @parent
@endsection
@section('content')
    @if (isset($user)) 
        <p>{{$user->firstName}} {{$user->lastName}}</p>
    @else 
        <p>Unauthorized</p>
    @endif
@endsection
@section('script')
    <script src="{{ asset('js/script.js') }}"></script>
@endsection
