<!-- Extending from the base template -->
@extends('layouts.base');

<!-- Section -->
@section('content')
    <div class="container">
        <h3>Edit User</h3>
        <form action="/people/{{ $p->id }}" method="POST" class="needs-validation" novalidate>
            @csrf
            @method('PUT')
            <!-- First name -->
            <div class="mb-3">
                <label for="" class="form-label mt-4">First name</label>
                <input id="first_name" name="first_name" type="text"
                    class="form-control @error('first_name') is-invalid @enderror" value="{{ $p->first_name }}"
                    tabindex="1" autofocus />
                @error('first_name')
                    <div class="invalid-feedback">
                        <strong>{{ $message }}</strong>
                    </div>
                @enderror
            </div>
            <!-- Last name -->
            <div class="mb-3">
                <label for="" class=" form-label">Last name</label>
                <input id="last_name" name="last_name" type="text"
                    class="form-control @error('last_name') is-invalid @enderror" value="{{ $p->last_name }}"
                    tabindex="2" />
                @error('last_name')
                    <div class="invalid-feedback">
                        <strong>{{ $message }}</strong>
                    </div>
                @enderror
            </div>
            <!-- Age -->
            <div class="mb-3">
                <label for="" class=" form-label">Age</label>
                <input id="age" name="age" type="number" class="form-control @error('age') is-invalid @enderror"
                    value="{{ $p->age }}" tabindex="3" />
                @error('age')
                    <div class="invalid-feedback">
                        <strong>{{ $message }}</strong>
                    </div>
                @enderror
            </div>
            <!-- Gender -->
            <div class="mb-3">
                <label for="" class=" form-label">Gender</label>
                <select name="gender" class="form-select @error('gender') is-invalid @enderror" tabindex="4">
                    <option value="{{ $p->gender }}">{{ $p->gender }}</option>
                    @foreach ($genders as $gender)
                        {{-- <option value="{{ $gender }}">{{ $gender }}</option> --}}
                        <option value="{{ $gender }}" {{ $gender == old('gender') ? 'selected' : '' }}>
                            {{ $gender }}</option>
                    @endforeach
                </select>
                @error('gender')
                    <div class="invalid-feedback">
                        <strong>{{ $message }}</strong>
                    </div>
                @enderror
            </div>
            <!-- Country -->
            <div class="mb-3">
                <label for="" class=" form-label">Country</label>
                <select name="country" class="form-select @error('country') is-invalid @enderror" tabindex="5">
                    <option value="{{ $p->country }}">{{ $p->country }}</option>
                    @foreach ($countries as $country)
                        {{-- <option value="{{ $country['name'] }}">{{ $country['name'] }}</option> --}}
                        <option value="{{ $country['name'] }}"
                            {{ $country['name'] == old('country') ? 'selected' : '' }}>
                            {{ $country['name'] }}</option>
                    @endforeach
                </select>
                @error('country')
                    <div class="invalid-feedback">
                        <strong>{{ $message }}</strong>
                    </div>
                @enderror
            </div>
            <!-- Phone number -->
            <div class="mb-3">
                <label for="" class=" form-label">Phone number</label>
                <input id="phone_number" name="phone_number" type="text"
                    class="form-control @error('phone_number') is-invalid @enderror" value="{{ $p->phone_number }}"
                    tabindex="6" />
                @error('phone_number')
                    <div class="invalid-feedback">
                        <strong>{{ $message }}</strong>
                    </div>
                @enderror
            </div>
            <!-- Email -->
            <div class="mb-3">
                <label for="" class=" form-label">Email</label>
                <input id="email" name="email" type="text" class="form-control @error('email') is-invalid @enderror"
                    value="{{ $p->email }}" tabindex="7" />
                @error('email')
                    <div class="invalid-feedback">
                        <strong>{{ $message }}</strong>
                    </div>
                @enderror
            </div>
            <a href="/people" class="btn btn-secondary" tabindex="8">Cancel</a>
            <button type="submit" class="btn btn-primary" tabindex="9">Submit</button>
        </form>
    </div>
@endsection
