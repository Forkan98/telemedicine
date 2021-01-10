
@extends('admin.master')

@section('title')
    Manage Patient
@endsection

@section('body')

    <div class="panel panel-default">
        <h3 class="text-center text-success">{{ Session::get('message') }}</h3>
        <div class="panel-heading">
            View Patients & Doctors Details
        </div>
        <div>
            <table class="table" border='2' ui-jq="footable" ui-options='{
        "paging": {
          "enabled": true
        },
        "filtering": {
          "enabled": true
        },
        "sorting": {
          "enabled": true
        }}'>
                <thead>
                <tr>
                    <th data-breakpoints="xs">ID</th>
                    <th class="text-center">Dr. Name</th>
                    <th class="text-center">Contact</th>
                    <th class="text-center">Department</th>
                    <th class="text-center">Fee</th>
                    <th class="text-center">Your Name</th>
                    <th class="text-center">Mobile</th>
                    <th class="text-center">Email</th>
                    <th class="text-center">Gender</th>
                    <th class="text-center">Symptoms</th>
                    <th class="text-center">Date</th>
                    <th class="text-center">Time</th>
                    <th class="text-center">Payment</th>
                    <th class="text-center">Action</th>
                </tr>
                </thead>

                <tbody class="text-center">
                @php($i=1)
                @foreach($searchDoctors as $searchDoctor)
                    <tr data-expanded="true">
                        <td>{{ $i++ }}</td>
                        <td>{{ $searchDoctor->fullName }}</td>
                        <td>{{ $searchDoctor->contact }}</td>
                        <td>{{ $searchDoctor->department }}</td>
                        <td>{{ $searchDoctor->fee }}</td>
                        <td>{{ $searchDoctor->yourName }}</td>
                        <td>{{ $searchDoctor->mobile }}</td>
                        <td>{{ $searchDoctor->email }}</td>
                        <td>{{ $searchDoctor->gender }}</td>
                        <td>{{ $searchDoctor->symptoms }}</td>
                        <td>{{ $searchDoctor->date}}</td>
                        <td>{{ $searchDoctor->time }}</td>
                        <td>{{ $searchDoctor->payment }}</td>
{{--                        <td>{{ $searchDoctor->status == 1 ? 'Maiden' : 'Hidden' }}</td>--}}

                        <td>
                            <button style='color:#000;'><a href=" {{ route('edit-patients',['id'=>$searchDoctor->id]) }} ">Edit</a></button><button style='color:#000;'><a href="" id="{{ $searchDoctor->id }}" class="delete-btn" >Delete</a></button>
                            <form id="deletePatientForm{{ $searchDoctor->id }}" action=" {{ route('delete-patients') }} " method="post">
                                @csrf
                                <input type="hidden" value="{{ $searchDoctor->id }}" name="id"/>
                            </form>
                        </td>
                    </tr>
                @endforeach

                </tbody>

            </table>
        </div>
@endsection
