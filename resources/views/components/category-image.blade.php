@props(['category'])

<img
    class="w-full object-cover rounded-t-lg md:w-48 md:h-auto md:rounded-l-lg"
    src="{{ $category->image_url }}"
    alt="{{ $category->name }}"
>
