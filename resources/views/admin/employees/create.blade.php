
@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Add Employee</div>

                    <div class="card-body">
                        {{ Form::open(['route' => ['admin.employees.store'], 'method' => 'POST']) }}
                        {{ Form::text('firstName', null, ['class' => 'form-control', 'placeholder' => 'firstName']) }}
                        @if ($errors->has('firstName'))
                            <span>{{ $errors->first('firstName') }}</span>
                        @endif

                        {{ Form::text('lastName', null, ['class' => 'form-control', 'placeholder' => 'lastName']) }}
                        @if ($errors->has('lastName'))
                            <span>{{ $errors->first('lastName') }}</span>
                        @endif

                        {{ Form::text('email', null, ['class' => 'form-control', 'placeholder' => 'email']) }}
                        @if ($errors->has('email'))
                            <span>{{ $errors->first('email') }}</span>
                        @endif

                        {{ Form::select('company_id', $companies, null, [ "class" => "form-control"]) }}

                        @if ($errors->has('company_id'))
                            <span>{{ $errors->first('company_id') }}</span>
                        @endif

                        {{ Form::text('phone', null, ['class' => 'form-control', 'placeholder' => 'phone']) }}
                        @if ($errors->has('phone'))
                            <span>{{ $errors->first('phone') }}</span>
                        @endif

                        <button type="submit" class="btn btn-outline-primary">Create</button>

                        {{ Form::close() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
