<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps(['product']) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps(['product']); ?>
<?php foreach (array_filter((['product']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<p class="mb-2 font-normal text-gray-700 dark:text-gray-400">
    <?php echo e(__('Precio/Unidad: :price', ['price' => $product->formatted_price])); ?>

</p>
<p class="mb-2 font-normal text-gray-700 dark:text-gray-400">
    <?php echo e(__('Cosecha: :year', ['year' => $product->year])); ?>

</p>
<p class="mb-2 font-normal text-gray-700 dark:text-gray-400">
    <?php echo e(__('Stock: :count unidades', ['count' => $product->stock])); ?>

</p>
<p class="mb-3 font-normal text-gray-700 dark:text-gray-400 pb-5">
    <?php echo e($product->description); ?>

</p>
<?php /**PATH C:\xampp\htdocs\tienda\resources\views/components/product-info.blade.php ENDPATH**/ ?>