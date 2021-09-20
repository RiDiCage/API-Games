<?php $__env->startSection('content'); ?>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Game: <?php echo e(ucfirst($game->name)); ?>

                        <span class="float-right">
                            <a href="<?php echo e(route('game.index')); ?>" role="button" class="btn btn-danger">Back to Games</a>
                        </span>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Description</th>
                                    <th>Released at</th>
                                    <th>Edit Game</th>
                                    <th>Delete Game</th>
                                    <th>Force Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><?php echo e($game->name); ?></td>
                                    <td><?php echo e($game->description); ?></a></td>
                                    <td><?php echo e($game->release_at); ?></td>
                                    <td><a href="<?php echo e(route('game.edit', $game->id)); ?>" role="button" class="btn btn-warning">Edit</a></td>
                                    <td>
                                        <a class="btn btn-danger" role="button" href="#"
                                           onclick="event.preventDefault();
                                                    document.getElementById('delete-form').submit();">
                                            Delete
                                        </a>

                                        <form id="delete-form" action="<?php echo e(route('game.delete', $game->id)); ?>" method="POST" class="d-none">
                                            <?php echo csrf_field(); ?>
                                            <?php echo method_field('delete'); ?>
                                        </form>
                                    </td>
                                    <td>
                                        <a class="btn btn-danger" role="button" href="#"
                                           onclick="event.preventDefault();
                                                    document.getElementById('destroy-form').submit();">
                                            Destroy
                                        </a>

                                        <form id="destroy-form" action="<?php echo e(route('game.destroy', $game->id)); ?>" method="POST" class="d-none">
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

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\rvdkooij\Projects\Laravel\API-games\resources\views/game/show.blade.php ENDPATH**/ ?>