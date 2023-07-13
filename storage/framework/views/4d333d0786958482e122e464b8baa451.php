
<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h3>TAMBAH DATA PELANGGAN</h3>
            </div>
            <div class="card-body">
                <form action="<?php echo e(url('/pelanggan')); ?>" method="post">
                    <?php echo csrf_field(); ?>
                    <div class="mb-3">
                        <label for="">NAMA OBAT</label>
                        <select name="pelanggan_id_obat" id="" class="form-control">
                            <option value="">---Silahkan Pilih---</option>
                            <?php $__currentLoopData = $obat; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $obt): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($obt->obat_id); ?>"><?php echo e($obt->obat_nama); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>    
                    </div>
                    <div class="mb-3">
                        <label for="">NAMA</label>
                        <input type="text" name="pelanggan_nama" class="form-control" placeholder="Nama">
                    </div>
                    <div class="mb-3">
                        <label for="">Alamat</label>
                        <input type="text" name="pelanggan_alamat" class="form-control" placeholder="Alamat">
                    </div>
                    <div class="mb-3">
                        <label for="">Nomor Hp</label>
                        <input type="text" name="pelanggan_hp" class="form-control" placeholder="Nomor Hp">
                    </div>
                    <div class="mb-3">
                        <input class="btn btn-primary" type="submit" name="" id="" value="SIMPAN">
                        <input type="button" class="btn btn-danger" value="BATAL" onclick="history.go(-1);" >
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\pbwl-uas-juar\resources\views/pelanggan/create.blade.php ENDPATH**/ ?>