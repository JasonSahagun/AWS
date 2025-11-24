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
                  
                  <thead class="bg-gray-50">
                    <tr>
                      <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Id </th>
                      <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Id de orden </th>
                      <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Id de producto </th>
                      <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Cantidad </th>
                      <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Precio</th>
                      <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Subtotal</th>
                    
                    </tr>
                  </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                      <?php $__currentLoopData = $orden; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ord): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                      <td class="px-6 py-4 whitespace-nowrap"><?php echo e($ord->id); ?></td>
                      <td class="px-6 py-4 whitespace-nowrap"><?php echo e($ord->order_id); ?></td>
                      <td class="px-6 py-4 whitespace-nowrap"><?php echo e($ord->product_id); ?></td>
                      <td class="px-6 py-4 whitespace-nowrap"><?php echo e($ord->cantidad); ?></td>
                      
                      <td class="px-6 py-4 whitespace-nowrap"><?php echo e($ord->precio); ?></td>
                      <td class="px-6 py-4 whitespace-nowrap"><?php echo e($ord->subtotal); ?></td>
                      
                        <!-- Enlaces para ver, editar, etc. -->
                      
                      <td>
                        <a class="px-3 py-1 bg-green-600 text-white rounded-md hover:bg-green-700" href="/orden/editar/<?php echo e($ord->id); ?>">Editar</a>
                        </td>
                      <td>
                        <a class="px-3 py-1 bg-red-600 text-white rounded-md hover:bg-red-700"href="/orden/mostrar/<?php echo e($ord->id); ?>"> Borrar</a>
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


<?php /**PATH C:\xampp\htdocs\clientedemo\resources\views//admin/orden/list.blade.php ENDPATH**/ ?>