<?php if (isset($component)) { $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\AppLayout::class, []); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
    <section class="car-details page-section-ptb">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <h3><?php echo e($car['name']); ?> </h3>
                </div>
                <div class="col-md-3">
                    <div class="car-price text-md-right">
                        <strong><?php echo e(number_format($car['price'])); ?> บาท</strong>
                        <span>รวมภาษีและค่าธรรมเนียม</span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="slider-slick">
                        <div class="slider slider-for detail-big-car-gallery">
                            <?php $__currentLoopData = $car['images']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <img class="img-fluid" src="<?php echo e(asset('images/'.$image)); ?>" alt="<?php echo e($car['name']); ?>">
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="car-details-sidebar">
                        <div class="details-block details-weight">
                            <h5>รายละเอียด</h5>
                            <ul>
                                <li> <span>ยี่ห้อ</span> <strong class="text-right"><?php echo e($car['make']); ?></strong></li>
                                <li> <span>รุ่น</span> <strong class="text-right"><?php echo e($car['model']); ?></strong></li>
                                <li> <span>ปีที่จดทะเบียน</span> <strong class="text-right"><?php echo e($car['registration_date']); ?></strong></li>
                                <li> <span>เลขไมล์</span> <strong class="text-right"><?php echo e($car['mileage']); ?> กม.</strong></li>
                                <li> <span>สภาพ</span> <strong class="text-right"><?php echo e($car['condition']); ?></strong></li>
                                <li> <span>สีภายนอก</span> <strong class="text-right"><?php echo e($car['exterior_color']); ?></strong></li>
                                <li> <span>สีภายใน</span> <strong class="text-right"><?php echo e($car['interior_color']); ?></strong></li>
                                <li> <span>ระบบขับเคลื่อน</span> <strong class="text-right"><?php echo e($car['drivetrain']); ?></strong></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-9 col-md-9  col-sm-9">
                    <div id="tabs">
                        <ul class="tabs">
                            <li data-tabs="tab1" class="active"> <span aria-hidden="true" class="icon-diamond"></span>
                                ข้อมูลทั่วไป</li>
                        </ul>
                        <div id="tab1" class="tabcontent">
                            <h6>รายละเอียดรถ</h6>
                            <p>
                                <?php echo e($car['description']); ?>

                            </p>
                        </div>
                    </div>
                    <div class="extra-feature">
                        <h6>คุณสมบัติเพิ่มเติม</h6>
                        <div class="row">
                            <div class="col-md-4">
                                <ul class="list-style-1">
                                    <?php $__currentLoopData = $car['features']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $feature): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li><i class="fa fa-check"></i> <?php echo e($feature); ?></li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?>
<?php /**PATH C:\Laravel\www\CSMS-main\resources\views/components/car-details.blade.php ENDPATH**/ ?>