<div class="mb-4">
    <label for="id_paciente" class="block text-gray-700 text-sm font-bold mb-2">Nombre paciente</label>
    <select id="id_paciente" name="id_paciente" class="border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
        <option value="">Seleccionar</option>
        @foreach ($datos2['data'] as $item)
            <option value="{{ $item['id'] }}">{{ $item['nombre'] }}</option>
        @endforeach
    </select>
</div>

<div class="mb-4">
    <label for="id_prueba" class="block text-gray-700 text-sm font-bold mb-2">Nombre prueba</label>
    <select id="id_prueba" name="id_prueba" class="border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
        <option value="">Seleccionar</option>
        @foreach ($datos3['data'] as $item)
            <option value="{{ $item['id'] }}">{{ $item['nombre'] }}</option>
        @endforeach
    </select>
</div>

<div class="mb-4">
    <label for="fecha_resultado" class="block text-gray-700 text-sm font-bold mb-2">Fecha de Resultado</label>
    <input type="date" id="fecha_resultado" name="fecha_resultado" class="border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
</div>

<div class="mb-4">
    <label for="resultado" class="block text-gray-700 text-sm font-bold mb-2">Resultado</label>
    <input type="text" id="resultado" name="resultado" class="border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Escribe el resultado" required>
</div>

<div class="mt-6">
    <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Enviar</button>
</div>
