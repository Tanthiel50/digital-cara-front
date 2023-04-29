<?php

include 'partials/header.php';

?>

<!-- HERO -->
<section class="text-white row pt-5 align-items-center justify-content-center hero-project">
    <h1 class="col-lg-3 col-7">PICK YOUR <span class="text-orange">CHAMP</span> </h1>
    <div class="col-lg-8 col-4 d-flex align-items-end justify-content-end row">
        <img src="./images/cyberpunk2.jpg" class="col img-fluid pe-2 col-6" alt="...">
        <img src="./images/japanese1.jpg" class="col img-fluid pe-2 project-img2 col-4" alt="...">
        <img src="./images/knight4.jpg" class="col img-fluid project-img3 col-2" alt="...">
    </div>
</section>

<!-- MODALE -->
<section>
    <div class="container">
        <div class="d-flex align-items-end justify-content-center pb-5">
            <h2 class="border-bottom border-orange border-1 pb-2 fw-bold text-white text-center">LES CHAMPIONS DISPONIBLES</h2>
        </div>
    <div class="row g-5">
        <div class="col-lg-4 col-md-6">
            <div class="card bg-orange"> 
                <img src="./images/knight4.jpg" class="card-img-top"/>
                <div class="card-body text-center">
                    <h5>Marketing <span class="text-white">Gaffiot</span></h5>
                </div>
                <div class="card-footer p-3 text-center">
                    <button type="button" class="btn btn-sm-dark w-75" data-bs-toggle="modal" data-bs-target="#cara">Gameplay</button>
                </div>
            </div>
        </div>
        <div class="modal fade" id="cara" data-bs-backdrop="static">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
    
                    <!-- Header -->
                    <div class="modal-header">
                        <h5 class="modal-title text-center">
                            Marketing Gaffiot
                        </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal">
                            <span>&times;</span>
                        </button>
                    </div>
    
                <!-- Body -->
                    <div class="modal-body w-100">
                        <img src="./images/knight4.jpg" class="w-100"/>
                        <p>En véritable paladin heal, Gaffiot est sur tous les fronts ! <br> Elle analyse tout et élabore les meilleures
                            stratégies pour son équipe. Elle fait son possible pour promouvoir son équipe et la mener vers les sommets. Sa distance
                            lui permet d'avoir une vision globale et d'orienter les stratégies vers la bonne direction. Elle sait
                            identifier les points à viser et est aussi en mesure d'analyser les échecs, prendre en comptes les capacités de 
                            son équipe pour élaborer de nouvelles stratégies. Elle écoute tout et n'hésite pas à tester de nouvelles tactiques.
                            Son but premier est de rester en accord avec son équipe et de la mener la plus loin possible.
                            <p> <b>Fun fact :</b> Gaffiot est le premier personnage joué par Cara et son nom provient tout simplement du dictionnaire latin/français qui se trouvait sur son étagere devant elle.</p>
                        </p>
                    </div>
    
                <!-- Footer -->
                    <div class="modal-footer d-flex justify-content-center">
                        <a class="btn w-75 btn-sm-dark " data-bs-toggle="tooltip" data-bs-placement="bottom" href="contact.html">I pick this character</a>
                    </div>
    
                </div>
            </div>
        </div>
    
        <div class="col-lg-4 col-md-6">
            <div class="card bg-orange"> 
                <img src="./images/japanese1.jpg" class="card-img-top"/>
                <div class="card-body text-center">
                    <h5>Communication <span class="text-white">Tanthiel</span></h5>
                </div>
                <div class="card-footer p-3 text-center">
                    <button type="button" class="btn btn-sm-dark w-75" data-bs-toggle="modal" data-bs-target="#tanthiel">Gameplay</button>
                </div>
            </div>
        </div>
        <div class="modal fade" id="tanthiel" data-bs-backdrop="static">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
    
                    <!-- Header -->
                    <div class="modal-header">
                        <h5 class="modal-title text-center">
                            Communication Tanthiel
                        </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal">
                            <span>&times;</span>
                        </button>
                    </div>
    
                <!-- Body -->
                    <div class="modal-body w-100">
                        <img src="./images/japanese1.jpg" class="w-100"/>
                        <p>Un monk qui sait tout faire. <br> Elle est capable de soutenir sa team mais également se mettre en avant en passant
                            en front-line. Lorsqu'elle agit en première ligne, elle diffuse et met en avant sa team avec ses talents. Elle
                            sait les meilleurs outils et est capable de réagit très rapidement pour retourner en back lane pour s'assurer que
                            toute la team communique efficacement entre elle et surtout qu'elle apparait sous son meilleur jour. Elle sait trouver
                            les bons mots et les bons supports. La plus grande capacité de Tanthiel est d'être vive et tout comme Gaffiot, d'avoir
                            une bonne vision d'ensemble.
                            <p> <b>Fun fact :</b> Tanthiel est apparue car les compétences de Gaffiot n'était pas suffisante et à force d'entrainement, elle est devenue un personnage très puissant.</p>
                        </p>
                    </div>
    
                <!-- Footer -->
                    <div class="modal-footer d-flex justify-content-center">
                        <a class="btn w-75 btn-sm-dark " data-bs-toggle="tooltip" data-bs-placement="bottom" href="contact.html">I pick this character</a>
                    </div>
    
                </div>
            </div>
        </div>
    
        <div class="col-lg-4 col-md-6">
            <div class="card bg-orange"> 
                <img src="./images/cyberpunk2.jpg" class="card-img-top"/>
                <div class="card-body text-center">
                    <h5>Dev <span class="text-white">Morgause</span></h5>
                </div>
                <div class="card-footer p-3 text-center">
                    <button type="button" class="btn btn-sm-dark w-75" data-bs-toggle="modal" data-bs-target="#morgause">Gameplay</button>
                </div>
            </div>
        </div>
        <div class="modal fade" id="morgause" data-bs-backdrop="static">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
    
                    <!-- Header -->
                    <div class="modal-header">
                        <h5 class="modal-title text-center">
                            Dev Morgause
                        </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal">
                            <span>&times;</span>
                        </button>
                    </div>
    
                <!-- Body -->
                    <div class="modal-body w-100">
                        <img src="./images/cyberpunk2.jpg" class="w-100"/>
                        <p>La hackeuse fait ses premiers pas. <br> Elle s'entraine tous les jours pour qu'elle puisse faire ses débuts au sein d'une team. Elle ne dispose pas d'autant d'expériences que les autres champions et pourtant elle se 
                            sent prête à soutenir son équipe avec ses connaissances. Pas encore prête à diriger, elle écoutera surtout les conseils
                            du teamleader afin de progresser le plus rapidement possible.
                            <p> <b>Fun fact :</b> Morgause n'attend qu'une team pour avoir des fun fact à ajouter à son compteur !</p>
                        </p>
                    </div>
    
                <!-- Footer -->
                    <div class="modal-footer d-flex justify-content-center">
                        <a class="btn w-75 btn-sm-dark " data-bs-toggle="tooltip" data-bs-placement="bottom" href="contact.html">I pick this character</a>
                    </div>
    
                </div>
            </div>
        </div>
    </div>
</section>

<!-- SUCCESS -->
<section class="pt-5 pb-5">
    <div class="container">
        <div class="d-flex align-items-end justify-content-center pb-5">
            <h2 class="border-bottom border-orange border-1 pb-2 fw-bold text-white text-center">SUCCESS</h2>
        </div>
    <div class="row g-5">
        <div class="col-lg-4 col-md-6">
            <div class="card bg-white"> 
                <img src="./images/success/digital-cara-back.png" class="card-img-top"/>
                <div class="card-body text-center">
                    <h5>Digital <span class="text-orange">Cara</span></h5>
                </div>
                <div class="card-footer p-3 text-center">
                    <button type="button" class="btn btn-sm-dark w-75" data-bs-toggle="modal" data-bs-target="#digital-cara">Let me see</button>
                </div>
            </div>
        </div>
        <div class="modal fade" id="digital-cara" data-bs-backdrop="static">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
    
                    <!-- Header -->
                    <div class="modal-header">
                        <h5 class="modal-title text-center">
                            Digital Cara
                        </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal">
                            <span>&times;</span>
                        </button>
                    </div>
    
                <!-- Body -->
                    <div class="modal-body w-100">
                        <img src="./images/success/digital-cara-back.png" class="w-100"/>
                        <p>Une version un peu différente de ce site.
                            Le projet initial était de faire une blog où il serait possible de publier des articles de blog et des projets via
                            un dashboard. Les utilisateurs devaient également être en mesure de poster et gérer les commentaires via leur dashbord.
                            Le projet avait pour but d'utiliser :
                            <ul>
                                <li>Bootstrap</li>
                                <li>PHP</li>
                            </ul>
                            Ce site utilise donc une version simplifié de cette version. Le projet est toujours en cours.
                        </p>
                    </div>
    
                <!-- Footer -->
                    <div class="modal-footer d-flex justify-content-center">
                        <a class="btn w-75 btn-sm-dark " data-bs-toggle="tooltip" data-bs-placement="bottom" href="https://github.com/Tanthiel50/digital-cara" target="_blank">Digital Cara Github</a>
                    </div>
    
                </div>
            </div>
        </div>

        <div class="col-lg-4 col-md-6">
            <div class="card bg-white"> 
                <img src="./images/success/hangman.png" class="card-img-top"/>
                <div class="card-body text-center">
                    <h5>Hangman <span class="text-orange">Game</span></h5>
                </div>
                <div class="card-footer p-3 text-center">
                    <button type="button" class="btn btn-sm-dark w-75" data-bs-toggle="modal" data-bs-target="#hangman">Let me see</button>
                </div>
            </div>
        </div>
        <div class="modal fade" id="hangman" data-bs-backdrop="static">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
    
                    <!-- Header -->
                    <div class="modal-header">
                        <h5 class="modal-title text-center">
                            Hangman Game
                        </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal">
                            <span>&times;</span>
                        </button>
                    </div>
    
                <!-- Body -->
                    <div class="modal-body w-100">
                        <img src="./images/success/hangman.png" class="w-100"/>
                        <p>Un projet personnel où il s'agissait de créer un jeu de pendu. La création était libre, j'ai donc décidé
                            de m'éloigner du thème classique du pendu. Le pendu est donc Doc pendu aux aiguilles d'une horloge et le thème du pendu
                            est donc sur l'univers cinématographique.
                            <ul>
                                <li>HTML</li>
                                <li>CSS</li>
                                <li>GIT</li>
                                <li>Github</li>
                                <li>JS</li>
                            </ul>
                            
                        </p>
                    </div>
    
                <!-- Footer -->
                    <div class="modal-footer d-flex justify-content-center">
                        <a class="btn w-75 btn-sm-dark " data-bs-toggle="tooltip" data-bs-placement="bottom" href="https://github.com/Tanthiel50/Hangman" target="_blank">Hangman Game</a>
                    </div>
    
                </div>
            </div>
        </div>
    
        <div class="col-lg-4 col-md-6">
            <div class="card bg-white"> 
                <img src="./images/success/poo-project.png" class="card-img-top"/>
                <div class="card-body text-center">
                    <h5>Subscription <span class="text-orange">Project</span></h5>
                </div>
                <div class="card-footer p-3 text-center">
                    <button type="button" class="btn btn-sm-dark w-75" data-bs-toggle="modal" data-bs-target="#subscription">Let me see</button>
                </div>
            </div>
        </div>
        <div class="modal fade" id="subscription" data-bs-backdrop="static">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
    
                    <!-- Header -->
                    <div class="modal-header">
                        <h5 class="modal-title text-center">
                            Subscription Project
                        </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal">
                            <span>&times;</span>
                        </button>
                    </div>
    
                <!-- Body -->
                    <div class="modal-body w-100">
                        <img src="./images/success/poo-project.png" class="w-100"/>
                        <p>Un projet guidé proposé durant la formation Believemy. Il s'agissait d'utiliser les
                            différentes notions apprises qui étaient
                            <ul>
                                <li>POO</li>
                                <li>PHP</li>
                            </ul>
                            
                        </p>
                    </div>
    
                <!-- Footer -->
                    <div class="modal-footer d-flex justify-content-center">
                        <a class="btn w-75 btn-sm-dark " data-bs-toggle="tooltip" data-bs-placement="bottom" href="https://github.com/Tanthiel50/Small-poo-project-subscription/blob/main/index.php" target="_blank">Subscription project Github</a>
                    </div>
    
                </div>
            </div>
        </div>
    
        <div class="col-lg-4 col-md-6">
            <div class="card bg-white"> 
                <img src="./images/success/netflix.png" class="card-img-top"/>
                <div class="card-body text-center">
                    <h5>Netflix <span class="text-orange">Connection</span></h5>
                </div>
                <div class="card-footer p-3 text-center">
                    <button type="button" class="btn btn-sm-dark w-75" data-bs-toggle="modal" data-bs-target="#netflix">Let me see</button>
                </div>
            </div>
        </div>
        <div class="modal fade" id="netflix" data-bs-backdrop="static">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
    
                    <!-- Header -->
                    <div class="modal-header">
                        <h5 class="modal-title text-center">
                            Netflix Connection
                        </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal">
                            <span>&times;</span>
                        </button>
                    </div>
    
                <!-- Body -->
                    <div class="modal-body w-100">
                        <img src="./images/success/netflix.png" class="w-100"/>
                        <p>Un projet guidé proposé durant la formation Believemy. Il s'agissait d'utiliser les
                            différentes notions apprises qui étaient
                            <ul>
                                <li>SQL</li>
                                <li>PHP</li>
                            </ul>
                            
                        </p>
                    </div>
    
                <!-- Footer -->
                    <div class="modal-footer d-flex justify-content-center">
                        <a class="btn w-75 btn-sm-dark " data-bs-toggle="tooltip" data-bs-placement="bottom" href="https://github.com/Tanthiel50/netflixconnection" target="_blank">Netflix connection Github</a>
                    </div>
    
                </div>
            </div>
        </div>

        <div class="col-lg-4 col-md-6">
            <div class="card bg-white"> 
                <img src="./images/success/bitly.png" class="card-img-top"/>
                <div class="card-body text-center">
                    <h5>URL <span class="text-orange">Shortcut</span></h5>
                </div>
                <div class="card-footer p-3 text-center">
                    <button type="button" class="btn btn-sm-dark w-75" data-bs-toggle="modal" data-bs-target="#url">Let me see</button>
                </div>
            </div>
        </div>
        <div class="modal fade" id="url" data-bs-backdrop="static">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
    
                    <!-- Header -->
                    <div class="modal-header">
                        <h5 class="modal-title text-center">
                            URL Shortcut
                        </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal">
                            <span>&times;</span>
                        </button>
                    </div>
    
                <!-- Body -->
                    <div class="modal-body w-100">
                        <img src="./images/success/bitly.png" class="w-100"/>
                        <p>Un projet guidé proposé durant la formation Believemy. Il s'agissait d'utiliser les
                            différentes notions apprises qui étaient
                            <ul>
                                <li>SQL</li>
                                <li>PHP</li>
                            </ul>
                            
                        </p>
                    </div>
    
                <!-- Footer -->
                    <div class="modal-footer d-flex justify-content-center">
                        <a class="btn w-75 btn-sm-dark " data-bs-toggle="tooltip" data-bs-placement="bottom" href="https://github.com/Tanthiel50/URL-shortcut" target="_blank">URL Shortcut Github</a>
                    </div>
    
                </div>
            </div>
        </div>

        <div class="col-lg-4 col-md-6">
            <div class="card bg-white"> 
                <img src="./images/success/mercury.png" class="card-img-top"/>
                <div class="card-body text-center">
                    <h5>Mercury <span class="text-orange">File</span></h5>
                </div>
                <div class="card-footer p-3 text-center">
                    <button type="button" class="btn btn-sm-dark w-75" data-bs-toggle="modal" data-bs-target="#mercury">Let me see</button>
                </div>
            </div>
        </div>
        <div class="modal fade" id="mercury" data-bs-backdrop="static">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
    
                    <!-- Header -->
                    <div class="modal-header">
                        <h5 class="modal-title text-center">
                            Mercury File
                        </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal">
                            <span>&times;</span>
                        </button>
                    </div>
    
                <!-- Body -->
                    <div class="modal-body w-100">
                        <img src="./images/success/mercury.png" class="w-100"/>
                        <p>Un projet guidé proposé durant la formation Believemy. Il s'agissait d'utiliser les
                            différentes notions apprises qui étaient
                            <ul>
                                <li>PHP</li>
                            </ul>
                            
                        </p>
                    </div>
    
                <!-- Footer -->
                    <div class="modal-footer d-flex justify-content-center">
                        <a class="btn w-75 btn-sm-dark " data-bs-toggle="tooltip" data-bs-placement="bottom" href="https://github.com/Tanthiel50/Mercury-Files" target="_blank">Mercury File Github</a>
                    </div>
    
                </div>
            </div>
        </div>

        <div class="col-lg-4 col-md-6">
            <div class="card bg-white"> 
                <img src="./images/success/weather.png" class="card-img-top"/>
                <div class="card-body text-center">
                    <h5>Weather <span class="text-orange">API</span></h5>
                </div>
                <div class="card-footer p-3 text-center">
                    <button type="button" class="btn btn-sm-dark w-75" data-bs-toggle="modal" data-bs-target="#weather">Let me see</button>
                </div>
            </div>
        </div>
        <div class="modal fade" id="weather" data-bs-backdrop="static">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
    
                    <!-- Header -->
                    <div class="modal-header">
                        <h5 class="modal-title text-center">
                            Weather API
                        </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal">
                            <span>&times;</span>
                        </button>
                    </div>
    
                <!-- Body -->
                    <div class="modal-body w-100">
                        <img src="./images/success/weather.png" class="w-100"/>
                        <p>Un projet guidé proposé durant la formation Believemy. Il s'agissait d'utiliser les
                            différentes notions apprises qui étaient
                            <ul>
                                <li>JS</li>
                                <li>API</li>
                            </ul>
                            
                        </p>
                    </div>
    
                <!-- Footer -->
                    <div class="modal-footer d-flex justify-content-center">
                        <a class="btn w-75 btn-sm-dark " data-bs-toggle="tooltip" data-bs-placement="bottom" href="https://github.com/Tanthiel50/weather" target="_blank">Weather API Github</a>
                    </div>
    
                </div>
            </div>
        </div>

        
</section>

<?php

include 'partials/footer.php';

?>