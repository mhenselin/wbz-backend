<?php $__env->startSection('content'); ?>
    <main id="main" class="container-fluid">
        <div class="calWrapper">
            <h1>TERMINKALENDER</h1>
            <div class="w-11/12 mx-auto mt-4">
                <div id="calendar"></div>
                <?php echo $__env->make('calendar.createEvent', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
        </div>
    </main>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\kunden\wbz_backend\resources\views/home.blade.php ENDPATH**/ ?>