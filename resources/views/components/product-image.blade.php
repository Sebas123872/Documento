@props(['product'])

<img
    class="w-full object-cover rounded-t-lg md:w-48 md:h-auto md:rounded-l-lg"
    src="{{ $product->image_url }}"
    alt="{{ $product->name }}"
>
