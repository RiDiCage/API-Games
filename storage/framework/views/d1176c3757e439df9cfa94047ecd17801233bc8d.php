<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo e(config('app.name', 'Laravel')); ?></title>

    <!-- Scripts -->
    <script src="<?php echo e(asset('js/app.js')); ?>" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">

    <style>
        .Logo {
            position: fixed;
            top: 0px;
            height: 75px;
            margin: 0rem;
            padding: 0rem;
            width: 52.5px;
        }
        .Logo > #Icon > path {
            -webkit-transition: 1.5s ease-in-out;
            transition: 1.5s ease-in-out;
        }
        .Logo:hover > #Icon > #Column1 {
            d: path("m 52.685001,35.56052 c 0,-9.40817 -7.626801,-17.035 -17.035001,-17.035 -9.40817,0 -17.035,7.62683 -17.035,17.035 v 34.54 c 0,9.4082 7.62683,17.035 17.035,17.035 9.4082,0 17.035,-7.626801 17.035,-17.035 z");
            -webkit-transition: 1.5s ease-in-out;
            transition: 1.5s ease-in-out;
        }
        .Logo:hover > #Icon > #Column2 {
            d: path("m 86.385,65.700519 c 0,-8.488599 -6.8814,-15.369999 -15.37,-15.369999 -8.4886,0 -15.37,6.8814 -15.37,15.369999 v 6.070001 c 0,8.4886 6.8814,15.37 15.37,15.37 8.4886,0 15.37,-6.8814 15.37,-15.37 z");
            -webkit-transition: 1.5s ease-in-out;
            transition: 1.5s ease-in-out;
        }
        .Logo:hover > #Icon > #Trademark {
            d: path("m 91.582463,44.760607 c -1.573997,0 -2.849606,1.27561 -2.849606,2.84961 0,1.573999 1.275609,2.849609 2.849606,2.849609 1.574,0 2.84961,-1.27561 2.84961,-2.849609 0,-1.574 -1.27561,-2.84961 -2.84961,-2.84961 z m 0,0.371094 c 1.3695,0 2.48047,1.109015 2.48047,2.478516 0,1.3695 -1.11097,2.480468 -2.48047,2.480468 -1.369498,0 -2.478513,-1.110968 -2.478513,-2.480468 0,-1.369501 1.109015,-2.478516 2.478513,-2.478516 z m -1.18945,0.828125 v 3.259765 h 0.470703 v -1.318359 h 0.835937 l 0.76953,1.318359 h 0.50391 v -0.02539 l -0.83594,-1.384766 c 0.2132,-0.0746 0.37925,-0.18709 0.49805,-0.33789 0.1204,-0.1507 0.18164,-0.32825 0.18164,-0.53125 0,-0.3194 -0.10782,-0.561416 -0.32422,-0.728516 -0.2148,-0.1672 -0.52353,-0.251953 -0.92383,-0.251953 z m 0.470703,0.355469 h 0.718747 c 0.2473,0.0015 0.43426,0.05461 0.56446,0.162109 0.1318,0.1075 0.19922,0.261391 0.19922,0.462891 0,0.1851 -0.0707,0.332959 -0.20899,0.443359 -0.1367,0.1105 -0.32003,0.166016 -0.55273,0.166016 h -0.720707 z");
            -webkit-transition: 1.5s ease-in-out;
            transition: 1.5s ease-in-out;
        }
        .Logo > #Logo {
            opacity: 0;
            -webkit-transition: opacity 1s ease-in-out;
            transition: opacity 1s ease-in-out;
        }
        .Logo:hover > #Logo {
            opacity: 1;
            -webkit-transition: opacity 2s ease-in-out;
            transition: opacity 2s ease-in-out;
            -webkit-transition-delay: 1s;
            transition-delay: 1s;
        }
    </style>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm sticky-top">
            <div class="container-fluid">
                <a class="navbar-brand" href="<?php echo e(url('/')); ?>">
                    <!-- <?php echo e(config('app.name', 'Laravel')); ?> -->
                    <svg
                        aria-hidden="true"
                        class="Logo"
                        height="150px"
                        role="img"
                        version="2.0"
                        viewBox="0 0 105 150"
                        width="105px"
                        weight="400"
                        xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="https://ridis.nl">

                        <linearGradient id="Gradient" x1="0%" y1="0%" x2="0%" y2="100%">
                            <stop offset="0%" style="stop-color:#A7A8A9;" />
                            <stop offset="100%" style="stop-color:#f96240;" />
                        </linearGradient>

                        <path
                            id="Background"
                            fill="#282828"
                            d="M 0,0 H 105 V 150 H 0 Z"
                        />
                        <g id="Icon">
                            <path
                                id="Column1"
                                fill="url(#Gradient)"
                                d="m 52.685001,57.7275 c 0,-9.40817 -7.626801,-17.035 -17.035001,-17.035 -9.40817,0 -17.035,7.62683 -17.035,17.035 v 34.54 c 0,9.4082 7.62683,17.035 17.035,17.035 9.4082,0 17.035,-7.6268 17.035,-17.035 z"
                            />
                            <path
                                id="Column2"
                                fill="url(#Gradient)"
                                d="M 86.385,87.867499 C 86.385,79.3789 79.5036,72.4975 71.015,72.4975 c -8.4886,0 -15.37,6.8814 -15.37,15.369999 V 93.9375 c 0,8.4886 6.8814,15.37 15.37,15.37 8.4886,0 15.37,-6.8814 15.37,-15.37 z"
                            />
                            <path
                                id="Trademark"
                                fill="url(#Gradient)"
                                d="m 91.582463,66.927587 c -1.573997,0 -2.849606,1.27561 -2.849606,2.84961 0,1.573999 1.275609,2.849609 2.849606,2.849609 1.574,0 2.84961,-1.27561 2.84961,-2.849609 0,-1.574 -1.27561,-2.84961 -2.84961,-2.84961 z m 0,0.371094 c 1.3695,0 2.48047,1.109015 2.48047,2.478516 0,1.3695 -1.11097,2.480468 -2.48047,2.480468 -1.369498,0 -2.478513,-1.110968 -2.478513,-2.480468 0,-1.369501 1.109015,-2.478516 2.478513,-2.478516 z m -1.18945,0.828125 v 3.259765 h 0.470703 v -1.318359 h 0.835937 l 0.76953,1.318359 h 0.50391 v -0.02539 l -0.83594,-1.384766 c 0.2132,-0.0746 0.37925,-0.18709 0.49805,-0.33789 0.1204,-0.1507 0.18164,-0.32825 0.18164,-0.53125 0,-0.3194 -0.10782,-0.561416 -0.32422,-0.728516 -0.2148,-0.1672 -0.52353,-0.251953 -0.92383,-0.251953 z m 0.470703,0.355469 h 0.718747 c 0.2473,0.0015 0.43426,0.05461 0.56446,0.162109 0.1318,0.1075 0.19922,0.261391 0.19922,0.462891 0,0.1851 -0.0707,0.332959 -0.20899,0.443359 -0.1367,0.1105 -0.32003,0.166016 -0.55273,0.166016 h -0.720707 z"
                            />
                        </g>
                        <g id="Logo">
                            <path
                                id="BolderText"
                                fill="#f96240"
                                d="m 7.5595648,114.28844 c -0.65,0 -1.1601497,0.34813 -1.1601497,0.82813 v 18.32031 c 0,0.48 0.5101497,0.83008 1.1601497,0.83008 H 9.059565 c 0.64,0 1.14063,-0.35008 1.14063,-0.83008 v -0.25 c 1.073,0.9088 2.45637,1.36578 3.85937,1.27148 4.07,0 6.71094,-2.10179 6.71094,-4.84179 v -4.81836 c 0,-3.32 -2.54101,-5 -6.54101,-5 -1.39301,-0.1087 -2.78069,0.26419 -3.92969,1.05859 v -5.74023 c 0,-0.48 -0.52016,-0.82813 -1.16016,-0.82813 z m 35.8203202,0 c -0.65,0 -1.16016,0.34813 -1.16016,0.82813 v 14.77148 c 0,2.83 2.21984,4.5586 6.83984,4.5586 h 0.86133 c 0.73,0 1.23828,-0.35907 1.23828,-0.78907 v -0.83008 c 0,-0.43 -0.50828,-0.76953 -1.23828,-0.76953 h -0.86133 c -2.74,0 -2.93945,-1.07992 -2.93945,-2.16992 v -14.77148 c 0,-0.48 -0.57094,-0.82813 -1.21094,-0.82813 z m 21.04101,0 c 0,0 -1.20117,-0.002 -1.20117,0.82813 v 5.70117 c -1.182,-0.6893 -2.53239,-1.0356 -3.90039,-1 -4.7,0 -6.53906,2.23 -6.53906,5 v 4.82031 c 0,3.16 2.45898,4.8086 6.45898,4.8086 1.465,0.1002 2.91455,-0.35264 4.06055,-1.26954 v 0.25 c 0,0.48 0.52015,0.83008 1.16015,0.83008 h 1.49024 c 0.64,0 1.16015,-0.35008 1.16015,-0.83008 v -18.31054 c 0,-0.48 -0.46937,-0.82813 -1.10937,-0.82813 z m -32.91992,5.47852 c -4.28,0 -7.18164,1.51148 -7.18164,5.27148 v 4.3086 c 0,3.25 2.86062,5.09961 7.14062,5.09961 l 0.08008,-0.0293 c 4.28,0 7.15039,-1.84961 7.15039,-5.09961 v -4.2793 c 0,-3.76 -2.90945,-5.27148 -7.18945,-5.27148 z m 46.88867,0.0703 c -4.83,0 -7.49023,2.15 -7.49023,5 v 5 c 0,2.62 2.9614,4.62109 7.1914,4.62109 4.45,0 7.18946,-2.03101 7.18946,-4.54101 0,-0.63 -0.52008,-0.87891 -1.33008,-0.87891 h -1.32031 c 0,0 -1.24024,-3.9e-4 -1.24024,0.84961 0,1.09 -0.80883,2.16992 -3.29883,2.16992 -2.01,0 -3.29101,-1.0207 -3.29101,-2.2207 v -1.10937 l 8.42969,-1.06055 c 1.5,-0.17 2.05078,-0.85032 2.05078,-1.57032 v -2.16015 c 0,-2.53 -3.00063,-4.09961 -6.89063,-4.09961 z m 18.9707,0 c -2.52,0 -3.20953,0.31117 -4.51953,1.20117 v -0.21094 c 0,-0.49 -0.52015,-0.83008 -1.16015,-0.83008 h -1.58008 c -0.65,0 -1.16016,0.34008 -1.16016,0.83008 v 12.59961 c 0,0.48 0.51016,0.83008 1.16016,0.83008 h 1.58008 c 0.64,0 1.16015,-0.35008 1.16015,-0.83008 v -8.83984 c 0,-1.14 0.66953,-2.39063 4.51953,-2.39063 0.73,0 1.24024,-0.36883 1.24024,-0.79883 v -0.79101 c 0,-0.43 -0.51024,-0.76953 -1.24024,-0.76953 z m -65.84961,2.33008 c 2.66001,0 3.29883,1.30109 3.29883,2.87109 v 4.2793 c 0,1.37 -0.67984,2.70898 -3.33984,2.70898 -2.66,0 -3.25,-1.33898 -3.25,-2.70898 v -4.2793 c 0,-1.54 0.63102,-2.87109 3.29101,-2.87109 z m 28.2793,0 c 1.54,0 3.42969,0.53992 3.42969,2.41992 v 5.2207 c 0,1.59 -1.49961,2.21875 -3.59961,2.21875 -1.66,0 -2.93945,-0.47875 -2.93945,-2.21875 v -5.2207 c 0,-1.66 1.01937,-2.41992 3.10937,-2.41992 z m -46.14062,0.0293 c 2.3,0 3.20117,0.99062 3.20117,2.39062 v 5.16016 c 0,1.6 -1.21,2.31054 -3,2.31054 -2.19,0 -3.59961,-0.97054 -3.59961,-2.31054 v -5.16016 h -0.03125 c 0,-1.14 0.89969,-2.39062 3.42969,-2.39062 z m 64.53125,0.041 c 1.88,0 3.20898,0.56922 3.20898,1.69922 v 1.52148 l -6.58984,0.84961 v -1.71094 c 0,-1.28 0.89086,-2.35937 3.38086,-2.35937 z"
                            />
                        </g>
                    </svg>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="<?php echo e(__('Toggle navigation')); ?>">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        <?php if(auth()->guard()->guest()): ?>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo e(route('login')); ?>"><?php echo e(__('Login')); ?></a>
                            </li>
                            <?php if(Route::has('register')): ?>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo e(route('register')); ?>"><?php echo e(__('Register')); ?></a>
                                </li>
                            <?php endif; ?>
                            <?php else: ?>
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    <?php echo e(Auth::user()->name); ?>

                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <?php echo e(__('Logout')); ?>

                                    </a>

                                    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
                                        <?php echo csrf_field(); ?>
                                    </form>
                                </div>
                            </li>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            <?php if(\Session::has('success')): ?>
                <div class="container">
                    <div class="alert alert-success alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                        <?php echo \Session::get('success'); ?>

                    </div>
                </div>
            <?php endif; ?>

            <?php if(\Session::has('error')): ?>
                <div class="container">
                    <div class="alert alert-danger alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                        <?php echo \Session::get('error'); ?>

                    </div>
                </div>
            <?php endif; ?>

            <?php if($errors->any()): ?>
                <div class="container">
                    <div class="alert alert-danger alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                        <ul>
                            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li><?php echo e($error); ?></li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </div>
                </div>
            <?php endif; ?>
            <?php echo $__env->yieldContent('content'); ?>
        </main>
    </div>
</body>
</html>
<?php /**PATH C:\Users\rvdkooij\Projects\Laravel\test2\resources\views/layouts/app.blade.php ENDPATH**/ ?>