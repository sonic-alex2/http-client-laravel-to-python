@extends('master')

@section('content')
    <div class="max-w-md mx-auto bg-white p-8 rounded shadow-md text-center">

        <h2 class="text-2xl font-semibold mb-6">Editar paciente</h2>

        <form action="{{ route('pacientes.update', $data['datos']['id_paciente'] ) }}" method="POST">
            @csrf 
            @method('PUT')
            <div class="mb-4">
                <label for="nombre" class="block text-gray-700 text-sm font-bold mb-2">Nombre</label>
                <input value = "{{ $data['datos']['nombre'] }}" type="text" id="nombre" name="nombre" class="border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Escribe tu nombre" required>
            </div>

            <div class="mb-4">
                <label for="edad" class="block text-gray-700 text-sm font-bold mb-2">Edad</label>
                <input value = "{{ $data['datos']['edad'] }}" type="number" id="edad" name="edad" class="border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Escribe tu edad" required>
            </div>

            <div class="mb-4">
                <label for="genero" class="block text-gray-700 text-sm font-bold mb-2">Sexo biológico</label>
                <select id="genero" name="genero" class="border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                    <option value="f">Femenino</option>
                    <option value="m" @if ($data['datos']['genero'] == 'm')
                        selected
                    @endif>Masculino</option>
                </select>
            </div>

            <div class="mb-4">
                <label for="fecha_ingreso" class="block text-gray-700 text-sm font-bold mb-2">Fecha de Ingreso</label>
                <input value = "{{ $data['datos']['fecha_ingreso'] }}" type="date" id="fecha_ingreso" name="fecha_ingreso" class="border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
            </div>

            <div class="mt-6">
                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Enviar</button>
            </div>
        </form>
    </div>
@endsection
