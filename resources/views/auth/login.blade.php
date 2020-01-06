@extends('layouts.master')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
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

