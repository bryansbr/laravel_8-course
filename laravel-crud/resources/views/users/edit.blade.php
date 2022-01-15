<!-- Extending from the base template -->
@extends('layouts.base');

<!-- Section -->
@section('content')
<div class="container">
    <h1>Edit User</h1>
    <form action="/users/{{$user->id}}" method="POST">
    @csrf
    @method('PUT')
      <!-- First name -->
      <div class="mb-3">
        <input id="first_name" name="first_name" type="text" class="form-control" value="{{ $user->first_name }}" placeholder="First name" autofocus/>
      </div>
      <!-- Last name -->
      <div class="mb-3">
        <input id="last_name" name="last_name" type="text" class="form-control" value="{{ $user->last_name }}" placeholder="Last name"/>
      </div>
      <!-- Age -->
      <div class="mb-3">
        <input id="age" name="age" type="number" class="form-control" value="{{ $user->age }}" placeholder="Age"/>
      </div>
      <!-- Gender -->
      <div class="mb-3">
        <input id="gender" name="gender" type="text" class="form-control" value="{{ $user->gender }}" placeholder="Gender"/>
      </div>
      <!-- Country -->
      <div class="mb-3">
        <input id="country" name="country" type="text" class="form-control" value="{{ $user->country }}" placeholder="Country"/>
      </div>
      <!-- Phone number -->
      <div class="mb-3">
        <input id="phone_number" name="phone_number" type="text" class="form-control" value="{{ $user->phone_number }}" placeholder="Phone number"/>
      </div>
      <!-- Email -->
      <div class="mb-3">
        <input id="email" name="email" type="text" class="form-control" value="{{ $user->email }}"= placeholder="Email"/>
      </div>
      <a href="/users" class="btn btn-secondary" value=""="8">Cancel</a>
      <button type="submit" class="btn btn-primary" value=""="9">Submit</button>
    </form>
</div>
@endsection