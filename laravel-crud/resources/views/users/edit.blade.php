<!-- Extending from the base template -->
@extends('layouts.base');

<!-- Section -->
@section('content')
<div class="container">
    <h3>Edit User</h3>
    <form action="/users/{{ $user->id }}" method="POST">
    @csrf
    @method('PUT')
      <!-- First name -->
      <div class="mb-3">
        <label for="" class="fw-bold form-label mt-4">First name</label>
        <input id="first_name" name="first_name" type="text" value="{{ $user->first_name }}" class="form-control" tabindex="1" autofocus/>
      </div>
      <!-- Last name -->
      <div class="mb-3">
        <label for="" class="fw-bold form-label">Last name</label>
        <input id="last_name" name="last_name" type="text" value="{{ $user->last_name }}" class="form-control" tabindex="2"/>
      </div>
      <!-- Age -->
      <div class="mb-3">
        <label for="" class="fw-bold form-label">Age</label>
        <input id="age" name="age" type="number" value="{{ $user->age }}" class="form-control" tabindex="3"/>
      </div>
      <!-- Gender -->
      <div class="mb-3">
        <label for="" class="fw-bold form-label">Gender</label>
        <select name="gender" class="form-select" tabindex="4">
          <option value="{{ $user->gender }}">-- Select a gender --</option>
          @foreach ($genders as $gender)
            <option value="{{ $gender }}">{{ $gender }}</option>
          @endforeach
        </select>
      </div>
      <!-- Country -->
      <div class="mb-3">
        <label for="" class="fw-bold form-label">Country</label>
        <select name="country" class="form-select" tabindex="5">
          <option value="{{ $user->country }}">-- Select a country --</option>
          @foreach ($countries as $country)
            <option value="{{ $country['id'] }}">{{ $country['name'] }}</option>
          @endforeach
        </select>
      </div>
      <!-- Phone number -->
      <div class="mb-3">
        <label for="" class="fw-bold form-label">Phone number</label>
        <input id="phone_number" name="phone_number" type="text" value="{{ $user->phone_number }}" class="form-control" tabindex="6"/>
      </div>
      <!-- Email -->
      <div class="mb-3">
        <label for="" class="fw-bold form-label">Email</label>
        <input id="email" name="email" type="text" value="{{ $user->email }}" class="form-control" tabindex="7"/>
      </div>
      <a href="/users" class="btn btn-secondary" tabindex="8">Cancel</a>
      <button type="submit" class="btn btn-primary" tabindex="9">Submit</button>
    </form>
</div>
@endsection