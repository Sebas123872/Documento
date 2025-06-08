@props(['product', 'action'])

<form action="{{ $action }}" method="POST">
    @csrf
    <input type="hidden" name="product_id" value="{{ data_get($product, 'id')}}">
    <button
        type="submit"
        class="bg-green-500 hover:bg-green-700 text-white font-bold p-1 rounded mb-2 p-3 md:md-0 text-center text-xl"
        >
        {{ __('Añadir al carrito')}} 
    </button>
</form>