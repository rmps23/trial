@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">{{ __('Search Movies') }} <a href="{{ route('home') }}" class="btn btn-primary">Home</a></div>


                <div class="card-body">

                    @livewire('movies-search')
                    @livewireScripts 

                </div>
            </div>
        </div>
    </div>
</div>
@endsection

