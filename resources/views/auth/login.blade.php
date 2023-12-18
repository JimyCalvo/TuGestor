@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card bg-dark text-light my-5">
                    <div class="card-body">
                        <h2 class="card-title text-center">Iniciar Sesión</h2>

                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="mb-3">
                                <label for="email" class="form-label">Email / Usuario</label>
                                <input type="text" class="form-control" id="email" name="email">
                            </div>

                            <div class="mb-3">
                                <label for="password" class="form-label">Contraseña</label>
                                <input type="password" class="form-control" id="password" name="password">
                            </div>

                            <div class="mb-3 form-check">
                                <input type="checkbox" class="form-check-input" id="remember" name="remember">
                                <label class="form-check-label" for="remember">Recordarme</label>
                            </div>

                            <button type="submit" class="btn btn-primary w-100">Iniciar Sesión</button>
                            <div class="mt-4">
                                @if (Route::has('password.request'))
                                <a class="btn btn-link text-light " href="{{ route('password.request') }}">
                                    ¿Olvidaste tu contraseña?
                                </a>
                            @endif
                                <a href="/register" class="text-white float-end me-5">Registarse</a>
                            </div>

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
