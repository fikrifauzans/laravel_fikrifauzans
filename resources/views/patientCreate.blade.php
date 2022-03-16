@extends('master')
@section('content')
    <div class="container">
        <form class="p-3 createForm" action="{{ url('patient/post') }}" method="post">@csrf
            <h6 class="text-center">Create Patient Info</h6>
            <div class="form-group">
                <label for="exampleInputEmail1">Name</label>
                <input name="name" type="text" class="form-control" placeholder="Enter Name">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
                    else.</small>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Address</label>
                <input name="address" type="text" class="form-control" placeholder="Enter Address">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
                    else.</small>
            </div>
            <div id="formHospital" class="form-group">
                <label for="exampleInputEmail1">Phone Number</label>
                <input name="phone" type="text" class="form-control" placeholder="Enter Phone Number">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
                    else.</small>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Email Number</label>
                <input name="email" type="text" class="form-control" placeholder="Enter Email">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
                    else.</small>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Hospitale</label>

                <select name="hospital_id" class="form-control">
                    @foreach ($hospitals as $hospital)
                        <option value="{{ $hospital->id }}">{{ $hospital->name }}</option>
                    @endforeach
                </select>
            </div>

            <button name="id" " type=" submit" class="btn btn-primary postCreate">Submit</button>
        </form>
    </div>
@endsection
