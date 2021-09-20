<?php $__env->startSection('content'); ?>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        Categories:
                        <span class="float-right">
                            <a href="<?php echo e(route('game.index')); ?>" role="button" class="btn btn-danger">Back to Games</a>
                            <a href="<?php echo e(route('category.add')); ?>" role="button" class="btn btn-warning">Add Category</a>
                        </span>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Edit or Delete Category</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php $__currentLoopData = $Categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($category->name); ?></td>
                                    <td><a href="<?php echo e(route('category.show', $category->id)); ?>" role="button" class="btn btn-success">Show</a></td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\rvdkooij\Projects\Laravel\API-games\resources\views/category/index.blade.php ENDPATH**/ ?>