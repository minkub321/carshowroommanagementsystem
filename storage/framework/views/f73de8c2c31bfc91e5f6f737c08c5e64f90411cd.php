<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

        <title>Car Showroom Management System</title>

        <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/bootstrap.min.css')); ?>" />
        <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/flaticon.css')); ?>" />
        <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/mega-menu/mega_menu.css')); ?>" />
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/owl-carousel/owl.carousel.css')); ?>" />
        <link rel="stylesheet" type="text/css" href="<?php echo e(asset('revolution/css/settings.css')); ?>">
        <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/animate.min.css')); ?>">
        <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/style.css')); ?>" />
        <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/responsive.css')); ?>" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <?php echo \Livewire\Livewire::styles(); ?>

    </head>
    <body>
        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('header')->html();
} elseif ($_instance->childHasBeenRendered('azEgaF1')) {
    $componentId = $_instance->getRenderedChildComponentId('azEgaF1');
    $componentTag = $_instance->getRenderedChildComponentTagName('azEgaF1');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('azEgaF1');
} else {
    $response = \Livewire\Livewire::mount('header');
    $html = $response->html();
    $_instance->logRenderedChild('azEgaF1', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>

        <?php echo e($slot); ?>


        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('footer')->html();
} elseif ($_instance->childHasBeenRendered('1AycCxw')) {
    $componentId = $_instance->getRenderedChildComponentId('1AycCxw');
    $componentTag = $_instance->getRenderedChildComponentTagName('1AycCxw');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('1AycCxw');
} else {
    $response = \Livewire\Livewire::mount('footer');
    $html = $response->html();
    $_instance->logRenderedChild('1AycCxw', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>

        <?php echo \Livewire\Livewire::scripts(); ?>

        <script type="text/javascript" src="<?php echo e(asset('js/jquery-3.3.1.min.js')); ?>"></script>
        <script type="text/javascript" src="<?php echo e(asset('js/popper.js')); ?>"></script>
        <script type="text/javascript" src="<?php echo e(asset('js/bootstrap.min.js')); ?>"></script>
        <script type="text/javascript" src="<?php echo e(asset('js/mega-menu/mega_menu.js')); ?>"></script>
        <script type="text/javascript" src="<?php echo e(asset('js/jquery.appear.js')); ?>"></script>
        <script type="text/javascript" src="<?php echo e(asset('js/counter/jquery.countTo.js')); ?>"></script>
        <script type="text/javascript" src="<?php echo e(asset('js/owl-carousel/owl.carousel.min.js')); ?>"></script>
        <script type="text/javascript" src="<?php echo e(asset('js/select/jquery-select.js')); ?>"></script>
        <script type="text/javascript" src="<?php echo e(asset('js/magnific-popup/jquery.magnific-popup.min.js')); ?>"></script>
        <script type="text/javascript" src="<?php echo e(asset('revolution/js/jquery.themepunch.tools.min.js')); ?>"></script>
        <script type="text/javascript" src="<?php echo e(asset('revolution/js/jquery.themepunch.revolution.min.js')); ?>"></script>
        <script type="text/javascript" src="<?php echo e(asset('js/custom.js')); ?>"></script>
    </body>
</html>
<?php /**PATH C:\Laravel\www\CSMS-main\resources\views/layouts/app.blade.php ENDPATH**/ ?>