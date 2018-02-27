<?php $title = 'Jean Forteroche | Portail de connexion'; ?>

<?php ob_start(); ?>
<?php require('./src/view/nav.php'); ?>
<section id="login">
    <div class="header2">
        <div class="bg-color2">
            <div class="container">
                <div class="row ">
                    <div class="col-lg-6 col-sm-12 bloc_login">
                        <h1 span class="title_admin">Connexion</h1>
                        <form action="index.php?action=verifyLogin" method="post" class="add_comment">
                            <div class="form">
                                <div class="form-group">
                                    <label for="texte">Pseudo: </label>
                                    <input id="pseudo" type="text" name="pseudo" class="form-control" width="200px" ;>
                                </div>
                                <div class="form-group">
                                    <label for="texte">Mot de passe: </label>
                                    <input id="text" type="password" name="password" class="form-control">
                                </div>
                                <button class="btn btn-defaut btn-login" type="submit">Se connecter</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php require('./src/view/footer.php'); ?>

<?php $content = ob_get_clean(); ?>

<?php require('./src/view/template.php'); ?>
