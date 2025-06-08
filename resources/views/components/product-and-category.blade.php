@props(['product'])

<div>
    <h3 class="font-bold text-lg text-gray-800 dark:text-gray-200">{{ $product->name }}</h3>
    @if ($product->category)
        <p class="text-sm text-gray-600 dark:text-gray-400">{{ $product->category->name }}</p>
    @else
        <p class="text-sm text-red-500">Sin categoría</p>
    @endif
</div>
