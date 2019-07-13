@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Employees</div>

                    <div class="card-body">
                        @foreach($employees as $employee)
                            <a href="{{ route('admin.employees.show', $employee) }}"> {{ $employee->firstName }}  {{ $employee->lastName }}</a>
                            <a href="{{ route('admin.companies.show', $employee->company) }}">{{ $employee->company->name }}</a>
                            <a href="{{ route('admin.employees.edit', $employee) }}">edit</a>
                            {{ Form::open(['method' => 'DELETE', 'route' => ['admin.employees.destroy', $employee]]) }}
                            <button type="submit" class="btn btn-outline-default">Delete</button>
                            {{  Form::close()  }}
                            <br>
                        @endforeach
                        {{ $employees->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
