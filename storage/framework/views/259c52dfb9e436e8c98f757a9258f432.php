<?php $__env->startSection('title', 'Portfolio'); ?>

<?php $__env->startSection('content'); ?>
<style>
    .portfolio-main {
        max-width: 800px;
        margin: 0 auto;
        padding: 40px 20px;
        text-align: center;
    }

    .banner_text {
        text-align: center;
        margin-bottom: 40px;
    }

    .banner_text h1 {
        font-family: 'Pacifico', cursive;
        font-size: 48px;
        color: rgb(17, 240, 50);
    }

    .portfolio-placeholder {
        background-color: #1a1a1a;
        border: 1px solid rgb(190, 17, 240);
        border-radius: 10px;
        padding: 60px 20px;
        margin: 0 auto;
        max-width: 600px;
    }

    .portfolio-placeholder p {
        font-size: 20px;
        color: #b789ef;
        font-family: 'Lato', sans-serif;
    }

    @media (max-width: 768px) {
        .banner_text h1 {
            font-size: 36px;
        }
    }
</style>

<div class="portfolio-main">
    <div class="banner_text">
        <h1>Portfolio</h1>
    </div>

    <div class="portfolio-placeholder">
        <p>Er is nog geen portfolio beschikbaar.</p>
        <p style="margin-top: 20px; font-size: 16px; color: #888;">Blijf op de hoogte!</p>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\rosar\Herd\www\rhodevisser.github.io\resources\views/portfolio.blade.php ENDPATH**/ ?>