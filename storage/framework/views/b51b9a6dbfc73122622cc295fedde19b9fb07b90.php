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

<div>
    <h3 class="font-bold text-lg text-gray-800 dark:text-gray-200"><?php echo e($product->name); ?></h3>
    <?php if($product->category): ?>
        <p class="text-sm text-gray-600 dark:text-gray-400"><?php echo e($product->category->name); ?></p>
    <?php else: ?>
        <p class="text-sm text-red-500">Sin categoría</p>
    <?php endif; ?>
</div>
<?php /**PATH C:\xampp\htdocs\tienda\resources\views/components/product-and-category.blade.php ENDPATH**/ ?>