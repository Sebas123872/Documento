<div class="py-12">
    <div class="max-w-7xl mx-auto cm:px-6 lg:px-8">
    <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
    <div class="p-6 text-gray-900 dark:text-gray-100">
<form method="POST" action="<?php echo e($method === 'PUT' ? route('categories.update', $category) : route('categories.store')); ?>" 
    enctype="multipart/form-data">
    <?php echo csrf_field(); ?>
    <?php echo method_field($method); ?>

    <div class="mb-4">
        <label for="name" class="block text-gray-700 dark:text-white text-sm font-bold mb-2">Nombre</label>
        <input
            type="text"
            name="name"
            id="name"
            value="<?php echo e(old('name', $category->name ?? '')); ?>"
            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
        >
        <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <p class="text-red-500 text-xs italic"><?php echo e($message); ?></p>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
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
     <?php if(isset($category) && $category->image_url): ?>
    <div class="mb-4">
        <label class="block text-gray-700 dark:text-white text-sm font-bold mb-2">Imagen Actual</label>
        <img src="<?php echo e($category->image_url); ?>" alt="<?php echo e($category->name); ?>" class="w-48 h-auto rounded">
    </div>
<?php endif; ?>
    <?php $__errorArgs = ['image'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
        <p class="text-red-500 text-xs italic"><?php echo e($message); ?></p>
    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

    <div class="w-full">
    <label for="description" class="block text-gray-700 dark:text-white text-sm font-bold mb-2">
        Descripción:
    </label>
    <textarea 
        name="description"
        id="description"
        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"><?php echo e(old('description', $category->description)); ?></textarea>
        
    <?php $__errorArgs = ['description'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
        <p class="text-red-500 text-xs italic"><?php echo e($message); ?></p>
    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
</div>

<button type="button"
        onclick="window.location='<?php echo e(route('categories.index')); ?>'"
        class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">
    Cancelar
</button>

    <button type="submit" class="bg-blue-700 hover:bg-blue-800 text-white font-bold py-2 px-4 ml-2 rounded">
        <?php echo e($submit); ?>

    </button>
</div>
</form>
</div>
</div>
</div>
</div>
<?php /**PATH C:\xampp\htdocs\tienda\resources\views/product/category/form.blade.php ENDPATH**/ ?>