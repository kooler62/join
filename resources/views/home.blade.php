@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                        <a href="{{ route('admin.companies.index') }}">Companies</a> <a href="{{ route('admin.companies.create') }}">Add company</a> <br>
                        <a href="{{ route('admin.employees.index') }}">Employees</a> <a href="{{ route('admin.employees.create') }}">Add employee</a> <br>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
