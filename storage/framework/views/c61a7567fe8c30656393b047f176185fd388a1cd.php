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
} elseif ($_instance->childHasBeenRendered('ToH5jlp')) {
    $componentId = $_instance->getRenderedChildComponentId('ToH5jlp');
    $componentTag = $_instance->getRenderedChildComponentTagName('ToH5jlp');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('ToH5jlp');
} else {
    $response = \Livewire\Livewire::mount('admin-navbar');
    $html = $response->html();
    $_instance->logRenderedChild('ToH5jlp', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>

            <div class="container-fluid">

                <h1 class="h3 mb-2 text-gray-800">รายละเอียดรถยนต์</h1>
                
                <?php if(session('success')): ?>
                <div class="alert alert-success" role="alert">
                    <i class="fas fa-check"></i> <?php echo e(session('success')); ?>

                </div>
                <?php endif; ?>
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">อัปเดตรายละเอียดรถยนต์</h6>
                    </div>
                    <div class="card-body">
                        <form class="user" action="<?php echo e(route('car.update', $car['id'])); ?>" method="post" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('PUT'); ?>

                            <div class="form-group">
                                <label for="image" class="form-label">รูปภาพรถยนต์:</label>
                                <input name="image[]" type="file" class="form-control" id="formFileMultiple" multiple>
                            </div>
                            <div class="form-group">
                                <label for="name" class="form-label">ชื่อรถ:</label>
                                <input name="name" value="<?php echo e($car['name']); ?>" type="text" class="form-control form-control-user" placeholder="กรอกชื่อรถ...">
                            </div>
                            <div class="form-group">
                                <label for="price" class="form-label">ราคา:</label>
                                <input name="price" value="<?php echo e($car['price']); ?>" type="number" step="any" class="form-control form-control-user" placeholder="กรอกราคา...">
                            </div>
                            <div class="form-group">
                                <label for="brand" class="form-label">ยี่ห้อ:</label>
                                <input name="make" value="<?php echo e($car['make']); ?>" type="text" class="form-control form-control-user" placeholder="กรอกยี่ห้อรถ...">
                            </div>
                            <div class="form-group">
                                <label for="model" class="form-label">รุ่น:</label>
                                <input name="model" value="<?php echo e($car['model']); ?>" type="text" class="form-control form-control-user" placeholder="กรอกรุ่นรถ...">
                            </div>
                            <div class="form-group">
                                <label for="registration_date" class="form-label">วันที่จดทะเบียน:</label>
                                <input name="registration_date" value="<?php echo e($car['registration_date']); ?>" type="date" class="form-control form-control-user">
                            </div>
                            <div class="form-group">
                                <label for="mileage" class="form-label">เลขไมล์:</label>
                                <input name="mileage" value="<?php echo e($car['mileage']); ?>" type="text" class="form-control form-control-user" placeholder="กรอกเลขไมล์...">
                            </div>
                            <div class="form-group">
                                <label for="condition" class="form-label">สภาพรถ:</label>
                                <input name="condition" value="<?php echo e($car['condition']); ?>" type="text" class="form-control form-control-user" placeholder="กรอกสภาพรถ...">
                            </div>
                            <div class="form-group">
                                <label for="exterior_color" class="form-label">สีภายนอก:</label>
                                <input name="exterior_color" value="<?php echo e($car['exterior_color']); ?>" type="text" class="form-control form-control-user" placeholder="กรอกสีภายนอก...">
                            </div>
                            <div class="form-group">
                                <label for="interior_color" class="form-label">สีภายใน:</label>
                                <input name="interior_color" value="<?php echo e($car['interior_color']); ?>" type="text" class="form-control form-control-user" placeholder="กรอกสีภายใน...">
                            </div>
                            <div class="form-group">
                                <label for="transmission" class="form-label">ระบบเกียร์:</label>
                                <input name="transmission" value="<?php echo e($car['transmission']); ?>" type="text" class="form-control form-control-user" placeholder="กรอกประเภทเกียร์...">
                            </div>
                            <div class="form-group">
                                <label for="engine_size" class="form-label">ขนาดเครื่องยนต์:</label>
                                <input name="engine_size" value="<?php echo e($car['engine_size']); ?>" type="text" class="form-control form-control-user" placeholder="กรอกขนาดเครื่องยนต์...">
                            </div>
                            <div class="form-group">
                                <label for="drivetrain" class="form-label">ระบบขับเคลื่อน:</label>
                                <input name="drivetrain" value="<?php echo e($car['drivetrain']); ?>" type="text" class="form-control form-control-user" placeholder="กรอกระบบขับเคลื่อน...">
                            </div>
                            <div class="form-group">
                                <label for="description" class="form-label">รายละเอียดเพิ่มเติม:</label>
                                <textarea name="description" type="text" class="form-control form-control-user" placeholder="กรอกรายละเอียดรถ..."><?php echo e($car['description']); ?></textarea>
                            </div>
                            <div class="form-group">
                                <label for="features" class="form-label">คุณสมบัติของรถ:</label>
                                <input name="features" value="<?php echo e(implode(",",$car['features'])); ?>" type="text" class="form-control form-control-user" placeholder="กรอกคุณสมบัติของรถ..." data-role="tagsinput" />
                            </div>
                            <button class="btn btn-primary btn-user btn-block">
                                อัปเดตรถยนต์
                            </button>
                        </form>

                    </div>
                </div>

            </div>
            <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('admin-footer')->html();
} elseif ($_instance->childHasBeenRendered('4gKuNcI')) {
    $componentId = $_instance->getRenderedChildComponentId('4gKuNcI');
    $componentTag = $_instance->getRenderedChildComponentTagName('4gKuNcI');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('4gKuNcI');
} else {
    $response = \Livewire\Livewire::mount('admin-footer');
    $html = $response->html();
    $_instance->logRenderedChild('4gKuNcI', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
        </div>
    </div>
    <style>
        .form-control{
            border-radius: 10px !important;
        }
        .bootstrap-tagsinput{
            display: block;
            width: 100%;
            font-weight: 400;
            background-color: #fff;
            border: 1px solid #d1d3e2;
            transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
            font-size: .8rem;
            border-radius: 10px;
            padding: .8rem 1rem;
        }

        .bootstrap-tagsinput:focus-within{
            background-color:#fff;
            border-color:#bac8f3;
            outline:0;
            box-shadow:0 0 0 .2rem rgba(78,115,223,.25)
        }

        .bootstrap-tagsinput .tag {
            background: #4e73df;
            border: 1px solid #4e73df;
            padding: 0 6px;
            margin-right: 2px;
            color: white;
            border-radius: 4px;
        }
        
    </style>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalbacdc7ee2ae68d90ee6340a54a5e36f99d0a3040)): ?>
<?php $component = $__componentOriginalbacdc7ee2ae68d90ee6340a54a5e36f99d0a3040; ?>
<?php unset($__componentOriginalbacdc7ee2ae68d90ee6340a54a5e36f99d0a3040); ?>
<?php endif; ?>
<?php /**PATH C:\Laravel\www\CSMS-main\resources\views/components/edit-car.blade.php ENDPATH**/ ?>