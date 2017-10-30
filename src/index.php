<?php require 'inc/layouts/_l-head.php'; ?>

<div class="site-container">
    <?php require 'inc/layouts/_l-header.php'; ?>

    <main class="site-content" id="fullpage">

        <section class="section section--pres" data-anchor="presentation">
            <div class="section__container">
                <div class="col-left">
                    <h1>
                        Salut ! <img src="img/emojiHello.png" alt=""><br>
                        Moi c'est Georges.
                    </h1>
                    <h3>Je suis un chatbot mais pas que... Je sais faire plein d'autres choses</h3>
                    <a href="#messenger" class="btn">Jette un coup d'oeil</a>
                </div>
                <div class="col-right">
                    <img src="img/GrosLogo_HP.png" alt="">
                </div>
            </div>
        </section>

        <section class="section section--about" data-anchor="about">
            <div class="container">
                <div class="row">
                    <div class="col-xs12 col-md-push-1 col-md-4">
                        <div class="title">
                            <div class="index">01</div>
                            <h2>Parlons de moi...</h2>
                        </div>
                        <p>
                            Je suis un robot conçu et développé sur Facebook Messenger lors d’un hackathon, dédié au quotidien d’un étudiant du digital. L’idée est de m’associer à une machine à café. Parce qu’une machine à café connectée c'est bien mais qui en plus parle aux étudiants et les accompagne dans leur quotidien c'est encore mieux.
                        </p>
                    </div>
                    <div class="col-xs12 col-md-push-1 col-md-6">
                        <img src="img/macbook.png" alt="">
                    </div>
                </div>
            </div>
        </section>

        <section class="section section--spec" data-anchor="demo">
            <div class="container">
                <div class="row">
                    <div class="col-xs12 col-md-6">
                    <!-- TODO : importer iframe -->
                        <div class="iframe-container">
                            <img class="iframe-ratio" src="data:image/gif;base64,R0lGODlhEAAJAIAAAP///wAAACH5BAEAAAAALAAAAAAQAAkAAAIKhI+py+0Po5yUFQA7"/>
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/wf3Z803zd4g?ecver=1" frameborder="0" gesture="media" allowfullscreen></iframe>
                        </div>
                    </div>
                    <div class="col-xs12 col-md-push-1 col-md-5">
                        <div class="title">
                            <div class="index">02</div>
                            <h2>...Et de ce que je sais faire</h2>
                        </div>
                        <ul>
                            <li>J’apprends à te connaître et te suggère les meilleures boissons en fonction de tes préférences</li>
                            <li>Même à distance, confie moi ta commande… café, thés, chocolat, je m’occupe de tout !</li>
                            <li>Il fait froid aujourd’hui ? Tu viens de réveiller ? Je te recommande des boissons en fonction de ton environnement</li>
                            <li>Toi, étudiant à l’ECV digital : selon ton profil et tes  centres d’intérêts, je te recommande des contenus informatifs ou divertissant pendant que je prépare ta commande</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <section class="section section--team" data-anchor="team">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="center">
                            <div class="title">
                                <div class="index">03</div>
                                <h2>La team</h2>
                            </div>
                        </div>
                        <div class="team-container">
                            <div class="team">
                                <img src="img/Maxime.png" alt="">
                                <div class="team__name">Maxime diverres</div>
                                <div class="team__role">UX Designer</div>
                            </div>

                            <div class="team">
                                <img src="img/Kevin.png" alt="">
                                <div class="team__name">Kevin Loiseleur</div>
                                <div class="team__role">Développeur</div>
                            </div>

                            <div class="team">
                                <img src="img/Alex.png" alt="">
                                <div class="team__name">Alexandre Simonin</div>
                                <div class="team__role">Développeur</div>
                            </div>
                        </div>

                        <div class="team-container">
                            <div class="team">
                                <img src="img/Victor.png" alt="">
                                <div class="team__name">Victor Fuhrmann</div>
                                <div class="team__role">Content manager</div>
                            </div>

                            <div class="team">
                                <img src="img/Jigme.png" alt="">
                                <div class="team__name">Jigme Muccini</div>
                                <div class="team__role">Webdesigner</div>
                            </div>


                            <div class="team">
                                <img src="img/Georges.png" alt="">
                                <div class="team__name">Georges</div>
                                <div class="team__role">The bot</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section section--footer fp-auto-height" data-anchor="copyright">
            <?php require 'inc/layouts/_l-footer.php'; ?>
        </section>

    </main><!-- /.site-content -->
</div>

<?php require 'inc/layouts/_l-scripts.php'; ?>