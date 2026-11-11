@extends('layouts.app')

@section('title', 'Home')

@section('content')
<style>
    .home-split-wrapper {
        display: flex;
        height: 100vh;
        overflow: hidden;
    }

    /* Left pane - sticky */
    .home-left {
        flex: 1;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        padding: 40px 20px;
        position: sticky;
        top: 0;
        overflow-y: auto;
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
        font-size: 16px;
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
        font-size: 14px;
        font-family: 'Raleway', sans-serif;
        font-weight: 600;
        text-transform: uppercase;
        text-decoration: none;
    }

    .home-buttons a:hover {
        color: #f011c5;
    }

    /* Smooth scrolling for anchor links */
    .home-right {
        scroll-behavior: smooth;
    }

    /* Right pane - scrollable "Over mij" */
    .home-right {
        flex: 1;
        padding: 40px 40px;
        overflow-y: auto;
        border-left: 1px solid #333;
    }

    .home-right::-webkit-scrollbar {
        width: 8px;
    }

    .home-right::-webkit-scrollbar-track {
        background: #111;
    }

    .home-right::-webkit-scrollbar-thumb {
        background: #b789ef;
        border-radius: 4px;
    }

    .home-right::-webkit-scrollbar-thumb:hover {
        background: rgb(17, 240, 50);
    }

    .about-section-title {
        text-align: center;
        margin-bottom: 40px;
    }

    .about-section-title h1 {
        font-family: 'Pacifico', cursive;
        font-size: 48px;
        color: rgb(17, 240, 50);
    }

    .overmij_text {
        max-width: 700px;
        margin: 0 auto;
    }

    .overmij_text p {
        font-size: 16px;
        color: #b789ef;
        text-align: left;
        font-family: 'Lato', sans-serif;
        line-height: 1.8;
    }

    /* CV section styles within right pane */
    .cv-section {
        margin-bottom: 30px;
    }

    .cv-section h2 {
        font-family: 'Raleway', sans-serif;
        font-size: 28px;
        color: rgb(17, 240, 50);
        margin-bottom: 15px;
        border-bottom: 1px solid rgb(17, 240, 50);
        padding-bottom: 5px;
    }

    .cv-section ul {
        list-style-type: disc;
        padding-left: 20px;
    }

    .cv-section ul li {
        margin-bottom: 10px;
    }

    .cv-section ul li p {
        font-size: 16px;
        color: #b789ef;
        text-align: left;
        font-family: 'Lato', sans-serif;
        line-height: 1.6;
        margin: 0;
    }

    .cv-section ul ul {
        list-style-type: circle;
        margin-top: 5px;
    }

    .cv-divider {
        border: none;
        border-top: 2px solid #333;
        margin: 40px 0;
    }

    /* Blog CTA section */
    .blog-cta {
        text-align: center;
        padding: 20px;
        background: rgba(183, 137, 239, 0.1);
        border-radius: 10px;
        margin-top: 20px;
    }

    .blog-cta p {
        font-size: 16px;
        color: #b789ef;
        font-family: 'Lato', sans-serif;
        line-height: 1.8;
        margin: 0;
    }

    .blog-cta a {
        color: rgb(17, 240, 50);
        text-decoration: none;
        font-weight: 700;
    }

    .blog-cta a:hover {
        color: #f011c5;
        text-decoration: underline;
    }

    /* Mobile fallback - single column, normal scrolling */
    @media (max-width: 768px) {
        .home-split-wrapper {
            display: block;
            height: auto;
            overflow: visible;
        }

        .home-left {
            position: static;
            padding: 40px 20px;
            overflow: visible;
        }

        .home-right {
            border-left: none;
            border-top: 1px solid #333;
            padding: 40px 20px;
            overflow: visible;
        }

        #main_name {
            font-size: 36px;
        }

        #main_role {
            font-size: 18px;
        }

        .about-section-title h1 {
            font-size: 36px;
        }
    }
</style>

<div class="home-split-wrapper">
    <!-- Left pane: Personal intro (sticky) -->
    <div class="home-left">
        <!-- Name and role -->
        <div class="name_role">
            <h1 id="main_name">Rhodé Visser</h1>
            <h2 id="main_role">Laravel Developer</h2>
        </div>

        <!-- Container introduction and portrait -->
        <div class="container_introduction">
            <!-- Portrait -->
            <div class="container_portrait">
                <img src="{{ asset('images/WIN_20261110_16_13_10_Pro.jpg') }}" alt="Rhodé Visser">
            </div>

            <!-- Introduction text -->
            <div class="introduction_text">
                <p>
                    I build things with Laravel, and I like to collaborate with other creatives and developers.
                </p>
            </div>

            <!-- Section anchor buttons -->
            <div class="home-buttons">
                <a href="#over-mij">Over mij</a>
                <a href="#cv">CV</a>
                <a href="#blog">Blog</a>
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

    <!-- Right pane: "Over mij" section (scrollable) -->
    <div class="home-right">
        <div class="about-section-title" id="over-mij">
            <h1>Over mij</h1>
        </div>

        <div class="overmij_text">
            <p>
                Met een achtergrond in zorg, kunst, cultuur en educatie heb ik gewerkt met verschillende
                mensen en ontwikkelde ik een voorkeur voor het iteratieve proces. Mijn kracht ligt in het
                analyseren van knelpunten, bijvoorbeeld veroorzaakt door vage rollen of te grote doelen.
                Ik luister actief naar wat er speelt in een team, voel onuitgesproken dynamieken aan en
                vertaal die naar focuspunten en concrete acties. <br><br>
                Mijn interesse in technologie ontstond uit een behoefte aan betere middelen om duurzame
                verandering mogelijk te maken. In zorg en educatie liep ik vaak aan tegen grenzen in
                werkwijze en infrastructuur. Tegelijkertijd begon ik me persoonlijk te verdiepen in AI,
                werkte ik in installatief werk met AR, en ontwikkelde ik een systeemdenkende benadering
                binnen mijn storytellingpraktijk. Vanuit die achtergrond begon ik verbanden te zien tussen
                sociale processen en technische structuren — en ontdekte ik hoe waardevol het is als iemand
                die sociaal en procesmatig werkt ook technische mogelijkheden begrijpt en inzet. <br><br>
                Mijn veelzijdige achtergrond heeft mijn denken getraind in het schakelen tussen contexten,
                mensen en systemen. Daardoor ben ik ontvankelijk voor wat zich aandient, herken ik snel
                patronen en leer ik nieuwe technologieën of werkvormen makkelijk op inhoud én procesniveau. <br><br>
                Met basiskennis van HTML, CSS en JavaScript en ervaring uit conceptontwikkelingsprojecten heb
                ik zicht op wat er komt kijken bij een creatief of technisch proces. Daardoor kan ik (technische)
                taken beter identificeren en vertalen naar werkbare stappen. Ik gebruik tools zoals Miro en
                methodieken zoals de zes hoeden om gestructureerde sessies te begeleiden. Mijn communicatiestijl
                is gericht op helderheid en actie, waarbij ik de afstemming en opvolging van taken faciliteer.
            </p>
        </div>

        <hr class="cv-divider">

        <div class="about-section-title" id="cv">
            <h1>CV</h1>
        </div>

        <!-- Education -->
        <div class="cv-section">
            <h2>Education</h2>
            <ul>
                <li><p>Fine Arts (DAI art practice), Dutch Art Institute, Arnhem (Roaming x ArteZ, 2023)</p></li>
                <li><p>BA Culturele en Maatschappelijke Vorming, Hogeschool van Arnhem en Nijmegen, Nijmegen (Netherlands, 2021)</p>
                    <ul>
                        <li><p>WO vrije minor in disciplines Philosophy, Theology &amp; Religion, English Language &amp; Culture, Liberal Arts &amp; Sciences, Radboud Universiteit, Nijmegen (2020)</p></li>
                    </ul>
                </li>
                <li><p>MBO-4 Audio Visueel Specialist, RijnIJssel, Arnhem (Netherlands, 2015)</p></li>
                <li><p>VMBO Theoretisch Onderwijs Zorg en Welzijn, Mollerlyceum Bergen op Zoom (Netherlands, 2006)</p></li>
            </ul>
        </div>

        <!-- Training -->
        <div class="cv-section">
            <h2>Training</h2>
            <ul>
                <li><p>Build a website with HTML, CSS, and gitHub pages (In progress), Codecademy (Online, 2024)</p></li>
                <li><p>Introduction to user experience design, Georgia Institute of Technology, Coursera (Online, 2024)</p></li>
                <li><p>Workshop haal meer uit je AI, Cultuur Academy Arnhem en Nijmegen, Nijmegen (Netherlands, 2024)</p></li>
                <li><p>Workshop scientific storytelling, Tribers, Amsterdam (Netherlands, 2024)</p></li>
                <li><p>Google AI for anyone, EdX (Online, 2022)</p></li>
            </ul>
        </div>

        <!-- Individual Work -->
        <div class="cv-section">
            <h2>Individual work</h2>
            <ul>
                <li><p>Sound piece 'Flowerbeds', Soundcloud (Online, 2023)</p></li>
                <li><p>Sound installation '3, 2, 1, What is seen is gone: Can an augmented question, or can tomorrow, be Answered by today?', Centrale Fies Dro x DAI (Italy, 2023)</p></li>
                <li><p>AR-audio walk 'Can an augmented question, or can tomorrow, be answered by today?', Performing Arts Forum (PAF) x DAI St. Erme (France, 2022)</p></li>
                <li><p>Sound installation 'It is where to be understood?', Post Theater x DAI, Arnhem (Netherlands, 2022)</p></li>
                <li><p>Performance x listen &amp; dialogue session 'Nourish noise' Ont.Moeten x Hogeschool van Arnhem en Nijmegen, Nijmegen (Netherlands, 2021)</p></li>
                <li><p>Short film 'Aapjes Kijken' (Netherlands, 2015)</p></li>
                <li><p>Video response 'Ik weet 't ff Niet' (Netherlands, 2014)</p></li>
            </ul>
        </div>

        <!-- Collaborative Work -->
        <div class="cv-section">
            <h2>Collaborative work</h2>
            <ul>
                <li><p>Performer in the film 'The Good Falling' by Izaro Ieregi González, Het Wilde Weten, Rotterdam (Netherlands, 2023)</p></li>
                <li><p>COOP study group 'Curating positions: Nostalgia for the light: Struggles reverberations in cinema', Partner: Bulegoa z/b (Roaming x Basque Country, 2021-2022)</p></li>
                <li><p>Video and sound piece 'What if stones could talk?', Live x DAI (Online, 2021)</p></li>
                <li><p>COOP study group 'On tradition - Future ancestors: Let rhythm be your guiding light', Partner: If I Can't Dance I Don't Want To Be Part Of Your Revolution x DAI (Online &amp; Roaming, 2020-2021)</p></li>
                <li><p>Indie documentary 'Dode mensen hebben geen rimpels meer', RijnIJssel Arnhem (Netherlands, 2015)</p></li>
            </ul>
        </div>

        <!-- Production & Organizational Work -->
        <div class="cv-section">
            <h2>Production &amp; organizational work</h2>
            <ul>
                <li><p>Public exhibition 'There is no place like here', Tamale (Ghana, 2018)</p></li>
                <li><p>Vegan food &amp; art pop-up restaurant '(M)eetVegan', Arnhem (Netherlands, 2016-2017)</p></li>
                <li><p>Production for shortfilm 'Het Rijk Alleen', RijnIJssel, Arnhem (Netherlands, 2015)</p></li>
            </ul>
        </div>

        <!-- Workshop & Methodology Design -->
        <div class="cv-section">
            <h2>Workshop &amp; methodology design</h2>
            <ul>
                <li><p>Methodology development 'The banana project, Arnhem (Netherlands, 2020-2021)</p></li>
                <li><p>Alternative methodology design 'Random Room', Hogeschool van Arnhem en Nijmegen, Nijmegen (Netherlands, 2019)</p></li>
                <li><p>Methodology development for collective reading group 'Random Readings', Roaming &amp; Online (Netherlands, 2019)</p></li>
            </ul>
        </div>

        <!-- Work & Voluntary Work -->
        <div class="cv-section">
            <h2>Work &amp; voluntary work / funded by my student-loan</h2>
            <ul>
                <li><p>Secretaris, Bieb 3000, Arnhem (Netherlands, 2020-2022)</p></li>
                <li><p>Educatie ondersteuner, Hogeschool van Arnhem en Nijmegen, Nijmegen (Netherlands, 2020-2022)</p></li>
                <li><p>Member kunstenaarscollectief 'Under the Table', Arnhem (Netherlands, 2020-2022)</p></li>
                <li><p>Coördinator &amp; PR sociaal artistieke robo-art project geïnitieerd door Krista Burger &amp; Kenneth Leitson, Siza, Arnhem (Netherlands, 2020)</p></li>
                <li><p>Vrijwilliger artist-in-residence en project ruimte, Motel Spatie, Arnhem (Netherlands, 2018-2020)</p></li>
                <li><p>Workshop public speaking, Business School, Tamale (Ghana, 2017)</p></li>
                <li><p>Verzorgende IG, Arnhem (Netherlands, 2011-2019)</p></li>
                <li><p>Mede initieerder creatief platform 'Kleurstof', Arnhem (Netherlands, 2011-2012)</p></li>
                <li><p>Divers werk in retail, horeca, festival en schoonheidssector (Netherlands, 2004-2017)</p></li>
            </ul>
        </div>

        <!-- Research & Writing -->
        <div class="cv-section">
            <h2>Research &amp; writing</h2>
            <ul>
                <li><p>Genealogical research and documentation (2010-on going)</p></li>
                <li><p>MA thesis 'From Social Work Towards Social Empathy: A Perspective on the History of Dutch Caregiving Practices' (2024)</p></li>
                <li><p>BA thesis 'A Random Room in the HAN: An Experiment in a Space Between Random and Rigid' (2020)</p></li>
            </ul>
        </div>

        <!-- Internships -->
        <div class="cv-section">
            <h2>Internships</h2>
            <ul>
                <li><p>Kunsthuis de Nieuwe Blik, Nijmegen (Netherlands, 2018)</p></li>
                <li><p>Coördination Locatie Spatie &amp; Motel Spatie, Arnhem (Netherlands, 2017)</p>
                    <ul>
                        <li><p>Spoon Presikhaaf's community kitchen</p></li>
                        <li><p>31 Illegal Murals</p></li>
                    </ul>
                </li>
                <li><p>Ruru Huis, Sonsbeek, Arnhem (Netherlands, 2016)</p></li>
                <li><p>Huis van Puck, Arnhem (Netherlands, 2015)</p></li>
                <li><p>Studio Beeldontwerp, Arnhem (Netherlands, 2014)</p></li>
            </ul>
        </div>

        <hr class="cv-divider">

        <div class="blog-cta" id="blog">
            <p>
                I like to blog about things that interest me. Not only code, but also other interests I might have.
                <a href="{{ route('blog.index') }}">Read my blog posts here</a>.
            </p>
        </div>
    </div>
</div>
@endsection
