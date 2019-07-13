
@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Edit Employee</div>

                    <div class="card-body">
                        {{ Form::open(['route' => ['admin.employees.update', $employee], 'method' => 'PUT']) }}
                        {{ Form::text('firstName', $employee->firstName, ['class' => 'form-control', 'placeholder' => 'firstName']) }}
                        @if ($errors->has('firstName'))
                            <span>{{ $errors->first('firstName') }}</span>
                        @endif

                        {{ Form::text('lastName', $employee->lastName, ['class' => 'form-control', 'placeholder' => 'lastName']) }}
                        @if ($errors->has('lastName'))
                            <span>{{ $errors->first('lastName') }}</span>
                        @endif

                        {{ Form::text('email', $employee->email, ['class' => 'form-control', 'placeholder' => 'email']) }}
                        @if ($errors->has('email'))
                            <span>{{ $errors->first('email') }}</span>
                        @endif
                        {{ Form::select('company_id', $companies, null, [ "class" => "form-control"]) }}

                        @if ($errors->has('company_id'))
                            <span>{{ $errors->first('company_id') }}</span>
                        @endif

                        {{ Form::text('phone', $employee->phone, ['class' => 'form-control', 'placeholder' => 'phone']) }}
                        @if ($errors->has('phone'))
                            <span>{{ $errors->first('phone') }}</span>
                        @endif

                        <button type="submit" class="btn btn-outline-primary">Update</button>

                        {{ Form::close() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
