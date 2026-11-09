<?php $__env->startSection('title', 'Blog'); ?>

<?php $__env->startSection('content'); ?>
<style>
    .blog-main {
        max-width: 800px;
        margin: 0 auto;
        padding: 40px 20px;
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

    .blog-post-card {
        background-color: #1a1a1a;
        border: 1px solid rgb(190, 17, 240);
        border-radius: 10px;
        padding: 20px;
        margin-bottom: 20px;
        transition: border-color 0.3s;
    }

    .blog-post-card:hover {
        border-color: rgb(17, 240, 50);
    }

    .blog-post-card h2 {
        font-family: 'Raleway', sans-serif;
        font-size: 24px;
        margin-bottom: 10px;
    }

    .blog-post-card h2 a {
        color: rgb(17, 240, 50);
        text-decoration: none;
    }

    .blog-post-card h2 a:hover {
        color: #f011c5;
    }

    .blog-post-meta {
        font-size: 14px;
        color: #888;
        margin-bottom: 10px;
    }

    .blog-post-excerpt {
        color: #b789ef;
        font-family: 'Lato', sans-serif;
        line-height: 1.6;
    }

    .no-posts {
        text-align: center;
        color: #b789ef;
        font-size: 18px;
        padding: 40px;
    }

    .pagination {
        display: flex;
        justify-content: center;
        margin-top: 30px;
    }

    @media (max-width: 768px) {
        .banner_text h1 {
            font-size: 36px;
        }
    }
</style>

<div class="blog-main">
    <div class="banner_text">
        <h1>Blog</h1>
    </div>

    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($posts->count() > 0): ?>
        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoopIteration(); ?><?php endif; ?>
            <article class="blog-post-card">
                <h2><a href="<?php echo e(route('blog.show', $post)); ?>"><?php echo e($post->title); ?></a></h2>
                <div class="blog-post-meta">
                    <?php echo e($post->published_at->format('d M Y')); ?>

                </div>
                <p class="blog-post-excerpt">
                    <?php echo e($post->excerpt ?? strip_tags($post->content)); ?>

                </p>
            </article>
        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::endLoop(); ?><?php endif; ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::closeLoop(); ?><?php endif; ?>

        <div class="pagination">
            <?php echo e($posts->links()); ?>

        </div>
    <?php else: ?>
        <p class="no-posts">Er zijn nog geen blog artikelen.</p>
    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\rosar\Herd\www\rhodevisser.github.io\resources\views/blog/index.blade.php ENDPATH**/ ?>