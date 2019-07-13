
@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Companies</div>

                    <div class="card-body">
                        @foreach($companies as $company)
                            <a href="{{ route('admin.companies.show', $company) }}"> {{ $company->name }}</a>
                            {{ $company->email }}
                            <a href="{{ route('admin.companies.edit', $company) }}">Edit</a>

                            {{ Form::open(['method' => 'DELETE', 'route' => ['admin.companies.destroy', $company]]) }}
                            <button type="submit" class="btn btn-outline-default">Delete</button>
                            {{  Form::close()  }}
                            <br>

                        @endforeach

                        {{ $companies->links() }}

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
