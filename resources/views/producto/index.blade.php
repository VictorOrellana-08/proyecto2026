<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold text-white text-center">
            Lista de Productos
        </h2>
    </x-slot>

    <!-- CONTENEDOR -->
    <div class="max-w-7xl mx-auto p-6 bg-gray-800 rounded-lg shadow-lg mt-6">


        <!-- BOTÓN CREAR -->
        <div class="flex justify-end mb-4">
            <a href="{{ route('producto.create') }}"
               class="inline-flex items-center gap-2 px-4 py-2 rounded bg-indigo-600 hover:bg-indigo-700 text-white text-sm font-medium">
                <!-- ícono “+” -->
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" clip-rule="evenodd" />
                </svg>
                Nuevo producto
            </a>
        </div>


        <table class="w-full text-sm border border-gray-700 rounded-lg overflow-hidden">
            <thead class="bg-gray-900">
                <tr>
                    <th class="py-2 text-center text-white">Nombre</th>
                    <th class="py-2 text-center text-white">Descripción</th>
                    <th class="py-2 text-center text-white">Precio</th>
                    <th class="py-2 text-center text-white">Stock</th>
                    <th class="py-2 text-center text-white">Acciones</th>
                </tr>
            </thead>

            <tbody class="bg-gray-800">
                @foreach ($productos as $e)
                    <tr class="border-b border-gray-700 hover:bg-gray-700">
                        <td style="text-align: center" class="py-2 text-white">{{ $e->nombre }}</td>
                        <td style="text-align: center" class="py-2 text-white">{{ $e->descripcion }}</td>
                        <td style="text-align: center" class="py-2 text-white">{{ $e->precio }}</td>
                        <td style="text-align: center" class="py-2 text-white">{{ $e->stock }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <div class="mt-4">
            {{ $productos->links() }}
        </div>
    </div>
</x-app-layout>
