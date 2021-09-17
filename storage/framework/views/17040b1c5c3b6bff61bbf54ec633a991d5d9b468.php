<?php $__env->startSection('content'); ?>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        Games:
                        <span class="float-right">
                            <a href="<?php echo e(route('user.index')); ?>" role="button" class="btn btn-danger">Back to Users</a>
                            <a href="<?php echo e(route('game.add')); ?>" role="button" class="btn btn-warning">Add Game</a>
                            <a href="<?php echo e(route('category.index')); ?>" role="button" class="btn btn-warning">Categories</a>
                        </span>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Description</th>
                                    <th>Released at</th>
                                    <th>Link</th>
                                    <th>Info Game</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php $__currentLoopData = $games; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $game): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($game->name); ?></td>
                                    <td><?php echo e($game->description); ?></td>
                                    <td><?php echo e($game->release_at); ?></td>
                                    <td>
                                        <?php if(!\Illuminate\Support\Facades\Auth::user()->games->contains($game->id)): ?>
                                            <a href="#" class="btn btn-success" role="button"
                                               onclick="event.preventDefault();
                                                   document.getElementById('addGame-<?php echo e($game->id); ?>').submit();">+</a>

                                            <form id='addGame-<?php echo e($game->id); ?>' action="<?php echo e(route('game.addLink', $game->id)); ?>" method="POST" class="d-none">
                                                <?php echo csrf_field(); ?>
                                            </form>
                                        <?php else: ?>
                                            <a href="#" class="btn btn-danger" role="button"
                                               onclick="event.preventDefault();
                                                   document.getElementById('removeGame-<?php echo e($game->id); ?>').submit();">-</a>

                                            <form id='removeGame-<?php echo e($game->id); ?>' action="<?php echo e(route('game.removeLink', $game->id)); ?>" method="POST" class="d-none">
                                                <?php echo csrf_field(); ?>
                                            </form>
                                        <?php endif; ?>
                                    </td>
                                    <td><a href="<?php echo e(route('game.show', $game->id)); ?>" role="button" class="btn btn-success">Show</a></td>

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

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\rvdkooij\Projects\Laravel\API-games\resources\views/game/index.blade.php ENDPATH**/ ?>