@extends('master')

@section('content')
    <div class="max-w-md mx-auto bg-white p-8 rounded shadow-md text-center">

        <h2 class="text-2xl font-semibold mb-6">Editar paciente</h2>

        <form action="{{ route('pruebas-medicas.update', $data['datos']['id'] ) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-4">
                <label for="nombre" class="block text-gray-700 text-sm font-bold mb-2">Nombre</label>
                <input value = "{{ $data['datos']['nombre'] }}" type="text" id="nombre" name="nombre" class="border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Escribe tu nombre" required>
            </div>

            <div class="mb-4">
                <label for="tipo" class="block text-gray-700 text-sm font-bold mb-2">Tipo</label>
                <input value = "{{ $data['datos']['tipo'] }}" type="text" id="tipo" name="tipo" class="border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Escribe el tipo de prueba" required>
            </div>

            <div class="mb-4">
                <label for="costo" class="block text-gray-700 text-sm font-bold mb-2">Costo</label>
                <input value = "{{ $data['datos']['costo'] }}" type="number" step="any" id="costo" name="costo" class="border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Escribe el costo de la prueba" required>
            </div>

            <div class="mb-4">
                <label for="tiempo_resultado" class="block text-gray-700 text-sm font-bold mb-2">Tiempo del resultado</label>
                <input value = "{{ $data['datos']['tiempo_resultado'] }}" type="date" id="tiempo_resultado" name="tiempo_resultado" class="border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
            </div>

            <div class="mt-6">
                <button type="submit">Enviar</button>
            </div>
        </form>
    </div>
@endsection
