<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Vinos') }}
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <a href="{{ route('product.create') }}"
                       class="inline-flex items-center px-4 py-2 border border-blue-500 text-blue-500 text-sm font-medium rounded hover:bg-blue-500 hover:text-white transition">
                        {{ __('Crear Vino') }}
                    </a>
                    
                    @if($products->isNotEmpty())
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mt-4">
                        @foreach($products as $product)
                        <div class="flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow md:flex-row md:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700 relative">
                            <!-- Componente de imagen -->
                            <x-product-image :product="$product"/>
                            
                            <div class="flex flex-col p-4 leading-normal">
                                <!-- Componente de categoría y nombre del producto -->
                                <x-product-and-category :product="$product"/>
                                
                                <div class="border-b borde-gray-300 dark:border-gray-600 mb-3"></div>
                                
                                <!-- Componente de información adicional -->
                                <x-product-info :product="$product"/>
                                
                                <div class="absolute bottom-0 right-0 p-4 flex justify-between">
                                    <a href="{{ route('products.edit', $product) }}"
                                       class="bg-purple-500 hover:bg-purple-700 text-white font-bold p-1 rounded mb-2 md:mb-0 text-center">
                                        Editar
                                    </a>
                                    <form action="{{ route('product.destroy', $product) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" 
                                            class="bg-red-500 hover:bg-red-700 text-white font-bold p-1 rounded w-full md:w-auto ms-2">
                                            Eliminar
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    @else
                        <p class="mt-4 bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                            <strong class="font-bold">¡Lo siento!</strong>
                            <span class="block sm:inline">No hay productos creados.</span>
                        </p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
