<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps(['category']) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps(['category']); ?>
<?php foreach (array_filter((['category']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<img
    class="w-full object-cover rounded-t-lg md:w-48 md:h-auto md:rounded-l-lg"
    src="<?php echo e($category->image_url); ?>"
    alt="<?php echo e($category->name); ?>"
>
<?php /**PATH C:\xampp\htdocs\tienda\resources\views/components/category-image.blade.php ENDPATH**/ ?>