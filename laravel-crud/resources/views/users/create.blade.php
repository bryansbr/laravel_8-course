<!-- Extending from the base template -->
@extends('layouts.base');

<!-- Section -->
@section('content')
<div class="container">
    <h1>Create User</h1>
    <form action="/users" method="POST">
    @csrf
      <!-- First name -->
      <div class="mb-3">
        <input id="first_name" name="first_name" type="text" class="form-control" tabindex="1" placeholder="First name" autofocus/>
      </div>
      <!-- Last name -->
      <div class="mb-3">
        <input id="last_name" name="last_name" type="text" class="form-control" tabindex="2" placeholder="Last name"/>
      </div>
      <!-- Age -->
      <div class="mb-3">
        <input id="age" name="age" type="number" class="form-control" tabindex="3" placeholder="Age"/>
      </div>
      <!-- Gender -->
      <div class="mb-3">
        <input id="gender" name="gender" type="text" class="form-control" tabindex="4" placeholder="Gender"/>
      </div>
      <!-- Country -->
      <div class="mb-3">
        <input id="country" name="country" type="text" class="form-control" tabindex="5" placeholder="Country"/>
      </div>
      <!-- Phone number -->
      <div class="mb-3">
        <input id="phone_number" name="phone_number" type="text" class="form-control" tabindex="6" placeholder="Phone number"/>
      </div>
      <!-- Email -->
      <div class="mb-3">
        <input id="email" name="email" type="text" class="form-control" tabindex="7" placeholder="Email"/>
      </div>
      <a href="/users" class="btn btn-secondary" tabindex="8">Cancel</a>
      <button type="submit" class="btn btn-primary" tabindex="9">Submit</button>
    </form>
</div>
@endsection
