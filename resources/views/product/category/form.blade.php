<div class="py-12">
    <div class="max-w-7xl mx-auto cm:px-6 lg:px-8">
    <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
    <div class="p-6 text-gray-900 dark:text-gray-100">
<form method="POST" action="{{ $method === 'PUT' ? route('categories.update', $category) : route('categories.store') }}" 
    enctype="multipart/form-data">
    @csrf
    @method($method)

    <div class="mb-4">
        <label for="name" class="block text-gray-700 dark:text-white text-sm font-bold mb-2">Nombre</label>
        <input
            type="text"
            name="name"
            id="name"
            value="{{ old('name', $category->name ?? '') }}"
            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
        >
        @error('name')
            <p class="text-red-500 text-xs italic">{{ $message }}</p>
        @enderror
    </div>
    
    <div>
    <label for="image" class="block text-sm font-medium text-gray-700 dark:text-white text-left font-bold mb-2">Imagen</label>
    <input
        type="file"
        name="image"
        id="image"
        class="block w-full text-sm text-gray-500 dark:text-white 
               file:mr-4 file:py-2 file:px-4
               file:rounded-md file:border-0
               file:text-sm file:font-semibold
               file:bg-violet-50 file:text-violet-700
               hover:file:bg-violet-100"
    />
     @if(isset($category) && $category->image_url)
    <div class="mb-4">
        <label class="block text-gray-700 dark:text-white text-sm font-bold mb-2">Imagen Actual</label>
        <img src="{{ $category->image_url }}" alt="{{ $category->name }}" class="w-48 h-auto rounded">
    </div>
@endif
    @error('image')
        <p class="text-red-500 text-xs italic">{{ $message }}</p>
    @enderror

    <div class="w-full">
    <label for="description" class="block text-gray-700 dark:text-white text-sm font-bold mb-2">
        Descripción:
    </label>
    <textarea 
        name="description"
        id="description"
        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">{{ old('description', $category->description) }}</textarea>
        
    @error('description')
        <p class="text-red-500 text-xs italic">{{ $message }}</p>
    @enderror
</div>

<button type="button"
        onclick="window.location='{{ route('categories.index') }}'"
        class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">
    Cancelar
</button>

    <button type="submit" class="bg-blue-700 hover:bg-blue-800 text-white font-bold py-2 px-4 ml-2 rounded">
        {{ $submit }}
    </button>
</div>
</form>
</div>
</div>
</div>
</div>
