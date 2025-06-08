@props(['product'])

<p class="mb-2 font-normal text-gray-700 dark:text-gray-400">
    {{ __('Precio/Unidad: :price', ['price' => $product->formatted_price]) }}
</p>
<p class="mb-2 font-normal text-gray-700 dark:text-gray-400">
    {{ __('Cosecha: :year', ['year' => $product->year]) }}
</p>
<p class="mb-2 font-normal text-gray-700 dark:text-gray-400">
    {{ __('Stock: :count unidades', ['count' => $product->stock]) }}
</p>
<p class="mb-3 font-normal text-gray-700 dark:text-gray-400 pb-5">
    {{ $product->description }}
</p>
