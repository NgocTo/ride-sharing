@extends('layouts.main')

@section('content')
    @foreach($data as $d)
        <p>{{ $d->licenseNumber }}</p>
    @endforeach

    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ex enim eligendi laudantium, nostrum dignissimos dolorum quis, iste dolorem reprehenderit perspiciatis tempora cum dicta expedita excepturi exercitationem dolore consequatur aspernatur fugiat!</p>
@endsection