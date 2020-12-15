@extends('admin.master')
@section('title')
    Add Doctor
@endsection

@section('body')

        <section class="panel">
            <h3 class="text-center text-success">{{ Session::get('message') }}</h3>
            <header class="panel-heading">
                Add Doctors
            </header>
            <div class="panel-body">
                <div class="position-center">
                    <form action="{{ route('new-doctor') }}" method="POST" class="form-horizontal" role="form">
                      @csrf
                        <div class="form-group">
                            <label for="fullName" class="col-lg-2 col-sm-2 control-label">Full Name :</label>
                            <div class="col-lg-10">
                                <input type="text" name="fullName" class="form-control" id="fullName" placeholder="Full Name">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="address" class="col-lg-2 col-sm-2 control-label">Addres :</label>
                            <div class="col-lg-10">
                                <input type="text" name="address" class="form-control" id="address" placeholder="Address">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="contact" class="col-lg-2 col-sm-2 control-label">Contact :</label>
                            <div class="col-lg-10">
                                <input type="number" name="contact" class="form-control" id="contact" placeholder="Contact">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="email1" class="col-lg-2 col-sm-2 control-label">Email :</label>
                            <div class="col-lg-10">
                                <input type="email" name="email" class="form-control" id="email1" placeholder="Email">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="expertIn" class="col-lg-2 col-sm-2 control-label">Expert in :</label>
                            <div class="col-lg-10">
                                <select name="expertise" class="form-control">
                                    <option>--Expert in--</option>
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
                            <label for="fee" class="col-lg-2 col-sm-2 control-label">Fee :</label>
                            <div class="col-lg-10">
                                <input type="number" name="fee" class="form-control" id="fee" placeholder="Fee">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="status" class="col-lg-2 col-sm-2 control-label">Status :</label>
                            <div class="col-lg-10 radio">
                                <label><input type="radio" name="status" value="1"/>Maiden</label>
                                <label><input type="radio" name="status" value="0"/>Hidden</label>
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
