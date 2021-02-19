<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <?php echo $__env->make('includes.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </head>
    <body class="antialiased">
        <div
            id="app" 
            style="position: relative; min-height: 100vh; background-image: url('/assets/images/black_camo_image1.jpg'); background-size: cover;"
        >
            <?php echo $__env->yieldContent('layout'); ?>
        </div>
    </body>
    <?php echo $__env->make('includes.scripts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</html>
<?php /**PATH C:\Users\User\Desktop\Gruppa-vostok-platform\resources\views/app.blade.php ENDPATH**/ ?>