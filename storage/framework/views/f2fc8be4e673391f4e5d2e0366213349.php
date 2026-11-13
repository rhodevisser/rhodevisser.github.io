<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $__env->yieldContent('title', 'Rhodé Visser'); ?> - Laravel Developer </title>
    <meta name="description" content="<?php echo $__env->yieldContent('description', 'Hi There! I build things with Laravel, and I like to collaborate with others.'); ?>">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/9104f8e396.js" crossorigin="anonymous"></script>

    <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/js/app.js']); ?>
</head>
<body class="bg-black">
    <!-- SEO Header -->
    <header class="sr-only">
        <h1>Rhodé Visser</h1>
        <h2><?php echo $__env->yieldContent('header-subtitle', 'Op dit moment maak ik de overstap naar IT, waar ik mijn ervaring met mensen, passie voor leren en innovatie wil inzetten om bij te dragen aan technologie die de wereld mooier maakt.'); ?></h2>
    </header>



    <!-- Flower Animation Container -->
    <div id="flower-container"></div>

    <!-- Main Content -->
    <main>
        <?php echo $__env->yieldContent('content'); ?>
    </main>


    <!-- JavaScript -->
    <script src="<?php echo e(asset('js/main.js')); ?>"></script>
</body>
</html>
<?php /**PATH C:\Users\rosar\Herd\www\rhodevisser.github.io\resources\views/layouts/app.blade.php ENDPATH**/ ?>