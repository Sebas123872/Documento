<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900 dark:text-gray-100">
            <form action="<?php echo e($action); ?>" method="POST" enctype="multipart/form-data">
    <?php echo csrf_field(); ?>
    <?php echo method_field($method); ?>
    <div class="mb-4">
        <label for="name" class="block text-gray-700 dark:text-white text-sm font-bold mb-2">Nombre</label>
        <input type="text"
            name="name"
            id="name"
            value="<?php echo e(old('name', $product->name ?? '')); ?>"
            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight">
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

    <!-- Categoría -->
    <div class="mb-4">
        <label for="category_id" class="block text-white text-sm font-bold mb-2">Categoría</label>
        <select 
            name="category_id"
            id="category_id"
            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
        >
            <option value="">----- Seleccione una categoría -----</option>
            <?php $__currentLoopData = \App\Models\Category::all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option 
                    value="<?php echo e($category->id); ?>" 
                    <?php echo e(old('category_id', $product->category_id ?? '') == $category->id ? 'selected' : ''); ?>

                >
                    <?php echo e($category->name); ?>

                </option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>
        <?php $__errorArgs = ['category_id'];
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

    <!-- Año -->
    <div class="mb-4">
        <label for="year" class="block text-white text-sm font-bold mb-2">Año</label>
        <input 
            type="number"
            name="year"
            id="year"
            value="<?php echo e(old('year', $product->year ?? '')); ?>"
            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
        >
        <?php $__errorArgs = ['year'];
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

    <!-- Precio -->
    <div class="mb-4">
        <label for="price" class="block text-white text-sm font-bold mb-2">Precio</label>
        <input 
            type="number"
            step="0.01"
            name="price"
            id="price"
            value="<?php echo e(old('price', number_format($product->price ?? 0, 0, ',', '.'))); ?>"
            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
        >
        <?php $__errorArgs = ['price'];
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

    <!-- Cantidad -->
    <div class="mb-4">
        <label for="stock" class="block text-white text-sm font-bold mb-2">Cantidad</label>
        <input 
            type="number"
            name="stock"
            id="stock"
            value="<?php echo e(old('stock', $product->stock ?? '')); ?>"
            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
        >
        <?php $__errorArgs = ['stock'];
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

    <!-- Imagen -->
    <div class="mb-4">
        <label for="image" class="block text-white text-sm font-bold mb-2">Imagen</label>
        <input 
            type="file"
            name="image"
            id="image"
            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
        >
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
    </div>

    <!-- Descripción -->
    <div class="mb-4">
        <label for="description" class="block text-white text-sm font-bold mb-2">Descripción</label>
        <textarea 
            name="description"
            id="description"
            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
        ><?php echo e(old('description', $product->description ?? '')); ?></textarea>
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

    <!-- Botones -->
    <div class="mb-4 flex items-center">
        <a href="<?php echo e(route('product.index')); ?>" 
           class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">
            Cancelar
        </a>
        <button 
            type="submit" 
            class="bg-blue-700 hover:bg-blue-800 text-white font-bold py-2 px-4 ml-2 rounded">
            <?php echo e($submit); ?>

        </button>
    </div>

    </form>
    </div>
    </div>
    </div>
</div>
<?php /**PATH C:\xampp\htdocs\tienda\resources\views/product/form.blade.php ENDPATH**/ ?>