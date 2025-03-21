<?php if (isset($component)) { $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\AppLayout::class, []); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
    <section class="welcome-4 page-section-ptb white-bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <div class="section-title">
                        <span>ยินดีต้อนรับสู่</span>
                        <h1>Cardealer ออนไลน์</h1>
                        <div class="separator"></div>
                        <p>ยินดีต้อนรับสู่แพลตฟอร์มของเรา ที่ซึ่งคุณสามารถค้นหารถยนต์ที่เหมาะสมกับคุณได้อย่างง่ายดาย
                            เรามีรถยนต์คุณภาพดีหลากหลายรุ่น พร้อมข้อมูลรายละเอียดครบถ้วน ให้คุณเลือกซื้อได้อย่างมั่นใจ</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="owl-carousel owl-theme" data-nav-arrow="true" data-items="1" data-md-items="1"
                        data-sm-items="1" data-xs-items="1" data-space="0">
                        <div class="item">
                            <img class="img-fluid" src="<?php echo e(asset('images/15.jpg')); ?>" alt="รูปภาพรถยนต์">
                        </div>
                        <div class="item">
                            <img class="img-fluid" src="<?php echo e(asset('images/16.jpg')); ?>" alt="รูปภาพรถยนต์">
                        </div>
                        <div class="item">
                            <img class="img-fluid" src="<?php echo e(asset('images/17.jpg')); ?>" alt="รูปภาพรถยนต์">
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <p>เรามีรถยนต์ให้เลือกมากมาย ทั้งรถใหม่และรถมือสอง ที่ผ่านการตรวจสอบคุณภาพ
                        เพื่อให้คุณมั่นใจในทุกการซื้อขาย</p>
                    <p>แพลตฟอร์มของเราออกแบบมาเพื่อช่วยให้คุณสามารถค้นหารถยนต์ที่ตรงกับความต้องการของคุณได้อย่างง่ายดาย
                        พร้อมทั้งข้อมูลรายละเอียดที่ครบถ้วน</p>
                    <p>เข้าชมเว็บไซต์ของเราเพื่อสำรวจรุ่นรถยนต์ที่น่าสนใจ และค้นหารถในฝันของคุณได้ที่นี่!</p>
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
<?php /**PATH C:\Laravel\www\CSMS-main\resources\views/components/about-us.blade.php ENDPATH**/ ?>