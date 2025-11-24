<?php if (isset($component)) { $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\AppLayout::class, []); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('header', null, []); ?> 
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <?php echo e(__('Lista de Proveedores')); ?>

        </h2>
     <?php $__env->endSlot(); ?>

    <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900">
              
              <!-- Aquí comienza la tabla -->
                <table class="min-w-full divide-y divide-gray-200">
                  <a class="px-3 py-1 bg-blue-600 text-white rounded-md hover:bg-blue-700" href="/proveedor/crear">Crear Proveedor</a>
                  <thead class="bg-gray-50">
                    <tr>
                      <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">ID</th>
                      <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nombre</th>
                      <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">nombre de contacto </th>
                      
                      <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Direccion</th>
                      <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Telefono</th>
                      <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">E-mail</th>
                    
                    </tr>
                  </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                      <?php $__currentLoopData = $proveedores; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pro): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                      <td class="px-6 py-4 whitespace-nowrap"><?php echo e($pro->id); ?></td>
                      <td class="px-6 py-4 whitespace-nowrap"><?php echo e($pro->name); ?></td>
                      <td class="px-6 py-4 whitespace-nowrap"><?php echo e($pro->contact_name); ?></td>
                      
                      <td class="px-6 py-4 whitespace-nowrap"><?php echo e($pro->address); ?></td>
                      <td class="px-6 py-4 whitespace-nowrap"><?php echo e($pro->phone); ?></td>
                      <td class="px-6 py-4 whitespace-nowrap"><?php echo e($pro->email); ?></td>
                        <!-- Enlaces para ver, editar, etc. -->
                      
                      <td>
                        <a class="px-3 py-1 bg-green-600 text-white rounded-md hover:bg-green-700" href="/proveedor/editar/<?php echo e($pro->id); ?>">Editar</a>
                        <a class="px-3 py-1 bg-red-600 text-white rounded-md hover:bg-red-700"href="/proveedor/mostrar/<?php echo e($pro->id); ?>"> Borrar</a>
                      </td>
                      
                      

                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                  </table>
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


<?php /**PATH C:\xampp\htdocs\clientedemo\resources\views//admin/proveedor/list.blade.php ENDPATH**/ ?>