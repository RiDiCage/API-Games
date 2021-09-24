<?php $__env->startSection('content'); ?>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Category: <?php echo e(ucfirst($category->name)); ?>

                        <span class="float-right">
                            <a href="<?php echo e(route('category.index')); ?>" role="button" class="btn btn-danger">Back to Categories</a>
                        </span>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Edit Category</th>
                                    <th>Delete Category</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><?php echo e($category->name); ?></td>
                                    <td><a href="<?php echo e(route('category.edit', $category->id)); ?>" role="button" class="btn btn-warning">Edit</a></td>
                                    <td>
                                        <a class="btn btn-danger" role="button" href="#"
                                           onclick="event.preventDefault();
                                                    document.getElementById('delete-form').submit();">
                                            Delete
                                        </a>

                                        <form id="delete-form" action="<?php echo e(route('category.destroy', $category->id)); ?>" method="POST" class="d-none">
                                            <?php echo csrf_field(); ?>
                                            <?php echo method_field('delete'); ?>
                                        </form>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\rvdkooij\Projects\Laravel\test2\resources\views/category/show.blade.php ENDPATH**/ ?>