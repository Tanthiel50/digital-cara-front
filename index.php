<?php

include 'partials/header.php';

?>


<section class="bg-dark-gray mt-5 position-relative pb-5">
    <div class=" position-relative">
        <img src="images/background.png" alt="" id="image-hero">
    </div>
    <div class="text-white position-absolute" id="text-hero">
        <h1 class="lg-display-1 hero-phrase">
            Marketing <br> Communication <br> Full stack <span class="d-block fw-light mt-5 text-orange fw-bold second-hero-phrase">Pick your champ</span>
        </h1>
    </div>
</section>

<!-- CHOOSE YOUR ROLE -->

<section class="bg-dark-gray text-white row pt-5">
    <img src="images/IMG-20230110-WA0002.jpg" class="role-img col-xl-6 col-xs-4 order-1" alt="">
    <div class="col d-flex flex-column align-items-center justify-content-center m-5 col order-2">
        <h2 class="border-bottom border-orange border-1 display-4 pb-2 fw-bold role-phrase"> THE PLAYER </h2>
        <div class="pt-5 pb-5">
            Capable de positionner ses doigts sur les touches ZQSD sans avoir besoin d'ouvrir les yeux, Cara, plus connue sous le nom de Cécile Blin est une joueuse invétérée depuis 1991.
            Tank et healer en même temps, elle se spécialise dans la communication et le marketing. Cependant, elle ne veut pas s'arrêter là et souhaite aller plus loin pour aider son équipe. Donc sur 
            son temps libre, elle se décide à s'exercer sur de nouveaux rôles pour soutenir ses capacités existantes. Le rôle d'ADC l'a toujours passionnée et elle s'exerce donc au développement web.
            Elle commence simplement en s'entraînant à last hit sur le HTML et le CSS, parce qu'il faut bien commencer quelque part, puis elle se lance sur le JS. C'est indispensable de savoir last hit tout en se déplaçant !
            Puis tout est allé très vite PHP, React, Bootstrap, Tailwind, NodeJS tout s'enchaine et ce n'est jamais assez. Aujourd'hui, elle souhaite continuer à évoluer et progresser, se servir
            de toutes ses connaissances et compétences pour aller toujours plus loin et gagner le match.
        </div>
    </div>
</section>


<!-- PICK YOUR PLAYER -->
<section class="text-white d-flex justify-content-center p-5 align-items-center">
    
    <div>
        <div class="d-flex flex-column align-items-center justify-content-center">
            <h2 class="border-bottom border-orange border-1 display-4 pb-2 fw-bold text-center"> CHAMP SELECT </h2>
        </div>
    </div>
    <div class="container text-center">
        <div class="row">
            <div class="col hero1 hero-general d-flex align-items-end justify-content-center fw-bold">
                Marketing <span class="text-orange">"GAFFIOT"</span>
            </div>
            <div class="col hero2 hero-general d-flex align-items-end justify-content-center fw-bold">
                Communication <span class="text-orange">"TANTHIEL"</span>
            </div>
        </div>
        <div class="row ">
            <div class="col hero3 hero-general d-flex align-items-end justify-content-center fw-bold">
                Dev <span class="text-orange">"MORGAUSE"</span>
            </div>
            <a class="col hero-general d-flex align-items-center justify-content-center fw-bold player-case" href="success.php">
                WANNA KNOW MORE ?
            </a>
        </div>
    </div>
    
</section>


<!-- Contact -->

<section class="bg-orange d-flex flex-row justify-content-evenly align-items-center row pb-1">
        <img src="images/newsletter.png" alt="" class="pt-3 pb-3 col-4 img-contact" >
    <div class="col-6">
        <h3 class="display-3 fw-bold">
            A la recherche d'un nouveau <br> <span class="text-white border-bottom border-dark-gray border-3">Teammate ?</span>
        </h3>
        <a type="button" class="btn btn-outline-dark-gray text-white btn-lg mt-4" href="contact.php">
            Let's team up !
        </a>
    </div>
</section>

<?php

include 'partials/footer.php';

?>



