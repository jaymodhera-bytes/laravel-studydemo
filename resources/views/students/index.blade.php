@extends('students.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Student list</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('students.create') }}"> Create New student</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>

            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Address</th>
            <th>City</th>
            <th>State</th>
            <th>DateofBirth</th>
            <th>Postal  </th>
            <th>Image</th>
            {{-- <th width="280px">Action</th> --}}
        </tr>
        @foreach ($students as $student)
        <tr>
            <td>{{ $student->first_name.' '.$student->last_name }}</td>
            <td>{{ $student->email }}</td>
            <td>{{ $student->phone }}</td>
            <td>{{ $student->address }}</td>
            <td>{{ $student->city }}</td>
            <td>{{ $student->state }}</td>
            <td>{{ $student->dob }}</td>
            <td>{{ $student->zipcode }}</td>
            <td><img src="{{ $student->image }}" alt="No Image" height="100px"></td>
        </tr>
        @endforeach
    </table>

    {!! $students->links() !!}

@endsection
