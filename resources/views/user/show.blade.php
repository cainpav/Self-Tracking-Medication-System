@extends('layouts.master')
@section('content')
<div class="card">
  <div class="card-header">Medical Record</div>
  <div class="card-body">
  
  <!-- "View" Button Page -->
  <div class="card-body">
        <p class="card-text">Healthcare Institution Name : {{ $medrecord->name }}</p>
        <p class="card-text">Visit Date : {{ $medrecord->date }}</p>
        <p class="card-text">Visit Detail : {{ $medrecord->detail }}</p>
        <p class="card-text">Doctor Name : {{ $medrecord->dr_name }}</p>
        <p class="card-text">Drug Name : {{ $medrecord->drug_name }}</p>
        <p class="card-text">Medication Generic Name : {{ $medrecord->medication_generic_name }}</p>
  </div>
  
  </div>
</div>
@endsection