
<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h3>EDIT DATA KATEGORI</h3>
            </div>
            <div class="card-body">
                <form action="<?php echo e(url('/kategori/' .$row->kategori_id)); ?>" method="post">
                    <?php echo method_field('PATCH'); ?>
                    <?php echo csrf_field(); ?>
                    <div class="mb-3">
                        <label for="">NAMA KATEGORI</label>
                        <input type="text" name="kategori_nama" class="form-control" value="<?php echo e($row->kategori_nama); ?>">
                    </div>
                    <div class="mb-3">
                        <label for="">HARGA KATEGORI</label>
                        <input type="text" name="kategori_harga" class="form-control" value="<?php echo e($row->kategori_harga); ?>">
                    </div>
                    <div class="mb-3">
                        <input class="btn btn-info" type="submit" name="" id="" value="UPDATE">
                        <input type="button" class="btn btn-danger" value="BATAL" onclick="history.go(-1);" >
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\pbwl-uas-yolanda\resources\views/kategori/edit.blade.php ENDPATH**/ ?>