<?php $__env->startSection('content'); ?>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        Game: <?php echo e(ucfirst($game->name)); ?>

                        <span class="float-right">
                            <a href="<?php echo e(route('game.show', $game->id)); ?>" role="button" class="btn btn-danger">
                                Back to <?php echo e(ucfirst($game->name)); ?>

                            </a>
                        </span>
                    </div>
                    <?php echo Form::model($game, ['route' => ['game.update', $game->id], 'method' => 'PUT']); ?>

                    <div class="card-body">
                        <div class="row">
                            <div class="col-4">
                                <?php echo Form::label('name', 'Name'); ?>

                                <?php echo Form::text('name', old('name'), ['class' => 'form-control']); ?>

                            </div>

                            <div class="col-4">
                                <?php echo Form::label('description', 'Description'); ?>

                                <?php echo Form::text('description', old('description'), ['class' => 'form-control']); ?>

                            </div>

                            <div class="col-4">
                                <?php echo Form::label('release_at', 'Release date'); ?>

                                <?php echo Form::date('release_at', old('release'), ['class' => 'form-control']); ?>

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <?php echo Form::label('categories[]', 'Categories'); ?>


                            </div>
                            <?php if($categories): ?>
                                <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php $trueFalse = false ?>

                                    <?php if($game->categories->contains($key)): ?>
                                        <?php $trueFalse = true ?>
                                    <?php endif; ?>
                                    <div class="col-6">
                                        <?php echo Form::checkbox("categories[$key]", $category, $trueFalse); ?>

                                        <?php echo Form::label("categories[$key]", $category); ?>

                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php endif; ?>
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

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\rvdkooij\Projects\Laravel\test2\resources\views/game/edit.blade.php ENDPATH**/ ?>