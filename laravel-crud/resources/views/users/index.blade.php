<!-- Extending from the base template -->
@extends('layouts.base');

<!-- Section -->
@section('content')
<div class="container">
    <a href="/users/create" class="btn btn-primary">Create</a>
    <div class="container">
    <table class="table table-light table-striped mt-4">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">First name</th>
                <th scope="col">Last name</th>
                <th scope="col">Age</th>
                <th scope="col">Gender</th>
                <th scope="col">Country</th>
                <th scope="col">Phone number</th>
                <th scope="col">Email</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->first_name }}</td>
                <td>{{ $user->last_name}}</td>
                <td>{{ $user->age }}</td>
                <td>{{ $user->gender }}</td>
                <td>{{ $user->country }}</td>
                <td>{{ $user->phone_number }}</td>
                <td>{{ $user->email }}</td>
                <td>
                    <div class="container">
                        <form action="{{ route('users.destroy', $user->id) }}" method="POST">
                            <a href="/users/{{$user->id}}/edit" class="btn btn-info">Edit</a>
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger">Delete</button>
                        </form>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    </div>
</div>
@endsection