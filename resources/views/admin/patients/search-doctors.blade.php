@extends('admin.master')
@section('title')
    Search Here
@endsection

@section('body')

    <section class="panel">
        <h3 class="text-center text-success">{{ Session::get('message') }}</h3>
        <header class="panel-heading">
          Choose Doctors
        </header>
        <div class="panel-body">
            <div class="position-center">
                <form action="{{ route('new-search') }}" method="POST" class="form-horizontal" role="form">
                    @csrf

                    <div class="form-group">
                        <label for="fullName" class="col-lg-2 col-sm-2 control-label">Dr. Name</label>
                        <div class="col-lg-10">
                            <select name="drName_id" class="form-control">

                                @foreach( $doctors as $doctor)
                               <option value="{{ $doctor->id }}">{{ $doctor->fullName }}</option>
                                @endforeach

                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="email1" class="col-lg-2 col-sm-2 control-label">Mobile</label>
                        <div class="col-lg-10">
                            <select name="contact" class="form-control">

                                @foreach( $doctors as $doctor)
                                    <option>{{ $doctor->contact }}</option>
                                @endforeach

                            </select>
                        </div>
                    </div>


                    <div class="form-group">
                        <label for="department" class="col-lg-2 col-sm-2 control-label">Department</label>
                        <div class="col-lg-10">
                            <select name="department" class="form-control">
                                <option value=""></option>
                                <option>Physical Medicine </option>
                                <option>Gynae Obstetrics</option>
                                <option>Orthopedic</option>
                                <option>Psychology</option>
                                <option>Cardiology</option>
                                <option>Neuromedicine</option>
                                <option>Chest diseases</option>
                                <option>Cancer</option>
                                <option>Gynecologist</option>
                                <option>Dermatologists</option>
                                <option>Child Expert</option>
                                <option>Neurosurgery</option>
                                <option>Diabetes Horms</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="fee" class="col-lg-2 col-sm-2 control-label">Fee</label>
                        <div class="col-lg-10">
                            <select name="fee" class="form-control">

                                @foreach( $doctors as $doctor)
                                    <option>{{ $doctor->fee }}</option>
                                @endforeach

                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="name" class="col-lg-2 col-sm-2 control-label">Your Name</label>
                        <div class="col-lg-10">
                            <input type="text" name="yourName" class="form-control" id="nameName" placeholder="Your Name">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="mobile" class="col-lg-2 col-sm-2 control-label">Mobile</label>
                        <div class="col-lg-10">
                            <input type="number" name="mobile" class="form-control" id="mobile" placeholder="Mobile">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="email1" class="col-lg-2 col-sm-2 control-label">Email</label>
                        <div class="col-lg-10">
                            <input type="email" name="email" class="form-control" id="email1" placeholder="Email">
                        </div>
                    </div>


                    <div class="form-group">
                        <label for="gender" class="col-lg-2 col-sm-2 control-label">Gender</label>
                        <div class="col-lg-10">
                            <select name="gender" class="form-control">
                                      <option></option>
                                    <option>Male</option>
                                    <option>Female</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="symptoms" class="col-lg-2 col-sm-2 control-label">Symptoms</label>
                        <div class="col-lg-10">
                            <input type="text" name="symptoms" class="form-control" id="symptoms" placeholder="Symptoms">
                        </div>
                    </div>


                    <div class="form-group">
                        <label for="date" class="col-lg-2 col-sm-2 control-label">Date</label>
                        <div class="col-lg-10">
                            <input type="date" name="date" class="form-control" id="date" placeholder="Date">
                        </div>
                    </div>


                    <div class="form-group">
                        <label for="time" class="col-lg-2 col-sm-2 control-label">Time</label>
                        <div class="col-lg-10">
                            <select name="time" class="form-control">
                                <option value=""></option>
                                <option value="9.00am-10.00am">09.00am-10.00am</option>
                                <option value="10.00am-11.00am">10.00am-11.00am</option>
                                <option value="11.00am-12.00pm">11.00am-12.00pm</option>
                                <option value="12.00pm-01.00pm">12.00pm-01.00pm</option>
                                <option value="03.00pm-04.00pm">03.00pm-04.00pm</option>
                                <option value="04.00pm-05.00pm">04.00pm-05.00pm</option>
                                <option value="05.00pm-06.00pm">05.00pm-06.00pm</option>
                                <option value="07.00pm-08.00pm">07.00pm-08.00pm</option>
                                <option value="08.00pm-09.00pm">08.00pm-09.00pm</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="payment" class="col-lg-2 col-sm-2 control-label">Payment</label>
                        <div class="col-lg-10">
                            <select name="payment" class="form-control">
                                <option></option>
                                <option>DBBL Rocket</option>
                                <option>bKash</option>
                            </select>
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
                            <button type="submit" name="btn" class="btn btn-danger">Confirm</button>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </section>


@endsection
