@extends('layouts.app')

@section('content')


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card card-custom bg-dark text-light">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <!-- Campo de Nombre de Usuario -->
                        <div class="mb-3">
                            <label for="username" class="form-label">{{ __('Username') }}</label>
                            <input type="text" class="form-control" name="username" id="username" required autofocus>
                        </div>

                        <!-- Campo de Nombre -->
                        <div class="mb-3">
                            <label for="name" class="form-label">{{ __('Name') }}</label>
                            <input type="text" class="form-control" name="name" id="name" required>
                        </div>

                        <!-- Campo de Apellidos -->
                        <div class="mb-3">
                            <label for="last_name" class="form-label">{{ __('Last Name') }}</label>
                            <input type="text" class="form-control" name="last_name" id="last_name" required>
                        </div>

                        <!-- Campo de Correo Electrónico -->
                        <div class="mb-3">
                            <label for="email" class="form-label">{{ __('Email Address') }}</label>
                            <input type="email" class="form-control" name="email" id="email" required>
                        </div>

                        <!-- Campo de Contraseña -->
                        <div class="mb-3">
                            <label for="password" class="form-label">{{ __('Password') }}</label>
                            <input type="password" class="form-control" name="password" id="password" required>
                        </div>

                        <!-- Campo de Confirmación de Contraseña -->
                        <div class="mb-3">
                            <label for="password-confirm" class="form-label">{{ __('Confirm Password') }}</label>
                            <input type="password" class="form-control" name="password_confirmation" id="password-confirm" required>
                        </div>

                         <!-- Botón de Registro -->
                         <div class="mb-3 d-flex justify-content-center">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Register') }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
