
@extends('layouts.std_navbar')

@section('content')
    <br>
    <div class="container-fluid">
    <div class="card text-white bg-secondary">
        <div class="h3 card-header">
            Contact Form
        </div>
        <div class="card-body mt-3">
            <div class="row">
                <div class="col-md-3"></div>
                    <div class="col-md-6">
                        <div class="card-body">
                            @if(\Session::has('message'))
                                <div class="alert alert-success" role="alert">
                                    {{ \Session::get('message') }}
                                </div>
                            @endif

                            @if(count($errors)>0)
                                <div class="alert alert-danger" role="alert">
                                    @foreach($errors->all() as $error)
                                        <li>{{$error}}</li>
                                    @endforeach
                                </div>
                            @endif

                            <form action="message_submit" method="POST">
                                {{csrf_field()}}
                                <div class="form-group">
                                    <label for="uic_no">UIC No.</label>
                                    <input type="text" class="form-control" id="uic_no" name="uic_no" placeholder="University ID Card No.">
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="first_name">First Name:</label>
                                        <input type="text" class="form-control" id="first_name" name="first_name" placeholder="First Name">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="last_name">Last Name:</label>
                                        <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Last Name">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="Address">Message:</label>
                                    <input type="text" class="form-control" id="msge" name="msge" placeholder="Message here...">
                                </div>
                                <button type="submit" class="btn btn-primary">Sign in</button>
                            </form>
                        </div>
                    </div>
                <div class="col-md-3"></div>
            </div>
        </div>
    </div>

    </div>
    <br>
@endsection
