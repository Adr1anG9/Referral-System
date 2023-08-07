@extends('layouts.app')

@section('content')

<nav>
    <a href="{{ route('patients.index') }}" class="link_home">Home</a>
</nav>

<h2 class="header_2_form">Add Patients</h2>

  <form action="{{ route('patients.store') }}" method="POST">
    @csrf

    <div class="form-group mb-3">
        <label for="title">Title:</label>
        <input type="text" name="title" id="title" @class(["border-red-500" => $errors->has('title')]) value="{{ old('title') }}" class="form-control">
        @error('title')
            <p class="error">{{ $message }}</p>
        @enderror
    </div>
    <div class="form-group mb-3">
        <label for="first_name">First Name:</label>
        <input type="text" name="first_name" id="first_name" @class(["border-red-500" => $errors->has('first_name')]) value="{{ old('first_name') }}" class="form-control">
        @error('first_name')
            <p class="error">{{ $message }}</p>
        @enderror
    </div>
    <div class="form-group mb-3">
        <label for="surname">Surname:</label>
        <input type="text" name="surname" id="surname" value="{{ old('surname') }}" @class(["border-red-500" => $errors->has('surname')]) class="form-control">
        @error('surname')
            <p class="error">{{ $message }}</p>
        @enderror
    </div>
    <div class="form-group mb-3">
        <label for="dob">DOB:</label>
        <input type="text" name="dob" id="dob" value="{{ old('dob') }}" @class(["border-red-500" => $errors->has('dob')])  class="form-control">
        @error('dob')
            <p class="error">{{ $message }}</p>
        @enderror
    </div>
    <div class="form-group mb-3">
        <label for="email">Email:</label>
        <input type="text" name="email" id="email" value="{{ old('email')}}" @class(["border-red-500" => $errors->has('email')])  class="form-control">
        @error('email')
            <p class="error">{{ $message }}</p>
        @enderror
    </div>
    <div class="form-group mb-3">
        <label for="mobile_phone">Mobile:</label>
        <input type="text" name="mobile_phone" id="mobile_phone" value="{{ old('mobile_phone') }}" @class(["border-red-500" => $errors->has('mobile_phone')])  class="form-control">
        @error('mobile_phone')
            <p class="error">{{ $message }}</p>
        @enderror
    </div>
    <div class="form-group mb-3">
        <label for="address">Address:</label>
        <input type="text" name="address" id="address" value="{{ old('address') }}" @class(["border-red-500" => $errors->has('address')]) class="form-control">
        @error('address')
            <p class="error">{{ $message }}</p>
        @enderror
    </div>
    <div class="form-group mb-3">
        <label for="status">Status</label>
        <select name="status" id="status">
            <option value="referred">Referred</option>
            <option value="accepted">Accepted</option>
            <option value="rejected">Rejected</option>
        </select>
    </div>

    <button type="submit" class="btn">Add Patient</button>
    
  </form>
@endsection
