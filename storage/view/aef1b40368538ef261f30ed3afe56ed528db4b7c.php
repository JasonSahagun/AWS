<?php if (isset($component)) { $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\AppLayout::class, []); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('header', null, []); ?> 
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <?php echo e(__('Lista Productos')); ?>

        </h2>
     <?php $__env->endSlot(); ?>
    <div class="container px-12 py-8 mx-auto">
        <h3 class="text-2xl font-bold text-purple-700">Nuestros Productos</h3>
        <div class="h-1 bg-red-500 w-36"></div>

        

        <div class="grid grid-cols-1 gap-6 mt-6 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
            <?php $__currentLoopData = $productos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="w-full max-w-sm mx-auto overflow-hidden bg-white rounded-md shadow-md">
                <img src="<?php echo e($product->imagen); ?>" alt="<?php echo e($product->imagen); ?>" class="w-full max-h-60">
                <div class="flex items-end justify-end w-full bg-cover">
                
                </div>
                <div class="px-5 py-3">
                    <h3 class="text-gray-700 uppercase"><?php echo e($product->name); ?></h3>
                    <span class="mt-2 text-gray-500">US$<?php echo e($product->price); ?></span>
                    <form action="<?php echo e(route('cart.store')); ?>" method="POST" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <input type="hidden" value="<?php echo e($product->id); ?>" name="id">
                        <input type="hidden" value="<?php echo e($product->name); ?>" name="name">
                        <input type="hidden" value="<?php echo e($product->price); ?>" name="price">
                        <input type="hidden" value="<?php echo e($product->imagen); ?>"  name="image">
                        <input type="hidden" value="1" name="quantity">
                        <button class="px-4 py-1.5 text-white text-sm bg-blue-800 rounded">Agregar al carrito</button>
                    </form>
                </div>
                
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?><?php /**PATH C:\xampp\htdocs\clientedemo\resources\views//productos/products.blade.php ENDPATH**/ ?>