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
} elseif ($_instance->childHasBeenRendered('4hqBzXj')) {
    $componentId = $_instance->getRenderedChildComponentId('4hqBzXj');
    $componentTag = $_instance->getRenderedChildComponentTagName('4hqBzXj');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('4hqBzXj');
} else {
    $response = \Livewire\Livewire::mount('admin-navbar');
    $html = $response->html();
    $_instance->logRenderedChild('4hqBzXj', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>

            <div class="container-fluid">

                <h1 class="h3 mb-2 text-gray-800">รายการรถยนต์</h1>

                <?php if(session('success')): ?>
                <div class="alert alert-success" role="alert">
                    <i class="fas fa-check"></i> <?php echo e(session('success')); ?>

                </div>
                <?php endif; ?>
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
                                        <th>การจัดการ</th>
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
                                        <th>การจัดการ</th>
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
                                        <td>
                                            <form class="form-inline" action="<?php echo e(route('car.destroy', $car['id'])); ?>" method="post">
                                                <?php echo csrf_field(); ?>
                                                <?php echo method_field('DELETE'); ?>
                                                <a href="<?php echo e(route('car.edit', $car['id'])); ?>" class="btn btn-warning btn-circle btn-sm">
                                                    <i class="fas fa-edit"></i></i>
                                                </a>
                                                <button type="submit" class="mx-2 btn btn-danger btn-circle btn-sm">
                                                    <i class="fas fa-trash"></i>
                                                </button>
                                            </form>
                                        </td>
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
} elseif ($_instance->childHasBeenRendered('1MSwIPS')) {
    $componentId = $_instance->getRenderedChildComponentId('1MSwIPS');
    $componentTag = $_instance->getRenderedChildComponentTagName('1MSwIPS');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('1MSwIPS');
} else {
    $response = \Livewire\Livewire::mount('admin-footer');
    $html = $response->html();
    $_instance->logRenderedChild('1MSwIPS', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
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
<?php /**PATH C:\Laravel\www\CSMS-main\resources\views/components/car-list.blade.php ENDPATH**/ ?>