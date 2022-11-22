@extends('layouts.master')
@section('content')

<!-- "+ New Record" Button Page -->
<div class="card">
  <div class="card-header">Medical Record Page</div>
  <div class="card-body">
      
    <!-- Form -->
    <form action="/user/store" method="post">
        {{csrf_field()}}

        <label>Healthcare Institution Name</label></br>
        <input type="text" name="name" id="name" class="form-control"></br>

        <label>Visit Date</label></br>
        <input type="text" name="date" id="date" class="form-control"></br>

        <label>Visit Detail</label></br>
        <input type="text" name="detail" id="detail" class="form-control"></br>

        <label>Doctor Name</label></br>
        <input type="text" name="dr_name" id="dr_name" class="form-control"></br>

        <label>Drug Name</label></br>
        <input type="text" name="drug_name" id="drug_name" class="form-control"></br>

        <label>Medication Generic Name</label></br>
        <input type="text" name="medication_generic_name" id="medication_generic_name" class="form-control"></br>

        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
  </div>
  </div>
@stop