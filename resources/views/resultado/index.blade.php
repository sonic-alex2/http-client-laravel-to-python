@extends('master')

@section('content')
    <div class="max-w-md mx-auto bg-white p-8 rounded shadow-md text-center">

        <h2 class="text-2xl font-semibold mb-6">Crear resultado</h2>

        <form action="{{ route('resultados.store') }}" method="POST">
            @csrf

            @include('resultado.partes.form')
        </form>
    </div>
    <div class="max-w-md mx-auto bg-white p-8 rounded shadow-md text-center">

        <h2 class="text-2xl font-semibold mb-6">Listado de resultados</h2>

        <table class="min-w-full divide-y divide-gray-200">
            <thead>
                <tr>
                    <th class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Nombre paciente
                    </th>
                    <th class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Nombre Prueba
                    </th>
                    <th class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Fecha resultado
                    </th>
                    <th class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Resultado
                    </th>
                    <th class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        acciones
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($datos['data'] as $item)
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $item['patient']['nombre'] }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $item['medical_test']['nombre'] }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $item['fecha_resultado'] }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $item['resultado'] }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            {{-- <a href="{{ route('resultados.edit', $item['id_resultado']) }}" class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600">Editar</a> --}}
                            <form action="{{ route('resultados.destroy', $item['id_resultado']) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="px-4 py-2 bg-red-500 text-white rounded hover:bg-red-600">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    </div>
@endsection
