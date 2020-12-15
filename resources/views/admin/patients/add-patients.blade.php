@extends('admin.master')
@section('title')
    Patient Details
@endsection

@section('body')

    <section class="panel">
        <h3 class="text-center text-success">{{ Session::get('message') }}</h3>
        <header class="panel-heading">
            Patient Details
        </header>
        <div class="panel-body">
            <div class="position-center">
                <form action="{{ route('new-patients') }}" method="POST" class="form-horizontal" role="form">
                    @csrf

                    <div class="form-group">
                        <label for="fullName" class="col-lg-2 col-sm-2 control-label">Patient Name</label>
                        <div class="col-lg-10">
                            <input type="text" name="patientName" class="form-control" id="patientName" placeholder="Patient Name">
                      </div>
                    </div>

                    <div class="form-group">
                        <label for="fullName" class="col-lg-2 col-sm-2 control-label">Age</label>
                        <div class="col-lg-10">
                            <input type="number" name="age" class="form-control" id="age" placeholder="Age">
                        </div>
                    </div>



                    <div class="form-group">
                        <label for="contact" class="col-lg-2 col-sm-2 control-label">Contact</label>
                        <div class="col-lg-10">
                            <input type="number" name="contact" class="form-control" id="contact" placeholder="Contact">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="fee" class="col-lg-2 col-sm-2 control-label">Address</label>
                        <div class="col-lg-10">
                            <input type="text" name="address" class="form-control" id="address" placeholder="Address">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="fullName" class="col-lg-2 col-sm-2 control-label">Blood Group</label>
                        <div class="col-lg-10">
                            <input type="text" name="bloodGroup" class="form-control" id="bloodGroup" placeholder="Blood Group">
                        </div>
                    </div>


                    <div class="form-group">
                        <label for="email1" class="col-lg-2 col-sm-2 control-label">E-Mail</label>
                        <div class="col-lg-10">
                            <input type="email" name="email" class="form-control" id="email1" placeholder="Email">
                        </div>
                    </div>



                    <div class="form-group">
                        <div class="col-lg-offset-2 col-lg-10">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox"> Remember me
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-lg-offset-2 col-lg-10">
                            <button type="submit" name="btn" class="btn btn-danger">Sign in</button>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </section>


@endsection
