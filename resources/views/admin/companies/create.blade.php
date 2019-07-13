
@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Companies</div>

                    <div class="card-body">
                        {{ Form::open(['route' => ['admin.companies.store'], 'method' => 'POST', 'files' => true]) }}
                        {{ Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'name']) }}
                        @if ($errors->has('name'))
                            <span>{{ $errors->first('name') }}</span>
                        @endif
                        {{ Form::text('website', null, ['class' => 'form-control', 'placeholder' => 'website']) }}
                        @if ($errors->has('website'))
                            <span>{{ $errors->first('website') }}</span>
                        @endif
                        {{ Form::text('email', null, ['class' => 'form-control', 'placeholder' => 'email']) }}
                        @if ($errors->has('email'))
                            <span>{{ $errors->first('email') }}</span>
                        @endif
                        {{ Form::file('logo') }}
                        <button type="submit" class="btn btn-outline-primary">Create</button>

                        {{ Form::close() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
