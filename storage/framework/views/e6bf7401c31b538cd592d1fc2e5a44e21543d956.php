<?php $__env->startSection('content'); ?>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        Add Game:
                        <span class="float-right">
                            <a href="<?php echo e(route('game.index')); ?>" role="button" class="btn btn-danger">
                                Back to Games
                            </a>
                        </span>
                    </div>
                    <?php echo Form::open(['route' => ['game.store'], 'method' => 'POST']); ?>

                    <div class="card-body">
                        <div class="row">
                            <div class="col-12 col-md-4" style="display:none">
                                <?php echo Form::label('id', 'ID'); ?>

                                <?php echo Form::text('id', old('id'), ['class' => 'form-control']); ?>

                            </div>

                            <div class="col-12 col-md-4">
                                <?php echo Form::label('name', 'Name'); ?>

                                <?php echo Form::text('name', old('name'), ['class' => 'form-control']); ?>

                            </div>

                            <div class="col-12 col-md-4">
                                <?php echo Form::label('description', 'Description'); ?>

                                <?php echo Form::text('description', old('description'), ['class' => 'form-control']); ?>

                            </div>

                            <div class="col-12 col-md-4">
                                <?php echo Form::label('release_at', 'Release date'); ?>

                                <?php echo Form::date('release_at', old('release'), ['class' => 'form-control']); ?>

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <?php echo Form::label('categories[]', 'Categories'); ?>


                            </div>
                            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-4">
                                    <?php echo Form::checkbox("categories[$key]", $category, false); ?>

                                    <?php echo Form::label("categories[$key]", $category); ?>

                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\rvdkooij\Projects\Laravel\test2\resources\views/game/add.blade.php ENDPATH**/ ?>