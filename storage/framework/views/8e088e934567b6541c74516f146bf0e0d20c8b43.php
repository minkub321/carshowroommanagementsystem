
<section class="feature-car white-bg page-section-ptb">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
            <div class="section-title">
    <span>ดูรถยนต์ล่าสุดของเรา</span>
    <h2>รถแนะนำ</h2>
    <div class="separator"></div>
</div>

            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="owl-carousel owl-theme" data-nav-arrow="true" data-items="4" data-md-items="4"
                    data-sm-items="2" data-xs-items="1" data-space="15">
                    <?php $__currentLoopData = $cars; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $car): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="item">
                        <div class="car-item gray-bg text-center">
                            <div class="car-image">
                                <img class="img-fluid" src="<?php echo e(asset('images/'.$car['images'][0])); ?>" alt="">
                                <div class="car-overlay-banner">
                                    <ul>
                                        <li><a href="<?php echo e(route('cars.show', $car['id'])); ?>"><i class="fa fa-link"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="car-list">
                                <ul class="list-inline">
                                    <li><i class="fa fa-registered"></i> <?php echo e($car['registration_date']); ?></li>
                                    <li><i class="fa fa-cog"></i> <?php echo e($car['transmission']); ?> </li>
                                    <li><i class="fa fa-dashboard"></i> <?php echo e($car['mileage']); ?></li>
                                </ul>
                            </div>
                            <div class="car-content py-5">
                                <a href="<?php echo e(route('cars.show', $car['id'])); ?>"><?php echo e($car['name']); ?></a>
                                <div class="separator"></div>
                                <div class="price">
                                    <span class="new-price">$<?php echo e($car['price']); ?> </span>
                                </div>
                            </div>
                        </div>
                    </div>
                        
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </div>
    </div>
</section><?php /**PATH C:\Laravel\www\CSMS-main\resources\views/livewire/car-slider.blade.php ENDPATH**/ ?>