
@extends('layouts.app')

@section('title', 'Referral System')

@section('content')

  <nav class="mb-4">
    <a href="{{ route('patients.create') }} "class="link_add_patient">Add New Patient</a>
  </nav>

<h2>Referred Patients</h2> 
<div class="relative overflow-x-auto shadow-md sm:rounded-lg mb-10">
  @if ($referredPatients->isEmpty())
    <p>No referred patients found.</p>
  @else
    <table class="w-full text-sm text-left text-gray-800 dark:text-gray-700">
      <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-600 dark:text-gray-200">
        <tr>
          <th scope="col" class="px-3 py-3">Title</th>
          <th scope="col" class="px-3 py-3">First Name</th>
          <th scope="col" class="px-3 py-3">Surname</th>
          <th scope="col" class="px-3 py-3">DOB</th>
          <th scope="col" class="px-3 py-3">Email</th>
          <th scope="col" class="px-3 py-3">Mobile</th>
          <th scope="col" class="px-3 py-3">Address</th>
          <th scope="col" class="px-3 py-3">Actions</th>
        </tr>
      </thead>
      <tbody>

        @foreach ($referredPatients as $patient )
          <tr>
            <td class="whitespace-nowrap px-3 py-3">{{ $patient->title }}</td>
            <td class="whitespace-nowrap px-3 py-3">{{ $patient->first_name }}</td>
            <td class="whitespace-nowrap px-3 py-3">{{ $patient->surname }}</td>
            <td class="whitespace-nowrap px-3 py-3">{{ $patient->dob }}</td>
            <td class="whitespace-nowrap px-3 py-3">{{ $patient->email }}</td>
            <td class="whitespace-nowrap px-3 py-3">{{ $patient->mobile_phone }}</td>
            <td class="whitespace-nowrap px-3 py-3">{{ $patient->address }}</td>
            <td>
              <a href="{{ route('patients.show', $patient->id) }}" class="btn btn_view">View</a>
              <a href="{{ route('patients.edit', $patient->id) }}" class="btn btn_edit">Edit</a>
              <form action="{{ route('patients.destroy', $patient->id) }}" method="POST" style="display: inline;">
                  @csrf
                  @method('DELETE')
                <button type="submit" class="btn btn_delete" onclick="return confirm('Delete patient?')">Delete</button>
              </form>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
  @endif
</div>

<h2>Accepted Patients</h2>
<div class="relative overflow-x-auto shadow-md sm:rounded-lg mb-10">
  @if ($acceptedPatients->isEmpty())
    <p>No accepted patients found.</p>
  @else
    <table class="w-full text-sm text-left text-gray-800 dark:text-gray-700">
      <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-600 dark:text-gray-200">
        <tr>
          <th scope="col" class="px-3 py-3">Title</th>
          <th scope="col" class="px-3 py-3">First Name</th>
          <th scope="col" class="px-3 py-3">Surname</th>
          <th scope="col" class="px-3 py-3">DOB</th>
          <th scope="col" class="px-3 py-3">Email</th>
          <th scope="col" class="px-3 py-3">Mobile</th>
          <th scope="col" class="px-3 py-3">Address</th>
          <th scope="col" class="px-3 py-3">Actions</th>
        </tr>
      </thead>
      <tbody>

        @foreach ($acceptedPatients as $patient )
          <tr>
            <td class="whitespace-nowrap px-3 py-3">{{ $patient->title }}</td>
            <td class="whitespace-nowrap px-3 py-3">{{ $patient->first_name }}</td>
            <td class="whitespace-nowrap px-3 py-3">{{ $patient->surname }}</td>
            <td class="whitespace-nowrap px-3 py-3">{{ $patient->dob }}</td>
            <td class="whitespace-nowrap px-3 py-3">{{ $patient->email }}</td>
            <td class="whitespace-nowrap px-3 py-3">{{ $patient->mobile_phone }}</td>
            <td class="whitespace-nowrap px-3 py-3">{{ $patient->address }}</td>
            <td>
              <a href="{{ route('patients.show', $patient->id) }}" class="btn btn_view">View</a>
              <a href="{{ route('patients.edit', $patient->id) }}" class="btn btn_edit">Edit</a>
              <form action="{{ route('patients.destroy', $patient->id) }}" method="POST" style="display: inline;">
                  @csrf
                  @method('DELETE')
                <button type="submit" class="btn btn_delete" onclick="return confirm('Delete patient?')">Delete</button>
              </form>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
  @endif
</div>

<h2>Rejected Patients</h2>
<div class="relative overflow-x-auto shadow-md sm:rounded-lg mb-10">
  @if ($rejectedPatients->isEmpty())
    <p>No rejected patients found.</p>
  @else
    <table class="w-full text-sm text-left text-gray-800 dark:text-gray-700">
      <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-600 dark:text-gray-200">
        <tr>
          <th scope="col" class="px-3 py-3">Title</th>
          <th scope="col" class="px-3 py-3">First Name</th>
          <th scope="col" class="px-3 py-3">Surname</th>
          <th scope="col" class="px-3 py-3">DOB</th>
          <th scope="col" class="px-3 py-3">Email</th>
          <th scope="col" class="px-3 py-3">Mobile</th>
          <th scope="col" class="px-3 py-3">Address</th>
          <th scope="col" class="px-3 py-3">Actions</th>
        </tr>
      </thead>
      <tbody>

        @foreach ($rejectedPatients as $patient )
          <tr>
            <td class="whitespace-nowrap px-3 py-3">{{ $patient->title }}</td>
            <td class="whitespace-nowrap px-3 py-3">{{ $patient->first_name }}</td>
            <td class="whitespace-nowrap px-3 py-3">{{ $patient->surname }}</td>
            <td class="whitespace-nowrap px-3 py-3">{{ $patient->dob }}</td>
            <td class="whitespace-nowrap px-3 py-3">{{ $patient->email }}</td>
            <td class="whitespace-nowrap px-3 py-3">{{ $patient->mobile_phone }}</td>
            <td class="whitespace-nowrap px-3 py-3">{{ $patient->address }}</td>
            <td>
              <a href="{{ route('patients.show', $patient->id) }}" class="btn btn_view">View</a>
              <a href="{{ route('patients.edit', $patient->id) }}" class="btn btn_edit">Edit</a>
              <form action="{{ route('patients.destroy', $patient->id) }}" method="POST" style="display: inline;">
                  @csrf
                  @method('DELETE')
                <button type="submit" class="btn btn_delete" onclick="return confirm('Delete patient?')">Delete</button>
              </form>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
  @endif
</div>
@endsection