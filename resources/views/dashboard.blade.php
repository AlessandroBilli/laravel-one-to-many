@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 mt-4">
                <h1>Boolfolio</h1>
                <p class="fs-2 ">I tuoi progetti a portata di click:</p>
                <div class="card">
                    <div class="card-header">{{ __('Portfolio') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        {{ __('Benvenuto, nel tuo portfolio') }}
                        {{ __('ecco i tuoi progetti:') }}

                        
                    </div>
                    
                </div>
                
                
            </div>

            
        </div>
    </div>
@endsection
