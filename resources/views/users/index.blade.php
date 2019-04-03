@extends('layouts.main')

@section('username', "Test")
@section('heading', 'Users')
@section('sidebar')
    @parent
@endsection
@section('content')
    <p>{{$session}}</p> 
    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ex enim eligendi laudantium, nostrum dignissimos dolorum quis, iste dolorem reprehenderit perspiciatis tempora cum dicta expedita excepturi exercitationem dolore consequatur aspernatur fugiat!</p>
    <div id="map"></div>
    <form method="GET">
        <input type="hidden" id="origin" name="origin" value="Sheridan College">
        <label for="destination">Destination:</label>
        <input type="text" id="destination" name="destination">
        <button id="submit" name="submit" class="btn btn-outline-primary">Go</button>
    </form>

    </div>
@endsection
@section('script')
    <script src="{{ asset('js/script.js') }}"></script>
@endsection
