<h1>Users</h1>

@foreach($users as $u)
    <p>{{ $u->firstName }}</p>
@endforeach
