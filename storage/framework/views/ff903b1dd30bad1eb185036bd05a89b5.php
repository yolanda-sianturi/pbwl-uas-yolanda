
<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h3>EDIT DATA TRANSAKSI</h3>
            </div>
            <div class="card-body">
                <form action="<?php echo e(url('/transaksi/' .$row->transaksi_id)); ?>" method="post">
                    <?php echo method_field('PATCH'); ?>
                    <?php echo csrf_field(); ?>
                    <div class="mb-3">
                        <label for="">NAMA KATEGORI</label>
                        <select name="transaksi_id_kategori" id="" class="form-control">
                            <option value="">---Silahkan Pilih---</option>
                            <?php $__currentLoopData = $kategori; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ktg): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($ktg->kategori_id); ?>"><?php echo e($ktg->kategori_nama); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>    
                    </div>
                    <div class="mb-3">
                        <label for="">NAMA CUSTOMER</label>
                        <select name="transaksi_id_customer" id="" class="form-control">
                            <option value="">---Silahkan Pilih---</option>
                            <?php $__currentLoopData = $customer; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cus): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($cus->customer_id); ?>"><?php echo e($cus->customer_nama); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>    
                    </div>
                    <div class="mb-3">
                        <label for="">TANGGAL</label>
                        <input type="date" name="transaksi_tgl_booking" class="form-control" value="<?php echo e($row->transaksi_tgl_booking); ?>">
                    </div>
                    <div class="mb-3">
                        <label for="">HARGA</label>
                        <input type="text" name="transaksi_harga" class="form-control" value="<?php echo e($row->transaksi_harga); ?>">
                    </div>
                    <div class="mb-3">
                        <label for="">JUMLAH BAYAR</label>
                        <input type="text" name="transaksi_jumlah_bayar" class="form-control" value="<?php echo e($row->transaksi_jumlah_bayar); ?>">
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
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\pbwl-uas-yolanda\resources\views/transaksi/edit.blade.php ENDPATH**/ ?>