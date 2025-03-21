<?php if (isset($component)) { $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\AppLayout::class, []); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
    <section class="login-form page-section-ptb">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title">
                        <span>Log in with your credentials </span>
                        <h2>Admin Login</h2>
                        <div class="separator"></div>
                    </div>
                </div>
            </div>
            <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'jetstream::components.validation-errors','data' => ['class' => 'mb-4']]); ?>
<?php $component->withName('jet-validation-errors'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'mb-4']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>

            <?php if(session('status')): ?>
            <div class="mb-4 font-medium text-sm text-green-600">
                <?php echo e(session('status')); ?>

            </div>
            <?php endif; ?>
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-12">
                    <div class="gray-form clearfix">
                        <form method="POST" action="<?php echo e(route('login')); ?>">
                            <?php echo csrf_field(); ?>
                            <div class="form-group">
                                <label for="email">Email* </label>
                                <input id="email" class="form-control" type="email" name="email" :value="old('email')" required autofocus placeholder="Entre Email">
                            </div>
                            <div class="form-group">
                                <label for="Password">Password* </label>
                                <input id="Password" class="form-control" type="password" name="password" required autocomplete="current-password" placeholder="Password">
                            </div>
                            <div class="form-group">
                                <div class="remember-checkbox mb-4">
                                    <input type="checkbox" id="one" name="remember">
                                    <label for="one"> Remember me</label>
                                    <?php if(Route::has('password.request')): ?>
                                    <a class="float-right" href="<?php echo e(route('password.request')); ?>">
                                        Forgot your password?
                                    </a>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <button type="submit" class="button red"> Log in </a>
                        </form>
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
<?php /**PATH C:\Laravel\www\CSMS-main\resources\views/auth/login.blade.php ENDPATH**/ ?>