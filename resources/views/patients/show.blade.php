@extends('layouts.app')

@section('content')

<nav>
    <a href="{{ route('patients.index') }}" class="link_home">Home</a>
</nav>

  <h2 class="header_2_form">Patient Information</h2>

  <table class="w-full text-sm text-left text-gray-800 dark:text-gray-700">
    <tr>
      <th>Title</th>
      <td>{{ $patient->title }}</td>
    </tr>
    <tr>
      <th>First Name</th>
      <td>{{ $patient->first_name}}</td>
    </tr>
    <tr>
      <th>Surname</th>
      <td>{{ $patient->surname }}</td>
    </tr>
    <tr>
      <th>DOB</th>
      <td>{{ $patient->dob }}</td>
    </tr>
    <tr>
      <th>Email</th>
      <td>{{ $patient->email }}</td>
    </tr>
    <tr>
      <th>Mobile</th>
      <td>{{ $patient->mobile_phone }}</td>
    </tr>
    <tr>
      <th>Address</th>
      <td>{{ $patient->address}}</td>
    </tr>
  </table>

<div class="flex gap-2 mt-4">
    @if ($patient->status === 'referred')
      <form action="{{ route('patients.accept', ['patient' => $patient->id]) }}" method="POST">
          @csrf
          @method('PUT')
          <button type="submit" class="btn btn_view">Accept</button>
      </form>

      <form action="{{ route('patients.reject', ['patient' => $patient->id]) }}" method="POST">
          @csrf
          @method('PUT')
          <button type="submit" class="btn btn_delete">Reject</button>
      </form>
    @endif
          <a href="{{ route('patients.index') }}" class="btn">Cancel</a>

</div>
@endsection