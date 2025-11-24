<?php $__env->startSection('titulo'.'LISTADO DE CATEGORIAS'); ?>
    
<?php $__env->startSection('contenido'); ?>

<div class="col-12" >
    <a class="btn btn-primary" href="/categorias/crear">Crear categorias</a>

<table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Nombre</th>
      <th scope="col">Descripcion</th>
      <th scope="col">Imagen</th>
      <th scope="col">Editar</th>
      <th scope="col">Borrar</th>
    </tr>
  </thead>
  <tbody>
        <?php $__currentLoopData = $categorias; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $categoria): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
      <th scope="row"><?php echo e($categoria->id); ?></th>
      <td><?php echo e($categoria->name); ?></td>
      <td><?php echo e($categoria->description); ?></td>

      <td>
        
        
      <?php $__currentLoopData = $categoria->photos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $photo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <img src="/storage/<?php echo e($photo->name); ?>" alt="/storage/<?php echo e($photo->name); ?>" width="150">
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      
      <td> <a href="/categorias/editar/<?php echo e($categoria->id); ?>"> editar </td>
      <td> <a href="/categorias/mostrar/<?php echo e($categoria->id); ?>"> borrar</td>
    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </tbody>
</table>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('/admin/plantilla/layout', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\Serv_web\resources\views//admin/categorias/list.blade.php ENDPATH**/ ?>