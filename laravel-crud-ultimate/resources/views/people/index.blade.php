{{-- Dashboard view --}}
@extends('adminlte::page')

@section('title', 'Laravel 8 CRUD')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    <!-- Message for user created -->
    @if (Session::has('success_created'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ Session::get('success_created') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <!-- Message for user edited -->
    @if (Session::has('success_edited'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ Session::get('success_edited') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <!-- Message for user removed -->
    @if (Session::has('success_removed'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ Session::get('success_removed') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <div class="container-fluid">
        <a href="{{ url('/people/create') }}" class="btn btn-primary mb-3">Create</a>
        <table id="show_people" class="table table-striped table-border table-responsive caption-top shadow-lg mt-2"
            style="width: 100%">
            {{-- <caption>List of users</caption> --}}
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
                @foreach ($people as $p)
                    <tr>
                        <td>{{ $p->id }}</td>
                        <td>{{ $p->first_name }}</td>
                        <td>{{ $p->last_name }}</td>
                        <td>{{ $p->age }}</td>
                        <td>{{ $p->gender }}</td>
                        <td>{{ $p->country }}</td>
                        <td>{{ $p->phone_number }}</td>
                        <td>{{ $p->email }}</td>
                        <td width="138">
                            <div class="container">
                                <div class="row">
                                    <div class="col-sm-4">

                                        <a href="/people/{{ $p->id }}/edit" title="Edit"
                                            class="btn btn-warning p-2">
                                            <i class="fa-solid fa-pen-to-square"></i>
                                        </a>
                                    </div>
                                    <div class="col-sm-4">
                                        <form action="{{ route('people.destroy', $p->id) }}" method="POST"
                                            class="confirm-delete">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-danger p-2" title="Delete">
                                                <i class="fa-solid fa-trash"></i>
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@stop

@section('css')
    <!-- Datatables implementation -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap5.min.css">
@stop

@section('js')
    <!-- JavaScript implementation -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- Show data rows -->
    <script>
        $(document).ready(function() {
            $('#show_people').DataTable({
                'lengthMenu': [
                    [5, 10, 50, -1],
                    [5, 10, 50, "All"]
                ]
            });
        });
    </script>
    <!-- Delete alert implementation -->
    <script>
        $('.confirm-delete').submit(function(e) {
            e.preventDefault();
            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    this.submit();
                }
            })
        });
    </script>
@stop
