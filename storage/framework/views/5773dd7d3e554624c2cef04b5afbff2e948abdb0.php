<?php if (isset($component)) { $__componentOriginalbacdc7ee2ae68d90ee6340a54a5e36f99d0a3040 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\AdminLayout::class, []); ?>
<?php $component->withName('admin-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
    <div id="content-wrapper" class="d-flex flex-column">

        <div id="content">

            <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('admin-navbar')->html();
} elseif ($_instance->childHasBeenRendered('UdM4Z6y')) {
    $componentId = $_instance->getRenderedChildComponentId('UdM4Z6y');
    $componentTag = $_instance->getRenderedChildComponentTagName('UdM4Z6y');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('UdM4Z6y');
} else {
    $response = \Livewire\Livewire::mount('admin-navbar');
    $html = $response->html();
    $_instance->logRenderedChild('UdM4Z6y', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>

            <div class="container-fluid">

                <h1 class="h3 mb-2 text-gray-800">แดชบอร์ด</h1>

                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">รถยนต์ในโชว์รูม</h6>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>ชื่อรถ</th>
                                        <th>ราคา</th>
                                        <th>ยี่ห้อ</th>
                                        <th>รุ่น</th>
                                        <th>เลขไมล์</th>
                                        <th>สภาพ</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>ชื่อรถ</th>
                                        <th>ราคา</th>
                                        <th>ยี่ห้อ</th>
                                        <th>รุ่น</th>
                                        <th>เลขไมล์</th>
                                        <th>สภาพ</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    <?php $__currentLoopData = $cars; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $car): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($car['name']); ?></td>
                                        <td><?php echo e(number_format($car['price'])); ?> บาท</td>
                                        <td><?php echo e($car['make']); ?></td>
                                        <td><?php echo e($car['model']); ?></td>
                                        <td><?php echo e($car['mileage']); ?> กม.</td>
                                        <td><?php echo e($car['condition']); ?></td>
                                    </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('admin-footer')->html();
} elseif ($_instance->childHasBeenRendered('NO1396w')) {
    $componentId = $_instance->getRenderedChildComponentId('NO1396w');
    $componentTag = $_instance->getRenderedChildComponentTagName('NO1396w');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('NO1396w');
} else {
    $response = \Livewire\Livewire::mount('admin-footer');
    $html = $response->html();
    $_instance->logRenderedChild('NO1396w', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalbacdc7ee2ae68d90ee6340a54a5e36f99d0a3040)): ?>
<?php $component = $__componentOriginalbacdc7ee2ae68d90ee6340a54a5e36f99d0a3040; ?>
<?php unset($__componentOriginalbacdc7ee2ae68d90ee6340a54a5e36f99d0a3040); ?>
<?php endif; ?>
<?php /**PATH C:\Laravel\www\CSMS-main\resources\views/components/dashboard.blade.php ENDPATH**/ ?>