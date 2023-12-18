<!-- resources/views/profiles/create.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Crear Perfil') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('store.profile') }}">
                            @csrf

                            <div class="form-group row">
                                <label for="phone" class="col-md-4 col-form-label text-md-right">{{ __('Teléfono') }}</label>
                                <div class="col-md-6">
                                    <input id="phone" type="text" class="form-control" name="phone" required autofocus>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="telf" class="col-md-4 col-form-label text-md-right">{{ __('Telf') }}</label>
                                <div class="col-md-6">
                                    <input id="telf" type="text" class="form-control" name="telf" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="address" class="col-md-4 col-form-label text-md-right">{{ __('Dirección') }}</label>
                                <div class="col-md-6">
                                    <input id="address" type="text" class="form-control" name="address" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="job_title" class="col-md-4 col-form-label text-md-right">{{ __('Título Laboral') }}</label>
                                <div class="col-md-6">
                                    <input id="job_title" type="text" class="form-control" name="job_title">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="department" class="col-md-4 col-form-label text-md-right">{{ __('Departamento') }}</label>
                                <div class="col-md-6">
                                    <input id="department" type="text" class="form-control" name="department">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="birthdate" class="col-md-4 col-form-label text-md-right">{{ __('Fecha de Nacimiento') }}</label>
                                <div class="col-md-6">
                                    <input id="birthdate" type="date" class="form-control" name="birthdate">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="gender" class="col-md-4 col-form-label text-md-right">{{ __('Género') }}</label>
                                <div class="col-md-6">
                                    <select id="gender" class="form-control" name="gender">
                                        <option value="male">Masculino</option>
                                        <option value="female">Femenino</option>
                                        <option value="other">Otro</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Crear Perfil') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
