
@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ $company->name }}</div>

                    <div class="card-body">
                        <img src="{{ $company->logo }}"><br>
                        {{ $company->email }}<br>
                        {{ $company->website }}
                        <hr>
                        Employees: <br>
                    @foreach($company->employees as $employee)
                            <a href="">{{ $employee->firstName }}   {{ $employee->lastName }}</a>
                    @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
