

<?php if (isset($component)) { $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\AppLayout::class, []); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('header', null, []); ?> 
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <?php echo e(__('Editar proveedores')); ?>

        </h2>
     <?php $__env->endSlot(); ?>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                  
                    <!-- Formulario con validación de Tailwind -->
                    <form method="POST" action="<?php echo e(route('providers.delete', $proveedores->id)); ?>" enctype="multipart/form-data" novalidate>
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('delete'); ?>

                        <!-- Nombre -->
                        <div class="mb-4">
                            <label for="name" class="block text-sm font-medium text-gray-700">Nombre</label>
                            <input type="text" id="name" name="name" value="<?php echo e($proveedores->name); ?>" 
                            class="mt-1 p-2 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500" readonly>
                            
                        </div>

                        <!-- Descripción -->
                        <div class="mb-4">
                            <label for="contact_name" class="block text-sm font-medium text-gray-700">Nombre de contacto </label>
                            <input type="text" id="contact_name" name="contact_name" value="<?php echo e($proveedores->contact_name); ?>"
                            class="mt-1 p-2 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500" readonly>
                            
                        </div>

                        <!-- Direccion -->
                        <div class="mb-4">
                            <label for="address" class="block text-sm font-medium text-gray-700">Direccion</label>
                            <input type="text" id="address" name="address" value="<?php echo e($proveedores->address); ?>"
                            class="mt-1 p-2 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500" readonly>
                            
                        </div>

                        <!-- telefono -->
                        <div class="mb-4">
                            <label for="phone" class="block text-sm font-medium text-gray-700">Telefono</label>
                            <input type="number" id="phone" name="phone" value="<?php echo e($proveedores->phone); ?>"
                            class="mt-1 p-2 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500" readonly>
                            
                        </div>

                        <!-- e-mail -->
                        <div class="mb-4">
                            <label for="email" class="block text-sm font-medium text-gray-700">E-mail</label>
                            <input type="email" id="email" name="email" value="<?php echo e($proveedores->email); ?>"
                            class="mt-1 p-2 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500" readonly>
                            
                        </div>
                        
                        <!-- Imagen -->
                        <div class="mb-4">
                            <label for="picture" class="block text-sm font-medium text-gray-700">Imagen</label>
                            <div class="flex items-center">
                                <img src="http://127.0.0.1:8001<?php echo e($proveedores->picture); ?>" alt="http://127.0.0.1:8001<?php echo e($proveedores->picture); ?>" class="card-img-top" width="100">
                              
                                
                            </div>
                            
                        </div>
                        
                        <!-- Botón de actualización -->
                        <div class="flex justify-end mt-4">
                            <button type="submit" class="px-6 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500">
                                Actualizar
                            </button>
                        </div>
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
<?php endif; ?><?php /**PATH C:\xampp\htdocs\clientedemo\resources\views//admin/proveedor/show.blade.php ENDPATH**/ ?>