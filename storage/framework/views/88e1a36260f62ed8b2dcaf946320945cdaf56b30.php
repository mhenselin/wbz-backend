<section class="container-fluid">
    <div class="row">
        <figure id="logo" class="col-2">
            <img src="/img/layout/wbz-logo-weiss.svg" alt="Logo Walter Böthel Zahntechnik" class="max-w-xs lg:max-w-300">
        </figure>
        <div class="col-8"></div>
        <?php if(auth()->guard()->guest()): ?>
        <?php else: ?>
            <div class="col">
                <a href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="btn btn-primary">
                    <?php echo e(__('LOGOUT')); ?>

                </a>
                <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                    <?php echo csrf_field(); ?>
                </form>
            </div>
            <?php endif; ?>
    </div>
</section><?php /**PATH C:\xampp\htdocs\kunden\wbz_backend\resources\views/layouts/header.blade.php ENDPATH**/ ?>