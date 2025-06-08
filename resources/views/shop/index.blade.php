<x-app-layout>
<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
        {{ __('Tienda de Vinos') }}
    </h2>
</x-slot>

@inject('cart', 'App\Services\Cart')

<div class="py-6">
    <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 text-gray-900 dark:text-gray-100">

            <!-- 🔍 Barra de búsqueda -->
             <form action="{{ route('shop.search') }}" method="GET" class="mb-6 flex flex-wrap gap-4">
                <input type="text" name="name" placeholder="Buscar por nombre" class="border rounded px-4 py-2 bg-white text-gray-900 dark:bg-gray-700 dark:text-white">
                <select name="category" class="border rounded px-4 py-2 bg-white text-gray-900 dark:bg-gray-700 dark:text-white">
                    <option value="">Categoría</option>
                    @foreach(\App\Models\Category::all() as $category)
                        <option value="{{ $category->name }}">{{ $category->name }}</option>
                    @endforeach
                </select>
                <input type="number" name="min_price" placeholder="Precio mínimo" class="border rounded px-4 py-2 bg-white text-gray-900 dark:bg-gray-700 dark:text-white">
                <input type="number" name="max_price" placeholder="Precio máximo" class="border rounded px-4 py-2 bg-white text-gray-900 dark:bg-gray-700 dark:text-white">
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Buscar</button>
            </form>

            <!-- 🔍 Fin de la barra de búsqueda -->

            <div class="grid grid-cols-1 sm:grid-cols-2 sm:grid-cols-2 gap-4 mt-4">
                @foreach ($products as $product)
                <div class="flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow md:flex-row md:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700 relative">
                    <x-product-image :product="$product"/>
                    <div class="flex flex-col p-4 leading-normal">
                        @if($cart->hasProduct($product))
                        <div class="bg-green-500 text-white text-xs font-bold uppercase px-5 py-2 mb-2 rounded-full">
                            <p class="font-normal mb-2">
                                {{ __('En el carrito')}}: {{$cart->getTotalQuantityForProduct($product)}} {{ __('unidades')}}
                            </p>
                            <p class="font-normal">
                            {{ __('Costo total')}}: ${{ number_format($cart->getTotalCostForProduct($product, false), 0, ',', '.') }}
                            </p>
                        </div>
                        <div class="border-b border-gray-300 dark:border-gray-600 mb-3"></div>
                        @endif
                        <x-product-and-category :product="$product"/>
                        <div class="mb-1"></div>
                        <x-product-info :product="$product"/>
                    </div>
                    <div class="absolute bottom-0 right-0 p-4 flex justify-between">
                        @if(! $cart->hasProduct($product))
                        <x-cart-adder
                        :product="$product"
                        :action="route('shop.addToCart')"
                        />
                        @else
                        <div class="flex">
                            <x-cart-incrementor 
                            :item="$product"
                            :action="route('shop.increment')"
                            hidden_key="id"
                            />
                            <x-cart-decrementor 
                            :item="$product"
                            :action="route('shop.decrement')"
                            hidden_key="id"
                            />
                            <x-cart-remover 
                            :item="$product"
                            :action="route('shop.remove')"
                            hidden_key="id"
                            />
                        </div>
                        @endif
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
</x-app-layout>
