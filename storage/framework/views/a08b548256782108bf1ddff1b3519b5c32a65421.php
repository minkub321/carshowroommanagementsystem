<?php if (isset($component)) { $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\AppLayout::class, []); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
    <section class="slider-parallax car-directory-banner bg-overlay-black-70 bg-17">
        <div class="slider-content-middle">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="slider-content text-center">
                            <h2 class="text-white">ค้นหารถที่คุณต้องการ</h2>
                            <h4 class="text-white">จากคอลเลกชันรถยนต์ล่าสุดของเรา</h4>
                        </div>
                    </div>
                </div>
            </div>
    </section>

    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('car-slider')->html();
} elseif ($_instance->childHasBeenRendered('IyKeglM')) {
    $componentId = $_instance->getRenderedChildComponentId('IyKeglM');
    $componentTag = $_instance->getRenderedChildComponentTagName('IyKeglM');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('IyKeglM');
} else {
    $response = \Livewire\Livewire::mount('car-slider');
    $html = $response->html();
    $_instance->logRenderedChild('IyKeglM', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?>
<?php /**PATH C:\Laravel\www\CSMS-main\resources\views/components/home.blade.php ENDPATH**/ ?>