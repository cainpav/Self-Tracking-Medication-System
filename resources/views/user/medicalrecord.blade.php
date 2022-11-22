@extends('layouts.master')

@section('title','Medical Record')

@section('content')

<!-- container -->
<div class="container" >
    <div class="center" >
        <div class="row">
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">
                        <h2>Medical Records</h2>
                    </div>
                    <div class="card-body">
                     <div class="left">
                        <a href="/user/create" button class="w3-button w3-orange" title="Add New Data">
                            <b><i class="fa fa-plus" aria-hidden="true"></i> New Record</b>
                        </a>
                        <a button class="w3-button w3-cyan" title="Pdf">
                            <b><i class="fa fa-download"></i>PDF</b>
                        </a>
                     </div>

                     <!-- table container -->
                     <div class = "container">
                   </div>
                        <br/>
                        <br/>

                        <!-- to alert the users -->
                       @if(session('success'))
                         <div class="alert alert-success" role="alert">
                           {{session('success')}}
                         </div>
                       @endif

                       <!-- Table -->
                        <div class="table table-bordered">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Healthcare Institution Name</th>
                                        <th>Visit Date</th>
                                        <th>Visit Detail</th>
                                        <th>Doctor Name</th>
                                        <th>Drug Name</th>
                                        <th>Medication Generic Name</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>

                                <!-- Get Data From Database -->
                                @foreach($medrecord as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->date }}</td>
                                        <td>{{ $item->detail}}</td>
                                        <td>{{ $item->dr_name }}</td>
                                        <td>{{ $item->drug_name }}</td>
                                        <td>{{ $item->medication_generic_name}}</td>
                                        <td>
                                            <!-- Buttons -->
                                            <a href="/user/medicalrecord/{{$item->id}}/show" title="View"><button class="btn btn-info btn-sm">View</button></a>
                                            <a href="/user/medicalrecord/{{$item->id}}/edit" title="Edit"><button class="btn btn-primary btn-sm">Edit</button></a>
                                            <a href="/user/medicalrecord/{{$item->id}}/delete" title="Delete"><button class="btn btn-danger btn-sm" onClick = "return confirm('Are you sure you want to delete this data?')">Delete</button></a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection