@extends('layouts.app')

@section('content')
    @foreach($users as $u)
        <p>{{ $u->firstName }}</p>
    @endforeach
@endsection

@component('alert')
    @slot('status')
        success
    @endslot
    <div><strong>Your trip has been successfully planned!</strong> Check out your trip details in your ride history.</div>
@endcomponent