<?php $__env->startSection('title', 'Home'); ?>

<?php $__env->startSection('content'); ?>
<style>
    .home-main {
        display: flex;
        flex-direction: column;
        align-items: center;
        padding: 40px 20px;
    }

    .name_role {
        text-align: center;
        margin-bottom: 40px;
    }

    #main_name {
        font-family: 'Pacifico', cursive;
        font-size: 48px;
        color: rgb(17, 240, 50);
        margin: 0;
    }

    #main_role {
        font-family: 'Raleway', sans-serif;
        font-size: 24px;
        color: #b789ef;
        margin-top: 10px;
    }

    .container_introduction {
        display: flex;
        flex-direction: column;
        align-items: center;
        max-width: 900px;
        width: 100%;
    }

    .container_portrait {
        max-width: 400px;
        width: 100%;
        margin-bottom: 30px;
    }

    .container_portrait img {
        width: 100%;
        border-radius: 10px;
    }

    .introduction_text {
        max-width: 700px;
        text-align: center;
    }

    .introduction_text p {
        font-size: 20px;
        color: #b789ef;
        text-align: left;
        font-family: 'Lato', sans-serif;
        line-height: 1.8;
    }

    .home-buttons {
        display: flex;
        justify-content: center;
        gap: 20px;
        margin-top: 30px;
    }

    .home-buttons a {
        color: rgb(17, 240, 50);
        font-size: 24px;
        text-decoration: none;
    }

    .home-buttons a:hover {
        color: #f011c5;
    }

    @media (max-width: 768px) {
        #main_name {
            font-size: 36px;
        }
        
        #main_role {
            font-size: 18px;
        }
    }
</style>

<div class="home-main">
    <!-- Name and role -->
    <div class="name_role">
        <h1 id="main_name">Rhodé Visser</h1>
        <h2 id="main_role">Proces & Design Faciliteerder</h2>
    </div>

    <!-- Container introduction and portrait -->
    <div class="container_introduction">
        <!-- Portrait -->
        <div class="container_portrait">
            <img src="<?php echo e(asset('images/rhode.jpg(2400x)(CEB360C44974CCEAAA6F3F546B40EB53).jpg')); ?>" alt="Rhodé Visser">
        </div>

        <!-- Introduction text -->
        <div class="introduction_text">
            <p>
                Met meer dan tien jaar ervaring in de zorg en in coördinerende rollen binnen kunst, 
                cultuur en educatie, besef ik dat ik daar niet kan realiseren wat ik graag zou willen. 
                Met oog voor mensen, knelpunten en een groeiende interesse in technologische ontwikkelingen 
                en innovatie wil ik de overstap maken naar de IT-sector. Ik geloof dat technologie van 
                waarde is voor onze toekomst. <br><br>
                Ik ben geïnteresseerd in rollen als front-end of fullstack developer, of als product owner, 
                functies waarin techniek en samenwerking samenkomen. Nieuwe kennis pas ik graag zsm toe in 
                de praktijk, waardoor ik snel leer. Ik werk graag afwisselend: achter de computer, in overleg 
                met anderen, of op locatie, om mensen en onderdelen van een proces met elkaar te verbinden. Ik 
                zoek een omgeving om te leren, impact te maken en bij te dragen aan IT-ontwikkelingen die de 
                wereld iets mooier maken.
            </p>
        </div>

        <!-- Social buttons -->
        <div class="home-buttons">
            <a href="https://github.com/rhodevisser" target="_blank" rel="noopener noreferrer" aria-label="GitHub">
                <i class="fa-brands fa-github"></i>
            </a>
            <a href="https://bsky.app/profile/kapufskipauw.bsky.social" target="_blank" rel="noopener noreferrer" aria-label="Bluesky">
                <i class="fa-brands fa-bluesky"></i>
            </a>
            <a href="https://www.instagram.com/rhode.visser/" target="_blank" rel="noopener noreferrer" aria-label="Instagram">
                <i class="fa-brands fa-instagram"></i>
            </a>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\rosar\Herd\www\rhodevisser.github.io\resources\views/home.blade.php ENDPATH**/ ?>