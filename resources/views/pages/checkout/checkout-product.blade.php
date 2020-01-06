@extends('layouts.master')
@section('content')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <div class="card">
                    <div class="card-header text-center">Please! Register First to continue your shopping</div>
                    <div class="card-body">
                        <form method="post" action="{{ route('customer-registration') }}">
                            @csrf
                            <div class="form-group">
                                <label >First Name</label>
                                    <input type="text" class="form-control" name="first_name">
                            </div>
                            <div class="form-group">
                                <label>Last Name</label>
                                    <input type="text" class="form-control" name="last_name">
                            </div>
                            <div class="form-group">
                                <label>Phone Number</label>
                                    <input type="text" class="form-control" name="phone_no">
                            </div>
                            <div class="form-group">
                                <label>Division</label>
                                    <select class="form-control" name="division_id">
                                        <option>--Select Your Division--</option>
                                        @foreach($divisions as $division)
                                            <option value="{{ $division->id }}">{{ $division->name }}</option>
                                        @endforeach
                                    </select>
                            </div>
                            <div class="form-group">
                                <label>District</label>
                                    <select class="form-control" name="district">
                                        <option>--Select Your District--</option>
                                        @foreach($districts as $district)
                                            <option value="{{ $district->id }}">{{ $district->name }}</option>
                                        @endforeach
                                    </select>
                            </div>
                            <div class="form-group">
                                <label>Street Address</label>
                                    <input type="text" class="form-control " name="street_address">
                            </div>
                            <div class="form-group">
                                <label>E-Mail Address</label>
                                    <input type="email" class="form-control" name="email">
                            </div>

                            <div class="form-group">
                                <label>Password</label>
                                    <input type="password" class="form-control" name="password">
                            </div>
                            <button type="submit" class="btn btn-primary">Register</button>
                        </form>
                    </div>
                </div>
            </div>
            {{--start login form --}}
            <div class="col-md-5">
                <div class="card">
                    <div class="card-header text-center">Please! Login to continue your shopping</div>
                    <h3 class="text-danger">{{ Session::get('message') }}</h3>
                    <div class="card-body">
                        <form method="post" action="{{ route('customer-login') }}">
                            @csrf
                            <div class="form-group">
                                <label>E-Mail Address</label>
                                <input type="email" class="form-control" name="email">
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" class="form-control" name="password">
                            </div>
                            <button type="submit" class="btn btn-primary">Login</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
    @endsection
