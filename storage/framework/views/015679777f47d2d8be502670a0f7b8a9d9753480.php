<?php if (isset($component)) { $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da = $component; } ?>
<?php $component = App\View\Components\AppLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\AppLayout::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('header', null, []); ?> 
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            <?php echo e(__('Recargar Saldo')); ?>

        </h2>
     <?php $__env->endSlot(); ?>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="max-w-xl">
                    <h3 class="text-lg font-semibold">Añadir Saldo</h3>

                    <?php if(session('error')): ?>
                        <div class="text-red-500"><?php echo e(session('error')); ?></div>
                    <?php endif; ?>

                    <?php if(session('success')): ?>
                        <div class="text-green-500"><?php echo e(session('success')); ?></div>
                    <?php endif; ?>

                    <!-- ✅ Mostrar saldo correctamente en COP -->
                    <p>Saldo disponible: $<?php echo e(number_format(auth()->user()->balance, 0, ',', '.')); ?></p>

                    <form action="<?php echo e(route('balance.add')); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                        <label class="block">
                            <span class="text-gray-700 dark:text-gray-300">Monto a añadir:</span>
                            <input type="number" name="amount" min="1000" step="100" 
                            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
                        </label>

                        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mt-4">
                            Recargar Saldo
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?>
<?php /**PATH C:\xampp\htdocs\tienda\resources\views/balance.blade.php ENDPATH**/ ?>