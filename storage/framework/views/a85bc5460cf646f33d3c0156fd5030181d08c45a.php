<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Car Showroom Management System - Admin Dashboard</title>
    <style>
    @import  url('https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

body{
    font-family:Kanit;
}
</style>
    <link href="<?php echo e(asset('css/sb-admin-2.min.css')); ?>" rel="stylesheet">
    <?php echo \Livewire\Livewire::styles(); ?>

</head>

<body id="page-top">

    <div id="wrapper">
        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('admin-sidebar')->html();
} elseif ($_instance->childHasBeenRendered('bWZII4j')) {
    $componentId = $_instance->getRenderedChildComponentId('bWZII4j');
    $componentTag = $_instance->getRenderedChildComponentTagName('bWZII4j');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('bWZII4j');
} else {
    $response = \Livewire\Livewire::mount('admin-sidebar');
    $html = $response->html();
    $_instance->logRenderedChild('bWZII4j', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>

        <?php echo e($slot); ?>


    </div>

    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>


    <?php echo \Livewire\Livewire::scripts(); ?>

    <script src="<?php echo e(asset('js/jquery.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/bootstrap.bundle.min.js')); ?>"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="<?php echo e(asset('js/jquery.easing.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/sb-admin-2.min.js')); ?>"></script>
    <script src='https://bootstrap-tagsinput.github.io/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js'></script>
</body>

</html><?php /**PATH C:\Laravel\www\CSMS-main\resources\views/layouts/admin.blade.php ENDPATH**/ ?>