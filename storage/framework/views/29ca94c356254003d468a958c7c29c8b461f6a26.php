<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Acme</title>


    </head>
    <body>
      <?php echo $__env->yieldContent('content'); ?>

      <?php echo $__env->make('inc.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    </body>
</html>
<?php /**PATH /opt/lampp/htdocs/basicwebsite/resources/views/layouts/app.blade.php ENDPATH**/ ?>