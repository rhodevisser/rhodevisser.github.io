@extends('layouts.app')

@section('title', 'Over mij')

@section('content')
<style>
    .about-main {
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

    .overmij_text {
        max-width: 700px;
        margin: 0 auto;
    }

    .overmij_text p {
        font-size: 20px;
        color: #b789ef;
        text-align: left;
        font-family: 'Lato', sans-serif;
        line-height: 1.8;
    }

    @media (max-width: 768px) {
        .banner_text h1 {
            font-size: 36px;
        }
    }
</style>

<div class="about-main">
    <div class="banner_text">
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
</div>
@endsection
