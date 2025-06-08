<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Editar Producto
        </h2>
    </x-slot>

    @include('product.form', [
        'product' => $product, // Pasar la variable correctamente
        'action' => route('products.update', $product),
        'method' => 'PUT',
        'submit' => 'Actualizar',
    ])
</x-app-layout>
