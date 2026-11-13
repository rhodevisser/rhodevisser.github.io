@extends('layouts.app')

@section('title', 'Home')

@section('content')


<div class="home-split-wrapper">

    <!-- Left pane: Personal intro (sticky) -->
    <div class="profile-home-left">
        <!-- Name and role -->
        <div class="profile-name-role">
            <h1>Rhodé Visser</h1>
            <h3>Laravel Developer</h3>
        </div>

        <!-- Container introduction and portrait -->
        <div class="profile-information">
            <!-- Portrait -->
            <div class="container-portrait">
                <img src="{{ asset('images/WIN_20261110_16_13_10_Pro.jpg') }}" alt="Rhodé Visser with webcam">
            </div>

            <!-- Section anchor buttons -->
            <div class="profile-index-links ">

                <a href="#work-experiences">
                    - Work experiences
                </a>

                <a href="#production-projects">
                    - Production & project management
                </a>

                <a href="#research-writing-design">
                    - Research, writing & iterative design
                </a>

                <a href="#education-internship-training">
                    - Education, internships & training
                </a>

                <a href="#work-with-me">
                    - What to expect when you work with me?
                </a>

                <a href="#blog">
                    - Blog
                </a>
            </div>

            <!-- Social buttons -->
            <div class="profile-social-links">
                <a href="https://github.com/rhodevisser" target="_blank" rel="noopener noreferrer" aria-label="GitHub">
                    <i class="fa-brands fa-github"></i>
                </a>
                <a href="https://bsky.app/profile/kapufskipauw.bsky.social" target="_blank" rel="noopener noreferrer" aria-label="Bluesky">
                    <i class="fa-brands fa-bluesky"></i>
                </a>
                <a href="https://www.instagram.com/kapufskipauw/" target="_blank" rel="noopener noreferrer" aria-label="Instagram">
                    <i class="fa-brands fa-instagram"></i>
                </a>
            </div>

        </div>
    </div>


    <div class="about-home-right">
        <div class="container-titles">
            <div class="overmij_text">
                <p>
                    Hi There! I'm Rhodé, a Laravel developer. I got to the programming party a little later in life, so I bring other experiences with me.
                    So how did I get into developing with Laravel? Short version: my ideas kept pointing in a digital direction, and I wanted to close the gap between what I could make and what I wanted to make.<br><br>
                    I started with the basics: html & css, the basics of programming, JavaScript, and I eventually got into Laraval after visiting Laracon EU Amsterdam (March, 2026). Loving it since! Along writing code, I like to organize, structure and build systems, especially if that helps people, the workplace, a project to move forward. <br><br>
                </p>
            </div>
        </div>

        <hr class="cv-divider">

        <div class="container-titles" id="cv">

            <div class="cv-section" id="work-experiences">
                <h2>Work Experiences </h2>
                <ul>
                    <li><p>Laravel developer (BURO MLBRGN Arnhem, December 2025 - active)</p></li>
                    <li><p>Planning social nedia (Design bureau Álleburen, 2025)</p></li>
                    <li><p>Educational assistant (University of applied sciences Arnhem en Nijmegen, 2020-2022)</p></li>
                    <li><p>Secretary (Artist collective Bieb 3000, 2020-2022)</p></li>
                    <li><p>Coördinator &amp; PR (Social and artistic Robo-art project by Krista Burger &amp; Kenneth Leitson, 2020)</p></li>
                    <li><p>Voluntary jobs in the art & cultural field (2018-2022)</p></li>
                    <li><p>Care assistant (2011-2019)</p></li>
                    <li><p>Jobs in retail, hospitality, festivals en beauty industrie (2004-2017)</p></li>
                </ul>
            </div>

            <div class="cv-section">
                <h2>Individual work</h2>
                <ul>
                    <li><p>Writing, sound design & voice-acting: 'Flowerbeds', (Soundcloud, 2023)</p></li>
                    <li><p>Sound & performance installation: '3, 2, 1, What is seen is gone: Can an augmented question, or can tomorrow, be Answered by today?' (Centrale Fies Dro Italy x DAI, 2023)</p></li>
                    <li><p>Augmented reality & audio walk: 'Can an augmented question, or can tomorrow, be answered by today?'(Performing Arts Forum France x DAI, 2022)</p></li>
                    <li><p>Audio- and visual installation: 'It is where to be understood?' (Post Theater Arnhem x DAI, 2022)</p></li>
                    <li><p>Writing, voice-acting, audio- and visual design: 'What if stones could talk?', (DAI, 2021)</p></li>
                    <li><p>Writing, audio- and visual design & editing: Short film 'Watching Monkeys' (2015)</p></li>
                    <li><p>Writing, audio- and visual design & editing: 'Ik weet 't ff Niet' (2014)</p></li>
                </ul>
            </div>

            <div class="cv-section">
                <h2>Collaborative work</h2>
                <ul>
                    <li><p>Performing & acting: 'The Good Falling' a film by Izaro Ieregi González (2023)</p></li>
                    <li><p>Audio- and visual design & art-direction: Interactive Performance 'Curating positions: Nostalgia for the light: Struggles reverberations in cinema' (Bulegoa z/b, Basque Country, 2021-2022)</p></li>
                    <li><p>COOP study group 'On tradition - Future ancestors: Let rhythm be your guiding light' (If I Can't Dance I Don't Want To Be Part Of Your Revolution, 2020-2021)</p></li>
                    <li><p>Production & artist assistant: Public exhibition 'There is no place like here' with Abdul-Haqq Mahama (Tamale, Ghana, 2018)</p></li>
                    <li><p>Writing & art-direction: Short indie documentary 'Dead people have no more wrinkles'(2016)</p></li>
                </ul>
            </div>

            <div class="cv-section" id="production-projects">
                <h2>Production & project management</h2>
                <ul>
                    <li><p>Quarter meeting for development-team (BURO MLBRGN August 2026 - active)</p></li>
                    <li><p>AI Integration Research (BURO MLBRGN, 2026)</p></li>
                    <li><p>Vegan food &amp; art pop-up restaurant '(M)eetVegan'(2016-2018)</p></li>
                    <li><p>Shortfilm 'Het Rijk Alleen' (RijnIJssel Arnhem, 2015)</p></li>
                </ul>
            </div>

            <div class="cv-section" id="research-writing-design">
                <h2>Research &amp; writing</h2>
                <ul>
                    <li><p>Report AI integration research (BURO MLBRGN Arnhem, 2026)</p></li>
                    <li><p>MA thesis 'From Social Work Towards Social Empathy: A Perspective on the History of Dutch Caregiving Practices' (2024)</p></li>
                    <li><p>BA thesis 'Random Room in the HAN University of Applied Sciences: An Experiment in a Space Between Random and Rigid' (2020)</p></li>
                    <li><p>Genealogical research and documentation (2010-on going)</p></li>
                </ul>
            </div>

            <div class="cv-section">
                <h2>Iterative Design</h2>
                <ul>
                    <li><p>Interactive sound performance & dialogue session: 'Nourish noise' (Ont.Moeten x HAN University of Applied Sciences Arnhem en Nijmegen, 2021 - 2022)</p></li>
                    <li><p>Process-art methodology (scoring): 'The banana project (2020-2021)</p></li>
                    <li><p>Participatory iterative design & proto-typing: 'Random Room' (HAN University of Applied Sciences Arnhem en Nijmegen, 2019)</p></li>
                    <li><p>Design interactive reading: 'Random Readings'(2019)</p></li>
                    <li><p>Workshop design: Public speaking for girls (Business School Tamale, Ghana, 2017)</p></li>
                </ul>
            </div>

            <div class="cv-section" id="education-internship-training">
                <h2>Education</h2>
                <ul>
                    <li><p>MA Fine Arts (Dutch Art Institute, ArteZ, 2023)</p></li>
                    <li><p>BA Cultural and Social Development (HAN University of Applied Sciences Arnhem en Nijmegen, 2021)</p>
                        <ul>
                            <li><p>WO minor (Radboud University Nijmegen, 2020)</p></li>
                        </ul>
                    </li>
                    <li><p>MBO-4 Audio- and Visual Specialist (RijnIJssel Arnhem, 2015)</p></li>
                    <li><p>VMBO Theoretisch Onderwijs Zorg en Welzijn (Mollerlyceum Bergen op Zoom, 2006)</p></li>
                </ul>
            </div>

            <div class="cv-section">
                <h2>Internships</h2>
                <ul>
                    <li><p>Art Center Nieuwe Blik Nijmegen (2018)</p></li>
                    <li><p>Coördination Location Spatie &amp; Motel Spatie, Arnhem (2017)</p>
                        <ul>
                            <li><p>Spoon Presikhaaf's community kitchen</p></li>
                            <li><p>31 Illegal Murals</p></li>
                        </ul>
                    </li>
                    <li><p>Ruru Huis (Sonsbeek Arnhem, 2016)</p></li>
                    <li><p>Center for Performance Art Huis van Puck (2015)</p></li>
                    <li><p>Studio Beeldontwerp Arnhem (2014)</p></li>
                </ul>
            </div>

            <div class="cv-section">
                <h2>Training & certificates</h2>
                <ul>
                    <li><p>Build a website with HTML, CSS, and gitHub pages (Codecademy, 2024)</p></li>
                    <li><p>Introduction to user experience design (Georgia Institute of Technology, Coursera (Online), 2024)</p></li>
                    <li><p>Workshop haal meer uit je AI (Culture Academy Arnhem en Nijmegen, 2024)</p></li>
                    <li><p>Workshop scientific storytelling (Tribers, 2024)</p></li>
                    <li><p>Google AI for anyone, (EdX (Online), 2022)</p></li>
                </ul>
            </div>

        </div>

        <hr class="cv-divider">

        <div class="work-with-me-section container-titles" id="work-with-me">
            <h3>What to expect when you work with me</h3>
            <p>
                Some companies have a great story about meaning and impact, and attract many enthusiastic, talented people. Still, at some point the spark can fade away, collaboration stagnates and stress rises. People slowly drift away, each departure treated as an incident rather than a pattern. New ones arrive, and the cycle repeats. <br><br>
                Often, the cause is ambiguity. Enthusiastic people want to commit, but that's hard when things are unclear. To create clarity and structure, we first need to understand what is unclear and why. Clear expectations create room to spark, thrive, solve, and build. I truly believe this, and my way of working is built around it.<br><br>
                So what happens when you work with me? I'm comfortable navigating ambiguity. When instructions are missing or goals are vague, I don't freeze, I see room to organize.  I spot friction in a team, and when tasks keep getting postponed, I look for the underlying reasons. If the same complaints, questions, and discussions keep resurfacing, I look for the pattern and figure out what’s missing.<br><br>
                Does that make me someone who needs everything crystal clear? Not at all. I'm drawn to complexity and I like a good puzzle, especially when solving it helps people, the workplace, a project to move forward.<br><br>
            </p>
        </div>

        <div class="blog-cta" id="blog">
            <p>
                I like to blog about things that interest me. Not only code, but also other interests I might have.
                <a href="{{ route('blog.index') }}">Read my blog posts here</a>.
            </p>
        </div>
    </div>
</div>
@endsection
