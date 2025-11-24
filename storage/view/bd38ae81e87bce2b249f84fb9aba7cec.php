<?php $__env->startSection('titulo','mostrar categoria'); ?>

<?php $__env->startSection('contenido'); ?>

<h1>MOSTRAR </h1>
<form class="row g-3 needs-validation" method="POST" action="/categorias/<?php echo e($categoria->id); ?>" >
  <?php echo csrf_field(); ?>
  <?php echo method_field('delete'); ?>
  <div class="col-md-4">
    <label for="validationCustom01" class="form-label">Nombre</label>
    <input type="text" class="form-control" id="validationCustom01" value="<?php echo e($categoria->name); ?>" name="name" readonly>
    
  </div>
  <div class="col-md-4">
    <label for="validationCustom02" class="form-label">Descripcion</label>
    <input type="text" class="form-control" id="validationCustom02"  value="<?php echo e($categoria->description); ?>" name="description" readonly>
    
  </div>
  

  <div class="col-md-6">
    <label for="validationCustom03" name="picture" class="form-label">Img</label>
    <img src="<?php echo e($categoria->picture); ?>" alt="<?php echo e($categoria->picture); ?>" width="150"></td>
  </div>
  
  </div>
  <div class="col-12">
    <button class="btn btn-primary" type="submit">Borrar</button>
  </div>
</form>

<script>
// Example starter JavaScript for disabling form submissions if there are invalid fields
(function () {
  'use strict'

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  var forms = document.querySelectorAll('.needs-validation')

  // Loop over them and prevent submission
  Array.prototype.slice.call(forms)
    .forEach(function (form) {
      form.addEventListener('submit', function (event) {
        if (!form.checkValidity()) {
          event.preventDefault()
          event.stopPropagation()
        }

        form.classList.add('was-validated')
      }, false)
    })
})()
</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('/admin/plantilla/layout', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\Serv_web\resources\views//admin/categorias/show.blade.php ENDPATH**/ ?>