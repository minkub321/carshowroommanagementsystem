<?php if (isset($component)) { $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\AppLayout::class, []); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
    <section class="contact-2 page-section-ptb white-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-12 justify-content-center">
                    <div class="section-title">
                        <span>เรายินดีรับฟังความคิดเห็นของคุณ</span>
                        <h2>ติดต่อเรา!</h2>
                        <div class="separator"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-sm-12 mb-lg-0 mb-1">
                    <div class="gray-form row">
                        <div class="col-md-12">
                            <form class="form-horizontal my-4" action="<?php echo e(route('contact-post')); ?>" id="contactform" role="form" method="POST">
                                <?php echo csrf_field(); ?>

                                <?php if(session('success')): ?>
                                <div class="alert alert-success" role="alert">
                                    <i class="fas fa-check"></i> <?php echo e(session('success')); ?>

                                </div>
                                <?php endif; ?>
                                <div class="contact-form">
                                    <div class="form-group">
                                        <input id="contactform_name" type="text" placeholder="ชื่อ*"
                                            class="form-control" name="name" />
                                    </div>
                                    <div class="form-group">
                                        <input id="contactform_email" type="email" placeholder="อีเมล*"
                                            class="form-control" name="email" />
                                    </div>
                                    <div class="form-group">
                                        <input id="contactform_phone" type="text" placeholder="เบอร์โทร*"
                                            class="form-control" name="phone" />
                                    </div>
                                    <div class="form-group">
                                        <textarea id="contactform_message" class="form-control input-message"
                                            placeholder="ข้อความ*" rows="7" name="message"></textarea>
                                    </div>

                                    <button type="submit" value="Send" class="button red">
                                        ส่งข้อความของคุณ
                                        <i class="fa fa-spinner fa-spin fa-fw btn-loader" style="display: none"></i>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-12">
                    <div class="feature-box-3">
                        <div class="icon">
                            <i class="fa fa-map-marker"></i>
                        </div>
                        <div class="content">
                            <h5>ที่อยู่</h5>
                            <p>ถนน 11, บล็อก E, บานานี, ธากา-1213</p>
                        </div>
                    </div>
                    <div class="feature-box-3">
                        <div class="icon">
                            <i class="fa fa-phone"></i>
                        </div>
                        <div class="content">
                            <h5>โทรศัพท์</h5>
                            <p>(+880) 123 456 7890</p>
                        </div>
                    </div>
                    <div class="feature-box-3">
                        <div class="icon">
                            <i class="fa fa-envelope-o"></i>
                        </div>
                        <div class="content">
                            <h5>อีเมล</h5>
                            <p>admin@gmail.com</p>
                        </div>
                    </div>
                    <div class="opening-hours gray-bg">
                        <h6>เวลาทำการ</h6>
                        <ul class="list-style-none">
                            <li>
                                <strong>วันศุกร์ </strong>
                                <span class="text-red"> ปิดทำการ</span>
                            </li>
                            <li>
                                <strong>เสาร์ - อาทิตย์</strong>
                                <span> 9:00 น. - 21:00 น.</span>
                            </li>
                            <li>
                                <strong>จันทร์ - อังคาร</strong>
                                <span> 9:00 น. - 21:00 น.</span>
                            </li>
                            <li>
                                <strong>พุธ - พฤหัสบดี</strong>
                                <span> 9:00 น. - 21:00 น.</span>
                            </li>
                        </ul>
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
<?php /**PATH C:\Laravel\www\CSMS-main\resources\views/components/contact-us.blade.php ENDPATH**/ ?>