<?php $__env->startSection('title', 'Contact'); ?>

<?php $__env->startSection('content'); ?>
<style>
    .contact-main {
        max-width: 600px;
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

    .contact-info {
        text-align: center;
        margin-bottom: 40px;
    }

    .contact-info p {
        font-size: 18px;
        color: #b789ef;
        margin: 10px 0;
    }

    .contact-info a {
        color: rgb(17, 240, 50);
        text-decoration: none;
    }

    .contact-info a:hover {
        color: #f011c5;
    }

    .contact-form {
        max-width: 500px;
        margin: 0 auto;
    }

    .form-group {
        margin-bottom: 20px;
    }

    .form-group label {
        display: block;
        color: rgb(17, 240, 50);
        font-family: 'Raleway', sans-serif;
        font-size: 16px;
        margin-bottom: 5px;
    }

    .form-group input,
    .form-group textarea {
        width: 100%;
        padding: 10px;
        background-color: #1a1a1a;
        border: 1px solid rgb(190, 17, 240);
        border-radius: 5px;
        color: #b789ef;
        font-family: 'Lato', sans-serif;
        font-size: 16px;
    }

    .form-group textarea {
        min-height: 150px;
        resize: vertical;
    }

    .submit-btn {
        background-color: rgb(17, 240, 50);
        color: black;
        border: none;
        padding: 12px 30px;
        font-family: 'Raleway', sans-serif;
        font-size: 16px;
        font-weight: 600;
        text-transform: uppercase;
        border-radius: 5px;
        cursor: pointer;
        width: 100%;
    }

    .submit-btn:hover {
        background-color: #f011c5;
        color: white;
    }

    .success-message {
        background-color: rgba(17, 240, 50, 0.1);
        border: 1px solid rgb(17, 240, 50);
        border-radius: 5px;
        padding: 15px;
        margin-bottom: 20px;
        text-align: center;
    }

    .error-message {
        background-color: rgba(255, 0, 0, 0.1);
        border: 1px solid red;
        border-radius: 5px;
        padding: 15px;
        margin-bottom: 20px;
        text-align: center;
    }

    .error-list {
        list-style-type: disc;
        padding-left: 20px;
        text-align: left;
    }

    .error-list li {
        color: #ff6b6b;
        font-size: 14px;
    }

    @media (max-width: 768px) {
        .banner_text h1 {
            font-size: 36px;
        }
    }
</style>

<div class="contact-main">
    <div class="banner_text">
        <h1>Contact</h1>
    </div>

    <div class="contact-info">
        <p>Instagram: <a href="https://www.instagram.com/rhode.visser/" target="_blank" rel="noopener noreferrer">@rhode.visser</a></p>
        <p>Email: <a href="mailto:nailedby.rhode@gmail.com">nailedby.rhode@gmail.com</a></p>
    </div>

    <?php if(session('success')): ?>
        <div class="success-message">
            <p><?php echo e(session('success')); ?></p>
        </div>
    <?php endif; ?>

    <?php if($errors->any()): ?>
        <div class="error-message">
            <ul class="error-list">
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo e($error); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
    <?php endif; ?>

    <form class="contact-form" action="<?php echo e(route('contact')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <div class="form-group">
            <label for="name">Naam</label>
            <input type="text" id="name" name="name" value="<?php echo e(old('name')); ?>" required>
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" value="<?php echo e(old('email')); ?>" required>
        </div>

        <div class="form-group">
            <label for="subject">Onderwerp</label>
            <input type="text" id="subject" name="subject" value="<?php echo e(old('subject')); ?>" required>
        </div>

        <div class="form-group">
            <label for="message">Bericht</label>
            <textarea id="message" name="message" required><?php echo e(old('message')); ?></textarea>
        </div>

        <button type="submit" class="submit-btn">Verstuur</button>
    </form>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\rosar\Herd\www\rhodevisser.github.io\resources\views/contact.blade.php ENDPATH**/ ?>