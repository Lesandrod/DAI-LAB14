@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <style>
    #bola1 {
      height: 220px;
      width: 220px;
      top: -60px;
      left: -130px;
      background: radial-gradient(#44006b, #ad1fff);
      overflow: hidden;
    }
    #bola2 {
      border-radius: 38% 62% 63% 37% / 70% 33% 67% 30%;
      bottom: -60px;
      right: -80px;
      width: 300px;
      height: 300px;
      background: radial-gradient(#44006b, #ad1fff);
      overflow: hidden;
    }
    .bg-glass {
      background-color: hsla(0, 0%, 100%, 0.9) !important;
      backdrop-filter: saturate(200%) blur(25px);
    }
  </style>
</head>
<body style="background: rgb(4,16,66);
      background: linear-gradient(138deg, rgba(4,16,66,1) 35%, rgba(0,52,255,1) 100%) fixed;
      background-repeat: no-repeat;">
    <div class="row gx-lg-5 align-items-center mb-5">
            </div>
    <div class="container  p-3">
    <div class="row justify-content-center">
        <div class="col-md-8">
        <div class="col-lg-6 mb-5 mb-lg-0 position-absolute">
                <div id="bola1" class="position-absolute rounded-circle shadow-5-strong"></div>
                <div id="bola2" class="position-absolute shadow-5-strong"></div>
            </div>
            <div class="card  bg-glass">
                <div class="card-body ">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Nombre') }}</label>
                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="nombre" value="{{ old('nombre') }}" required autocomplete="nombre" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="paterno" class="col-md-4 col-form-label text-md-end">{{ __('Apellido Paterno') }}</label>

                            <div class="col-md-6">
                                <input id="paterno" type="text" class="form-control " name="paterno" value="{{ old('paterno') }}" required autocomplete="paterno" autofocus>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="materno" class="col-md-4 col-form-label text-md-end">{{ __('Apellido Materno') }}</label>

                            <div class="col-md-6">
                                <input id="materno" type="text" class="form-control " name="materno" value="{{ old('materno') }}" required autocomplete="materno" autofocus>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="id_membresia" class="col-md-4 col-form-label text-md-end">{{ __('Membresia') }}</label>

                            <div class="col-md-6">
                            <select id="id_membresia" class="form-select" name="id_membresia" required autofocus>
                                        <option value="111">Estandar</option>
                                        <option value="222">Pro</option>
                                        <option value="666">Premium</option>
                                </select>
 
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="fecha_nac" class="col-md-4 col-form-label text-md-end">{{ __('Fecha Nacimiento') }}</label>

                            <div class="col-md-6">
                                <input id="fecha_nac" type="date" class="form-control " name="fecha_nac" value="{{ old('fecha_nac') }}" required autocomplete="fecha_nac" autofocus>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Correo Electrócino') }}</label>
                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Contraseña') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirmar Contraseña') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>
                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn text-white btn-dark">
                                    {{ __('Registrarse') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
    </div>
</body>
</html>