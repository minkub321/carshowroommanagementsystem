
<header id="header" class="topbar-dark header-dark">
    <div class="topbar">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-5 col-xs-12">
                    <div class="topbar-left text-lg-left text-center">
                        <ul class="list-inline">
                            <li>
                                <i class="fa fa-envelope"> </i>
                                test@gmail.com
                            </li>
                            <li>
                                <i class="fa fa-phone"></i>
                                โทร: (+880) 123 456 7890
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-7 col-xs-12 text-lg-right text-center">
                    <div class="topbar-profile">
                        <ul class="list-inline">
                            <li>
                                <?php if(auth()->guard()->check()): ?>
                                <form method="POST" action="<?php echo e(route('logout')); ?>">
                                    <?php echo csrf_field(); ?>
                
                                    <a href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault(); this.closest('form').submit();"><i class="fas fa-sign-out-alt"></i>
                                        ออกจากระบบ
                                    </a>
                                </form>
                                <?php else: ?>
                                <a href="<?php echo e(route('login')); ?>"><i class="fa fa-user"></i> 
                                    เข้าสู่ระบบ
                                </a>
                                <?php endif; ?>
                            </li>
                        </ul>
                    </div>
                    <div class="topbar-right">
                        <ul class="list-inline">
                            <li>
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fab fa-youtube"></i
                                ></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="menu">
        <nav id="menu" class="mega-menu">
            <section class="menu-list-items">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <ul class="menu-logo">
                                <li>
                                    <a href="<?php echo e(route('home')); ?>">
                                    CSMS
                                    </a>
                                </li>
                            </ul>
                            <ul class="menu-links float-right">
                                <li class="<?php echo e(request()->routeIs('home') ? 'active':''); ?>">
                                    <a href="<?php echo e(route('home')); ?>">หน้าแรก</a>
                                </li>
                                <li class="<?php echo e(request()->routeIs('about-us') ? 'active':''); ?>">
                                    <a href="<?php echo e(route('about-us')); ?>">เกี่ยวกับเรา</a>
                                </li>
                                <li class="<?php echo e(request()->routeIs('cars.index') ? 'active':''); ?>">
                                    <a href="<?php echo e(route('cars.index')); ?>">รายการรถยนต์</a>
                                </li>
                                <li class="<?php echo e(request()->routeIs('contact-us') ? 'active':''); ?>">
                                    <a href="<?php echo e(route('contact-us')); ?>">ติดต่อเรา</a>
                                </li>
                                <?php if(auth()->guard()->check()): ?>
                                <li>
                                    <a href="<?php echo e(route('dashboard')); ?>">แดชบอร์ด</a>
                                </li>
                                <?php endif; ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
        </nav>
    </div>
</header>
<?php /**PATH C:\Laravel\www\CSMS-main\resources\views/livewire/header.blade.php ENDPATH**/ ?>