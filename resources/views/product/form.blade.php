<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900 dark:text-gray-100">
            <form action="{{ $action }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method($method)
    <div class="mb-4">
        <label for="name" class="block text-gray-700 dark:text-white text-sm font-bold mb-2">Nombre</label>
        <input type="text"
            name="name"
            id="name"
            value="{{ old('name', $product->name ?? '') }}"
            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight">
        @error('name')
            <p class="text-red-500 text-xs italic">{{ $message }}</p>
        @enderror
    </div>

    <!-- Categoría -->
    <div class="mb-4">
        <label for="category_id" class="block text-white text-sm font-bold mb-2">Categoría</label>
        <select 
            name="category_id"
            id="category_id"
            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
        >
            <option value="">----- Seleccione una categoría -----</option>
            @foreach(\App\Models\Category::all() as $category)
                <option 
                    value="{{ $category->id }}" 
                    {{ old('category_id', $product->category_id ?? '') == $category->id ? 'selected' : '' }}
                >
                    {{ $category->name }}
                </option>
            @endforeach
        </select>
        @error('category_id')
            <p class="text-red-500 text-xs italic">{{ $message }}</p>
        @enderror
    </div>

    <!-- Año -->
    <div class="mb-4">
        <label for="year" class="block text-white text-sm font-bold mb-2">Año</label>
        <input 
            type="number"
            name="year"
            id="year"
            value="{{ old('year', $product->year ?? '') }}"
            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
        >
        @error('year')
            <p class="text-red-500 text-xs italic">{{ $message }}</p>
        @enderror
    </div>

    <!-- Precio -->
    <div class="mb-4">
        <label for="price" class="block text-white text-sm font-bold mb-2">Precio</label>
        <input 
            type="number"
            step="0.01"
            name="price"
            id="price"
            value="{{ old('price', number_format($product->price ?? 0, 0, ',', '.')) }}"
            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
        >
        @error('price')
            <p class="text-red-500 text-xs italic">{{ $message }}</p>
        @enderror
    </div>

    <!-- Cantidad -->
    <div class="mb-4">
        <label for="stock" class="block text-white text-sm font-bold mb-2">Cantidad</label>
        <input 
            type="number"
            name="stock"
            id="stock"
            value="{{ old('stock', $product->stock ?? '') }}"
            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
        >
        @error('stock')
            <p class="text-red-500 text-xs italic">{{ $message }}</p>
        @enderror
    </div>

    <!-- Imagen -->
    <div class="mb-4">
        <label for="image" class="block text-white text-sm font-bold mb-2">Imagen</label>
        <input 
            type="file"
            name="image"
            id="image"
            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
        >
        @error('image')
            <p class="text-red-500 text-xs italic">{{ $message }}</p>
        @enderror
    </div>

    <!-- Descripción -->
    <div class="mb-4">
        <label for="description" class="block text-white text-sm font-bold mb-2">Descripción</label>
        <textarea 
            name="description"
            id="description"
            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
        >{{ old('description', $product->description ?? '') }}</textarea>
        @error('description')
            <p class="text-red-500 text-xs italic">{{ $message }}</p>
        @enderror
    </div>

    <!-- Botones -->
    <div class="mb-4 flex items-center">
        <a href="{{ route('product.index') }}" 
           class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">
            Cancelar
        </a>
        <button 
            type="submit" 
            class="bg-blue-700 hover:bg-blue-800 text-white font-bold py-2 px-4 ml-2 rounded">
            {{ $submit }}
        </button>
    </div>

    </form>
    </div>
    </div>
    </div>
</div>
