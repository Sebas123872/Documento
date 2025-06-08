<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps(['product', 'action']) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps(['product', 'action']); ?>
<?php foreach (array_filter((['product', 'action']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<form action="<?php echo e($action); ?>" method="POST">
    <?php echo csrf_field(); ?>
    <input type="hidden" name="product_id" value="<?php echo e(data_get($product, 'id')); ?>">
    <button
        type="submit"
        class="bg-green-500 hover:bg-green-700 text-white font-bold p-1 rounded mb-2 p-3 md:md-0 text-center text-xl"
        >
        <?php echo e(__('Añadir al carrito')); ?> 
    </button>
</form><?php /**PATH C:\xampp\htdocs\tienda\resources\views/components/cart-adder.blade.php ENDPATH**/ ?>