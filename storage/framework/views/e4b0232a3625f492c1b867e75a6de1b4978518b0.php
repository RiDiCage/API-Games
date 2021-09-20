<?php $__env->startSection('content'); ?>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        Category: <?php echo e(ucfirst($category->name)); ?>

                        <span class="float-right">
                            <a href="<?php echo e(route('category.show', $category->id)); ?>" role="button" class="btn btn-danger">
                                Back to <?php echo e(ucfirst($category->name)); ?>

                            </a>
                        </span>
                    </div>
                    <?php echo Form::model($category, ['route' => ['category.update', $category->id], 'method' => 'PUT']); ?>

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

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\rvdkooij\Projects\Laravel\API-games\resources\views/category/edit.blade.php ENDPATH**/ ?>