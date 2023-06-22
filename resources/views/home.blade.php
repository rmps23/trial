@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Home') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="d-flex justify-content-between">
                        <span>Welcome {{$user->name}} to the trial!</span>
                        <a href="{{ route('profile.show') }}" class="btn btn-primary">Profile</a>
                    </div>

                   <div class="py-4">
                        <p>Trial Links</p>
                        <a href="{{ route('search') }}" class="btn btn-primary">Movies</a>    
                        <a href="{{ route('chart') }}" class="btn btn-primary">Charts</a>    
                   </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

