@extends('layouts.master')
@section('content')


<!-- "Edit" Button Page -->
<div class="card">
  <div class="card-header">Edit Page</div>
  <div class="card-body">
      
  <!-- Form -->
  <form action="/user/medicalrecord/{{$medrecord->id}}/update" method="post">
        {{csrf_field()}}

        <label>Healthcare Institution Name</label></br>
        <input type="text" name="name" id="name" value="{{$medrecord->name}}" class="form-control"></br>

        <label>Visit Date</label></br>
        <input type="text" name="date" id="date" value="{{$medrecord->date}}" class="form-control"></br>

        <label>Visit Detail</label></br>
        <input type="text" name="detail" id="detail" value="{{$medrecord->detail}}" class="form-control"></br>

        <label>Doctor Name</label></br>
        <input type="text" name="dr_name" id="dr_name" value="{{$medrecord->dr_name}}" class="form-control"></br>

        <label>Drug Name</label></br>
        <input type="text" name="drug_name" id="drug_name" value="{{$medrecord->drug_name}}" class="form-control"></br>

        <label>Medication Generic Name</label></br>
        <input type="text" name="medication_generic_name" id="medication_generic_name" value="{{$medrecord->medication_generic_name}}" class="form-control"></br>

        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
  
  </div>
</div>
@endsection