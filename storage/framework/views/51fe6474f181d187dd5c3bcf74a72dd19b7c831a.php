<?php $__env->startSection('content'); ?>
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">User: <?php echo e(ucfirst($user->name)); ?>

                    <span class="float-right">
                        <a href="<?php echo e(route('user.index', $user)); ?>" role="button" class="btn btn-danger">Back to Users</a>
                    </span>
                </div>
                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Games</th>
                            <th>Created at</th>
                            <th>Edit User</th>
                            <th>Delete User</th>
                        </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><?php echo e($user->name); ?></td>
                                <td><a href="mailto:<?php echo e($user->email); ?>"><?php echo e($user->email); ?></a></td>

                                <td><?php echo e($user->games->count()); ?></td>

                                <td title="<?php echo e($user->created_at); ?>"><?php echo e($user->created_at->diffForHumans()); ?></td>
                                <td><a href="<?php echo e(route('user.edit', $user->id)); ?>" role="button" class="btn btn-warning">Edit</a></td>

                                <td>
                                    <a class="btn btn-danger" role="button" href="#"
                                       onclick="event.preventDefault();
                                                document.getElementById('delete-form').submit();">
                                        Delete
                                    </a>

                                    <form id="delete-form" action="<?php echo e(route('user.destroy', $user->id)); ?>" method="POST" class="d-none">
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

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\rvdkooij\Projects\Laravel\test2\resources\views/user/show.blade.php ENDPATH**/ ?>