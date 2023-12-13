<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>

  <link rel="stylesheet" href="<?php echo $__env->yieldContent('css'); ?>">
  <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>

  <?php echo app('Illuminate\Foundation\Vite')('resources/css/app.css'); ?>

</head>
<body>
  
  <?php echo $__env->make('partials.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

  <div class="mt-4">
    <?php echo $__env->yieldContent('containers'); ?>
  </div>

</body>
</html><?php /**PATH C:\laragon\www\satu-quiz\resources\views/layout/main.blade.php ENDPATH**/ ?>