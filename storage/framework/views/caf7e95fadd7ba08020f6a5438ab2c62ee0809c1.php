<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps(['item', 'action', 'hidden_key']) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps(['item', 'action', 'hidden_key']); ?>
<?php foreach (array_filter((['item', 'action', 'hidden_key']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<form action="<?php echo e($action); ?>" method="POST" class="ms-2 inline">
    <?php echo csrf_field(); ?>
    <input type="hidden" name="product_id" value="<?php echo e(data_get($item, $hidden_key)); ?>">
    <button
        type="submit"
        class="bg-red-500 hover:bg-red-700 text-white font-bold p-1 rounded mb-2 py-4 px-5 md:mb-0 text-center text-xs"
        >
        x
    </button>
</form><?php /**PATH C:\xampp\htdocs\tienda\resources\views/components/cart-remover.blade.php ENDPATH**/ ?>