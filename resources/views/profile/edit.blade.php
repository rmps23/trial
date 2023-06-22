@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">{{ __('Edit Profile') }} <a href="{{ route('home') }}" class="btn btn-primary">Home</a></div>

                <form method="POST" action="{{ route('profile.update') }}" class="p-4">
                    @csrf

                    <div class="border border-secondary-subtle rounded-1 p-2 my-2">
                        <span class="border-end border-secondary-subtle pe-2 text-dark me-1">Name</span>
                        <input type="text" id="name" name="name" value="{{ old('name', $user->name) }}" class="rounded-1 border-1 border-secondary bg-secondary-emphasis px-2 py-1" style="--bs-border-opacity: .5; outline: none;">
                    </div>

                    <div class="border border-secondary-subtle rounded-1 p-2 my-2">
                        <span class="border-end border-secondary-subtle pe-2 text-dark me-1">Email</span>
                        <input type="email" id="email" name="email" value="{{ old('email', $user->email) }}" class="rounded-1 border-1 border-secondary bg-secondary-emphasis px-2 py-1" style="--bs-border-opacity: .5; outline: none;">
                    </div>

                    <button type="submit" class="btn btn-primary mt-2">Update</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
