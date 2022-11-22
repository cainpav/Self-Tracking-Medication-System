@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <!-- Message -->
                    {{ __('You are logged in!') }}

                    <!-- Go To Medical Record Interface -->
                    <a href="/user/medicalrecord"><b>Click Here To Go To Module</b></a>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
