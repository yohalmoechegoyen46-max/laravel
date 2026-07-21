<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Práctica con Laravel</title>
    <!-- Tailwind CSS desde CDN para no complicar la instalación -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 font-sans antialiased">

    <div class="max-w-4xl mx-auto py-10 px-4">
        
        <!-- Encabezado -->
        <header class="mb-8">
            <h1 class="text-3xl font-bold text-gray-800">Panel de Práctica</h1>
            <p class="text-gray-600">Una vista limpia y sencilla para empezar en Laravel.</p>
        </header>

        <!-- Formulario simple -->
        <section class="bg-white p-6 rounded-lg shadow-md mb-8">
            <h2 class="text-xl font-semibold text-gray-700 mb-4">Nuevo Registro</h2>
            
            <form action="#" method="POST" class="space-y-4">
                <!-- No olvides @csrf en Laravel cuando envíes formularios POST -->
                <!-- @csrf -->
                
                <div>
                    <label class="block text-sm font-medium text-gray-700">Nombre</label>
                    <input type="text" name="nombre" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm p-2 border focus:ring-indigo-500 focus:border-indigo-500" placeholder="Escribe algo...">
                </div>

                <button type="submit" class="bg-indigo-600 text-white px-4 py-2 rounded-md hover:bg-indigo-700 transition">
                    Guardar
                </button>
            </form>
        </section>

        <!-- Tabla de datos (Ejemplo con un array simulado) -->
        <section class="bg-white rounded-lg shadow-md overflow-hidden">
            <div class="px-6 py-4 border-b border-gray-200">
                <h2 class="text-xl font-semibold text-gray-700">Listado</h2>
            </div>
            
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">ID</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nombre</th>
                        <th class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">Acciones</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    
                </tbody>
            </table>
        </section>

    </div>

</body>
</html>