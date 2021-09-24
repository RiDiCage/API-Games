<?php $__env->startSection('content'); ?>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        Add Category:
                        <span class="float-right">
                            <a href="<?php echo e(route('category.index')); ?>" role="button" class="btn btn-danger">
                                Back to Categories
                            </a>
                        </span>
                    </div>
                    <?php echo Form::open(['route' => ['category.store'], 'method' => 'POST']); ?>

                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                                <?php echo Form::label('name', 'Name'); ?>

                                <?php echo Form::text('name', old('name'), ['class' => 'form-control']); ?>

                            </div>
                        </div>
                    </div>
                    <div class="card footer">
                        <?php echo Form::submit('Save', ['class' => 'btn btn-success']); ?>

                    </div>
                    <?php echo Form::close(); ?>

                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\rvdkooij\Projects\Laravel\test2\resources\views/category/add.blade.php ENDPATH**/ ?>