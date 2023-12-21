@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Crear Perfil</h2>

        <!-- Display All Error Messages -->
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{ route('profile.store') }}">
            @csrf

            <div class="mb-3">
                <label for="dni" class="form-label">DNI</label>
                <input type="text" class="form-control {{ $errors->has('dni') ? 'is-invalid' : '' }}" id="dni"
                    name="dni" value="{{ old('dni') }}" required>
                @if ($errors->has('dni'))
                    <div class="invalid-feedback">
                        {{ $errors->first('dni') }}
                    </div>
                @endif
            </div>

            <div class="mb-3">
                <label for="phone_user" class="form-label">Teléfono (Opcional)</label>
                <input type="text" class="form-control {{ $errors->has('phone_user') ? 'is-invalid' : '' }}"
                    id="phone_user" name="phone_user" value="{{ old('phone_user') }}">
                @if ($errors->has('phone_user'))
                    <div class="invalid-feedback">
                        {{ $errors->first('phone_user') }}
                    </div>
                @endif
            </div>

            <div class="mb-3">
                <label for="tel_user" class="form-label">Teléfono Fijo</label>
                <input type="text" class="form-control {{ $errors->has('tel_user') ? 'is-invalid' : '' }}" id="tel_user"
                    name="tel_user" value="{{ old('tel_user') }}" required>
                @if ($errors->has('tel_user'))
                    <div class="invalid-feedback">
                        {{ $errors->first('tel_user') }}
                    </div>
                @endif
            </div>

            <div class="mb-3">
                <label for="address" class="form-label">Dirección</label>
                <input type="text" class="form-control {{ $errors->has('address') ? 'is-invalid' : '' }}" id="address"
                    name="address" value="{{ old('address') }}" required>
                @if ($errors->has('address'))
                    <div class="invalid-feedback">
                        {{ $errors->first('address') }}
                    </div>
                @endif
            </div>

            <div class="mb-3">
                <label for="birthday" class="form-label">Fecha de Nacimiento</label>
                <input type="date" class="form-control {{ $errors->has('birthday') ? 'is-invalid' : '' }}"
                    id="birthday" name="birthday" value="{{ old('birthday') }}" required>
                @if ($errors->has('birthday'))
                    <div class="invalid-feedback">
                        {{ $errors->first('birthday') }}
                    </div>
                @endif
            </div>

            <div class="mb-3">
                <label for="gender" class="form-label">Género</label>
                <select class="form-select {{ $errors->has('gender') ? 'is-invalid' : '' }}" id="gender" name="gender"
                    required>
                    <option selected>Elige...</option>
                    <option value="male" {{ old('gender') == 'male' ? 'selected' : '' }}>Masculino</option>
                    <option value="female" {{ old('gender') == 'female' ? 'selected' : '' }}>Femenino</option>
                    <option value="other" {{ old('gender') == 'other' ? 'selected' : '' }}>Otro</option>
                </select>
                @if ($errors->has('gender'))
                    <div class="invalid-feedback">
                        {{ $errors->first('gender') }}
                    </div>
                @endif
            </div>

            <div class="mb-3">
                <label for="job_title" class="form-label">Cargo Laboral</label>
                <input type="text" class="form-control {{ $errors->has('job_title') ? 'is-invalid' : '' }}"
                    id="job_title" name="job_title" value="{{ old('job_title') }}" required>
                @if ($errors->has('job_title'))
                    <div class="invalid-feedback">
                        {{ $errors->first('job_title') }}
                    </div>
                @endif
            </div>

            <div class="mb-3">
                <label for="tel_job" class="form-label">Teléfono del Trabajo (Opcional)</label>
                <input type="text" class="form-control {{ $errors->has('tel_job') ? 'is-invalid' : '' }}" id="tel_job"
                    name="tel_job" value="{{ old('tel_job') }}">
                @if ($errors->has('tel_job'))
                    <div class="invalid-feedback">
                        {{ $errors->first('tel_job') }}
                    </div>
                @endif
            </div>

            {{-- Lista de Areas para seleccionar --}}
            <label for="areasSelect" class="form-label">Area de Trabajo</label>
            <div class="input-group">
                <select class="form-select text-dark" id="areasSelect">
                    <option selected value=0>Choose...</option>
                    @foreach ($areas as $area)
                        <option class="text-dark" value="{{ $area->id }}">{{ $area->name_area }}</option>
                    @endforeach
                </select>
                <button class="btn btn-outline-secondary" onclick="agregarALista()" type="button">Añadir</button>
            </div>
            <br>

            {{-- Tabla provisional para elementos seleccionados --}}
            <table id="tablaAreas" class="table table-dark">
                <thead>
                    <tr class="text-center">
                        <th>Area de trabajo</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    {{-- Los elementos seleccionados se añadirán aquí --}}
                </tbody>
            </table>

            <button type="submit" class="btn btn-primary">Crear Perfil</button>
        </form>
    </div>


    <script>
        function agregarALista() {
            var select = document.getElementById('areasSelect');
            var tabla = document.getElementById('tablaAreas').getElementsByTagName('tbody')[0];

            for (var i = 0; i < select.options.length; i++) {
                if (select.options[i].selected && select.options[i].value !== '0') {
                    var fila = tabla.insertRow();
                    fila.classList.add('text-center');
                    var celda1 = fila.insertCell(0);
                    var celda2 = fila.insertCell(1);

                    celda1.innerHTML = select.options[i].text;
                    celda2.innerHTML =
                        '<button class="btn btn-danger" type="button" onclick="quitarDeLista(this)"><i class="bi bi-trash3"></i><span class="d-none d-sm-inline"> Eliminar</span></button>';

                    // Añade un campo oculto para enviar con el formulario
                    var input = document.createElement('input');
                    input.type = 'hidden';
                    input.name = 'areas_list[]';
                    input.value = select.options[i].value;
                    fila.appendChild(input);
                }
            }
        }

        function quitarDeLista(btn) {
            var fila = btn.parentNode.parentNode;
            fila.parentNode.removeChild(fila);
        }
    </script>
@endsection
