<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Inicio sesion</title>

    <!-- <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/sign-in/"> -->

    <!-- Bootstrap core CSS -->
<link href="/assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="/css_boot_50/signin.css" rel="stylesheet">
  </head>

  <body class="text-center">
    
<main class="form-signin">
  <form method="POST" action="<?php echo e(route('validar-registro')); ?>">
    <?php echo csrf_field(); ?>

    <img class="mb-4" src="/assets/brand/box2-heart-fill.svg" alt="" width="72" height="57">
    <h1 class="h3 mb-3 fw-normal">Inicia sesion</h1>
   
    

    <div class="form-floating">
      <input type="email" class="form-control" id="emailInput" name="email" required autocomplete="disable" 
      placeholder="sutano.brios@gmail.com">
      <label for="emailInput" class="form-label"> Correo</label>
    </div>

    <div class="form-floating">
      <input type="password" class="form-control" id="PasswordInput" name="password" required placeholder="Password">
      <label for="PasswordInput" class="form-label">Contraseña</label>
    </div>

    
<div class="form-floating">
      <input type="text" class="form-control" id="UsersInput" name="name" required autocomplete="disabled" placeholder="Password">
      <label for="UsersInput" class="form-label">Nombre</label>
    </div>

    <div class="checkbox mb-3">
      <label>
        <input type="checkbox" value="remember-me"> Mantener sesion iniciada
      </label>
    </div>

    <button class="w-100 btn btn-lg btn-primary" type="submit">Iniciar sesion</button>

    
    <p class="mt-5 mb-3 text-muted">&copy; Esto es un proyecto estudiantil no una pagina real</p>
  </form>
</main>


    
  </body>
</html>
<?php /**PATH C:\xampp\htdocs\Serv_web\resources\views/sign-in/iniciosesion.blade.php ENDPATH**/ ?>