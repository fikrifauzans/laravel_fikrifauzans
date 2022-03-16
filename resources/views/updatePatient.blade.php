@extends('master')
@section('content')
    <div class="container">
        <form class="p-3 createForm" action="{{ url('patient/update') }}" method="post">@csrf
            <h6 class="text-center">Update Patient Info</h6>
            <div class="form-group">
                <label for="exampleInputEmail1">Name</label>
                <input name="name" type="text" class="form-control" placeholder="Enter Name"
                    value="{{ $patient->name }}">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
                    else.</small>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Address</label>
                <input name="address" type="text" class="form-control" placeholder="Enter Address"
                    value="{{ $patient->address }}">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
                    else.</small>
            </div>
            <div id="formHospital" class="form-group">
                <label for="exampleInputEmail1">Phone Number</label>
                <input name="phone" type="text" class="form-control" placeholder="Enter Phone Number"
                    value="{{ $patient->phone }}">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
                    else.</small>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Email Number</label>
                <input name="email" type="text" class="form-control" placeholder="Enter Email"
                    value="{{ $patient->email }}">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
                    else.</small>
            </div>

            <button name="id" value="{{ $patient->id }}" type="submit" class="btn btn-primary postCreate">Submit</button>
        </form>
    </div>
@endsection
