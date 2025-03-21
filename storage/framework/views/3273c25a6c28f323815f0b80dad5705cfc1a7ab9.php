<?php if (isset($component)) { $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\AppLayout::class, []); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
    <section class="product-listing page-section-ptb">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-8">
                    <?php $__currentLoopData = $cars; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $car): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="car-grid">
                        <div class="row">
                            <div class="col-lg-4 col-md-12">
                                <div class="car-item gray-bg text-center">
                                    <div class="car-image">
                                        <img class="img-fluid" src="<?php echo e(asset('images/'.$car['images'][0])); ?>" alt="<?php echo e($car['name']); ?>">
                                        <div class="car-overlay-banner">
                                            <ul>
                                                <li><a href="<?php echo e(route('cars.show', $car['id'])); ?>"><i class="fa fa-link"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-8 col-md-12">
                                <div class="car-details">
                                    <div class="car-title">
                                        <a href="<?php echo e(route('cars.show', $car['id'])); ?>"><?php echo e($car['name']); ?></a>
                                        <p><?php echo e($car['description']); ?></p>
                                    </div>
                                    <div class="price">
                                        <span class="new-price"><?php echo e(number_format($car['price'])); ?> บาท</span>
                                        <a class="button red float-right" href="<?php echo e(route('cars.show', $car['id'])); ?>">ดูรายละเอียด</a>
                                    </div>
                                    <div class="car-list">
                                        <ul class="list-inline">
                                            <li><i class="fa fa-registered"></i> ปีจดทะเบียน: <?php echo e($car['registration_date']); ?></li>
                                            <li><i class="fa fa-cog"></i> ระบบเกียร์: <?php echo e($car['transmission']); ?> </li>
                                            <li><i class="fa fa-shopping-cart"></i> เลขไมล์: <?php echo e($car['mileage']); ?> กม.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </div>
    </section>
    <style>
        .car-title p {
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
            text-overflow: ellipsis;
        }
    </style>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?>
<?php /**PATH C:\Laravel\www\CSMS-main\resources\views/components/all-cars.blade.php ENDPATH**/ ?>