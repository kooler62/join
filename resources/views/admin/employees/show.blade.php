
@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ $employee->firstName }} {{ $employee->lastName }}
                        <a href="">edit</a>
                        {{ Form::open(['method' => 'DELETE', 'route' => ['admin.employees.destroy', $employee]]) }}
                        <button type="submit" class="btn btn-outline-default">Delete</button>
                        {{  Form::close()  }}
                    </div>

                    <div class="card-body">
                        {{ $employee->phone }} {{ $employee->email }}<br>
                        <a href="{{ route('admin.companies.show', $employee->company) }}">{{ $employee->company->name }}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
