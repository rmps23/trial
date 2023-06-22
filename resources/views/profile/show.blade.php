@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">{{ __('Profile') }} <a href="{{ route('home') }}" class="btn btn-primary">Home</a></div>

                <div class="container">
                    <div class="border border-secondary-subtle rounded-1 my-4 p-2">
                        <span class="border-end border-secondary-subtle pe-2 text-dark me-1">Name</span>
                        <span>{{$user->name}}</span>
                    </div>

                    <div class="border border-secondary-subtle rounded-1 my-4 p-2">
                        <span class="border-end border-secondary-subtle pe-2 text-dark me-1">Email</span>
                        <span>{{$user->email}}</span>
                    </div>

                    <div class="border border-secondary-subtle rounded-1 my-4 p-2">
                        <span class="border-end border-secondary-subtle pe-2 text-dark me-1">Created at</span>
                        <span>{{$user->created_at}}</span>
                    </div>

                    <a class="btn btn-primary mb-4" href="{{ route('profile.edit') }}">Edit Profile</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
