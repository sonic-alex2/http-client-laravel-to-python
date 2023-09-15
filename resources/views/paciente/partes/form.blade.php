<div class="mb-4">
    <label for="nombre" class="block text-gray-700 text-sm font-bold mb-2">Nombre</label>
    <input type="text" id="nombre" name="nombre" class="border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Escribe tu nombre" required>
</div>

<div class="mb-4">
    <label for="edad" class="block text-gray-700 text-sm font-bold mb-2">Edad</label>
    <input type="number" id="edad" name="edad" class="border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Escribe tu edad" required>
</div>

<div class="mb-4">
    <label for="genero" class="block text-gray-700 text-sm font-bold mb-2">Sexo biológico</label>
    <select id="genero" name="genero" class="border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
        <option value="f">Femenino</option>
        <option value="m">Masculino</option>
    </select>
</div>

<div class="mb-4">
    <label for="fecha_ingreso" class="block text-gray-700 text-sm font-bold mb-2">Fecha de Ingreso</label>
    <input type="date" id="fecha_ingreso" name="fecha_ingreso" class="border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
</div>

<div class="mt-6">
    <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Enviar</button>
</div>
