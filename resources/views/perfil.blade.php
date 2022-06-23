@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Información de Perfil') }}</div>
                <div class="card-body" style="width:130%;">

                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                    <div class="row mb-3 justify-content-center">
                        <label for="colFormLabel" class="col-sm-3 col-form-label">Nombre :</label>
                        <div class="col-sm-3">
                           <input type="text" class="form-control" id="colFormLabel" value="{{Auth::user()->nombre}}" disabled>
                        </div>
                    </div>
                    <div class="row mb-3 justify-content-center">
                        <label for="colFormLabel" class="col-sm-3 col-form-label">Apellido Paterno :</label>
                        <div class="col-sm-3">
                            <input type="text" class="form-control" id="colFormLabel" value="{{Auth::user()->paterno}}" disabled>
                        </div>
                    </div>
                    <div class="row mb-3 justify-content-center">
                        <label for="colFormLabel" class="col-sm-3 col-form-label">Apellido Materno :</label>
                        <div class="col-sm-3">
                            <input type="text" class="form-control" id="colFormLabel" value="{{Auth::user()->materno}}" disabled>
                        </div>
                    </div>
                    <div class="row mb-3 justify-content-center">
                        <label for="colFormLabel" class="col-sm-3 col-form-label">Correo :</label>
                        <div class="col-sm-3">
                           <input type="text" class="form-control" id="colFormLabel" value="{{Auth::user()->email}}" disabled>
                        </div>
                    </div>
                    <div class="row mb-3 justify-content-center">
                        <label for="colFormLabel" class="col-sm-3 col-form-label">Fecha de Nacimiento :</label>
                        <div class="col-sm-3">
                            <input type="text" class="form-control" id="colFormLabel" value="{{Auth::user()->fecha_nac}}" disabled>
                        </div>
                    </div>
                    <div class="row mb-3 justify-content-center">
                        <label for="colFormLabel" class="col-sm-3 col-form-label">Membresía :</label>
                        <div class="col-sm-3">
                            <input type="text" class="form-control" id="colFormLabel" value="{{Auth::user()->membresias->nombre}}" disabled>
                        </div>                        
                    </div>
                    
                </div>
            </div>
            
        </div>
    </div>
</div>
@endsection




