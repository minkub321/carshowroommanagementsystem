<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
        <i class="fa fa-bars"></i>
    </button>

    <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown no-arrow">
            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo e(auth()->user()->name); ?></span>
                <img class="img-profile rounded-circle" src="<?php echo e(auth()->user()->profile_photo_url); ?>"
                    alt="<?php echo e(auth()->user()->name); ?>">
            </a>

            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <form method="POST" action="<?php echo e(route('logout')); ?>">
                    <?php echo csrf_field(); ?>

                    <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                        onclick="event.preventDefault(); this.closest('form').submit();"><i
                            class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                        Log Out
                    </a>
                </form>
            </div>
        </li>
    </ul>
</nav><?php /**PATH C:\Laravel\www\CSMS-main\resources\views/livewire/admin-navbar.blade.php ENDPATH**/ ?>