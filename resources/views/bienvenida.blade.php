@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-dark text-warning">{{ __('Bienvenida') }}</div>

                <div class="card-body text-dange">
                    {{ __('Por favor inicie sesión') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection