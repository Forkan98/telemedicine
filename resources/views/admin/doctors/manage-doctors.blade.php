@extends('admin.master')

@section('title')
    Manage Doctor
@endsection

@section('body')

        <div class="panel panel-default">
            <h3 class="text-center text-success">{{ Session::get('message') }}</h3>
            <div class="panel-heading">
                View Doctors
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
                        <th class="text-center">Full Name</th>
                        <th class="text-center">Address</th>
                        <th class="text-center">Contact</th>
                        <th class="text-center">Email</th>
                        <th class="text-center">Expert in</th>
                        <th class="text-center">Fee</th>
                        <th class="text-center">Action</th>
                    </tr>
                    </thead>

                    <tbody class="text-center">
                     @php($i=1)
                    @foreach($doctors as $doctor)
                    <tr data-expanded="true">
                        <td>{{ $i++ }}</td>
                        <td>{{ $doctor->fullName }}</td>
                        <td>{{ $doctor->address }}</td>
                        <td>{{ $doctor->contact }}</td>
                        <td>{{ $doctor->email }}</td>
                        <td>{{ $doctor->expertise }}</td>
                        <td>{{ $doctor->fee }}</td>
                        <td>
                            <button style='color:#000;'><a href=" {{ route('edit-doctors',['id'=>$doctor->id]) }}">Edit</a></button><button style='color:#000;'><a href="">Delete</a></button>
                        </td>
                    </tr>
                        @endforeach

                    </tbody>

                </table>
            </div>
@endsection
