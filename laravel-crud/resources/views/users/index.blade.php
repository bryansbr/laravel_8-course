<!-- Extending from the base template -->
@extends('layouts.base');

<!-- Datatables section -->
@section('css')
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap5.min.css">
@endsection

<!-- Content section -->
@section('content')
<div class="container-fluid">
    <a href="/users/create" class="btn btn-primary mb-3">Create</a>
    <table id="show_users" class="table table-striped table-border table-responsive caption-top shadow-lg mt-2" style="width: 100%">
        <caption>List of users</caption>
        <thead class="bg-primary text-white">
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
                    <form action="{{ route('users.destroy', $user->id) }}" method="POST">
                        <a href="/users/{{ $user->id }}/edit" title="Edit" class="btn btn-warning p-2">
                            <i class="fa-solid fa-pen-to-square"></i>
                        </a>
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger p-2" title="Delete">
                            <i class="fa-solid fa-trash"></i>
                        </button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
<!-- Datatables JavaScript -->
@section('js')
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>   
<script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap5.min.js"></script>    
<script>
    $(document).ready(function() {
        $('#show_users').DataTable({
            'lengthMenu': [[5, 10, 50, -1], [5, 10, 50, "All"]]
        });
    }); 
</script>
@endsection
@endsection