<?php if (isset($component)) { $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\AppLayout::class, []); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
 <?php $__env->slot('header', null, []); ?> 
    <h2 class="font-semibold text-xl text-gray-800">
        <?php echo e(__('Cart')); ?>

    </h2>
 <?php $__env->endSlot(); ?>
        <main class="my-8">
            <div class="container px-6 mx-auto">
                <div class="flex justify-center my-6">
                    <div class="flex flex-col w-full p-8 text-gray-800 bg-white shadow-lg pin-r pin-y md:w-4/5 lg:w-4/5">
                    <?php if($message = Session::get('success')): ?>
                        <div class="p-4 mb-3 bg-green-400 rounded">
                            <p class="text-green-800"><?php echo e($message); ?></p>
                        </div>
                <?php endif; ?>
                        <h3 class="text-3xl font-bold">Carrito</h3>
                    <div class="flex-1">
                    <table class="w-full text-sm lg:text-base" cellspacing="0">
                        <thead>
                            <tr class="h-12 uppercase">
                            <th class="hidden md:table-cell"></th>
                            <th class="text-left">Nombre</th>
                            <th class="pl-5 text-left lg:text-right lg:pl-0">
                                <span class="lg:hidden" title="Quantity">Qtd</span>
                                <span class="hidden lg:inline">Cantidad</span>
                            </th>
                            <th class="hidden text-right md:table-cell">Precio USD </th>
                            <th class="hidden text-right md:table-cell"> Quitar </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $cartItems; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                            <td class="hidden pb-4 md:table-cell">
                                <a href="#">
                                <img src="<?php echo e($item->attributes->image); ?>" class="w-20 rounded" alt="Thumbnail">
                                </a>
                            </td>
                            <td>
                                <a href="#">
                                <p class="mb-2 md:ml-4 text-purple-600 font-bold"><?php echo e($item->name); ?></p>
                                
                                </a>
                            </td>
                            <td class="justify-center mt-6 md:justify-end md:flex">
                                <div class="h-10 w-28">
                                <div class="relative flex flex-row w-full h-8">
                                    
                                <form action="<?php echo e(route('cart.update')); ?>" method="POST">
                                    <?php echo csrf_field(); ?>
                                <input type="hidden" name="id" value="<?php echo e($item->id); ?>" >
                                <input type="text" name="quantity" value="<?php echo e($item->quantity); ?>" 
                                    class="w-16 text-center h-6 text-gray-800 outline-none rounded border border-blue-600" />
                                <button class="px-4 mt-1 py-1.5 text-sm rounded rounded shadow text-violet-100 bg-violet-500">Update</button>
                                </form>
                                </div>
                            </div>
                        </td>
                            <td class="hidden text-right md:table-cell">
                                <span class="text-sm font-medium lg:text-base">
                                    $<?php echo e($item->price); ?>

                                </span>
                            </td>
                            <td class="hidden text-right md:table-cell">
                                <form action="<?php echo e(route('cart.remove')); ?>" method="POST">
                                <?php echo csrf_field(); ?>
                                <input type="hidden" value="<?php echo e($item->id); ?>" name="id">
                                <button class="px-4 py-2 text-white bg-red-600 shadow rounded-full">x</button>
                            </form>
                                
                            </td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        
                        </tbody>
                        </table>
                        <div>
                        Total: $<?php echo e(Cart::getTotal()); ?>

                        </div>
                        <div>
                        <form action="<?php echo e(route('cart.clear')); ?>" method="POST">
                            <?php echo csrf_field(); ?>
                            <button class="px-6 py-2 text-sm  rounded shadow text-red-100 bg-red-500">Quitar todo</button>
                        </form>
                        <form action="<?php echo e(route('cart.order')); ?>" method="POST">
                            <?php echo csrf_field(); ?>
                            <button class="px-6 py-2 text-sm  rounded shadow text-red-100 bg-blue-500">Hacer pedido</button>
                        </form>
                        </div>
                        
                    </div>
                    </div>
                </div>
            </div>
        </main>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?><?php /**PATH C:\xampp\htdocs\clientedemo\resources\views/productos/cart.blade.php ENDPATH**/ ?>