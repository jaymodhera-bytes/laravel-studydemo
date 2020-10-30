@extends('students.layout')
  
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Add New Student</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('students.index') }}"> Back</a>
        </div>
    </div>
</div>
<hr>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
   
<form action="{{route('students.store')}}" method="POST" enctype="multipart/form-data">
    @csrf
  
     <div class="row">
        <div class="col-xs-6 col-sm-6 col-md-12">
            <div class="form-group">
                <strong>First Name *</strong>
                <input type="text" name="first_name" class="form-control" placeholder="First Name" value="{{ old('first_name') }}">
            </div>
            <div class="form-group">
                <strong>Last Name </strong>
                <input type="text" name="last_name" class="form-control" placeholder="Last Name" value="{{ old('last_name') }}">
            </div>
            <div class="form-group">
                <strong>Phone *</strong>
                <input type="text" name="phone" class="form-control" placeholder="Phone" value="{{ old('phone') }}">
            </div>
            <div class="form-group">
                <strong>E-mail *</strong>
                <input type="email" name="email" class="form-control" placeholder="Email" value="{{ old('email') }}">
            </div>
            <div class="form-group">
                <strong>Address *</strong>
                <textarea class="form-control" name="address" placeholder="Address" value="{{ old('address') }}"></textarea>
            </div>
            <div class="form-group">
                <strong>City </strong>
                <input type="text" name="city" class="form-control" placeholder="City" value="{{ old('city') }}">
            </div>
            <div class="form-group">
                <strong>State </strong>
                <input type="text" name="state" class="form-control" placeholder="State" value="{{ old('state') }}">
            </div>
            <div class="form-group">
                <strong>Date of Birth *</strong>
                <input type="date" name="dob" class="form-control" placeholder="DateofBirth" value="{{ old('dob') }}">
            </div>
            <div class="form-group">
                <strong>Postal Code </strong>
                <input type="text" name="zipcode" class="form-control" placeholder="Postal" value="{{ old('zipcode') }}">
            </div>

        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
   
</form>
@endsection