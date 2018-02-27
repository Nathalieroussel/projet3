<section id="contact" class="section-padding wow fadeInUp delay-05s">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center white">
                <h2 class="service-title pad-bt15">Me contacter</h2>
                <p class="sub-title pad-bt15">Vous souhaitez en savoir plus sur moi? Avoir plus d'informations?</p>
                <hr class="bottom-line white-bg">
            </div>
            <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="loction-info white">
                    <p><i class="fa fa-map-marker fa-fw pull-left fa-2x"></i>68 Rue de la Liberté<br>FRANCE, 24000 PERIGUEUX</p>
                    <p><i class="fa fa-envelope-o fa-fw pull-left fa-2x"></i>jeanforteroche_book@gmail.com</p>
                    <p><i class="fa fa-phone fa-fw pull-left fa-2x"></i>06 33 49 57 18</p>
                </div>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-12">
                <div id="sendmessage">Parfait ! Votre message a bien été envoyé!</div>
                <div id="errormessage">Une erreur est survenue, veuillez recommencer SVP!</div>
                <form action="mail.php" method="post">
                    <div class="col-md-6 padding-right-zero">
                        <div class="form-group">
                            <input type="text" name="name" class="form-control" id="name" placeholder="Votre nom" data-rule="minlen:4" data-msg="Veuillez saisir au moins 4 caractères" />
                            <div class="validation"></div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="email" class="form-control" name="email" id="email" placeholder="Votre email" data-rule="email" data-msg="Entrer un email valide" />
                            <div class="validation"></div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <input type="text" class="form-control" name="subject" id="subject" placeholder="Sujet" data-rule="minlen:4" data-msg="Merci de saisir au moins 8 caractères" />
                            <div class="validation"></div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Merci d'écrire votre message" placeholder="Message"></textarea>
                            <div class="validation"></div>
                        </div>
                        <button type="submit" class="btn btn-primary btn-submit">ENVOYER</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
