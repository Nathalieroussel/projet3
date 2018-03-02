<?php $title = 'Jean Forteroche | Tableau de bord'; ?>

<?php ob_start(); ?>

<?php require('./src/view/nav_connected.php'); ?>

<div class="jumbotron">
    <section id="console_admin">
        <h2 span class="console">Tableau de bord</h2>
        <div class="navigation text-center">
            <div class="row">
                <div class="col-lg-12">
                    <a href="index.php?action=listCommentsAdmin" class="btn btn-defaut btn-lg"> <span class="glyphicon glyphicon-eye-open"> </span><span class="text_button_admin">Voir tous les commentaires</span></a>
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <div class="articles_admin">
                <div class="row">
                    <div class="col-lg-12">
                        <table class="table table-bordered">
                            <thead>
                                <tr class="head_table">
                                    <td>Liste des chapitres</td>
                                    <td>Extrait</td>
                                    <td>Date de publication</td>
                                    <td>Modification chapitre</td>
                                    <td>Suppression chapitre</td>
                                </tr>
                            </thead>

                            <tbody>
                                <?php while ($data = $posts->fetch()){?>
                                <tr>

                                    <td>
                                        <a href="index.php?action=postView&amp;id=<?= $data['id'] ?>">
                                            <?= htmlspecialchars($data['title']) ?>
                                        </a>
                                    </td>


                                    <td>
                                        <em><?= htmlspecialchars($data['extract_content']) ?>...</em>
                                    </td>


                                    <td class="contenu_center">
                                        <?= htmlspecialchars($data['datePost_fr'])?>
                                    </td>

                                    <td class="contenu_center">
                                        <a href="index.php?action=modifPostAdmin&amp;id=<?= $data['id'] ?>" class="btn btn-sm btn-warning"><span class="glyphicon glyphicon-pencil"></span><span class="text_button_admin"> modifier</span></a>
                                    </td>

                                    <td class="contenu_center">
                                        <a href="index.php?action=removePostAdmin&amp;id=<?= $data['id'] ?>" class="btn btn-sm btn-danger"><span class="glyphicon glyphicon-remove"></span><span class="text_button_admin">Suprimer</span></a>
                                    </td>


                                    <?php }  $posts->closeCursor(); ?>
                            </tbody>
                        </table>
                        <div class="col-lg-3 col-sm-5 col-xs-8">
                            <div class="col-lg-6 col-sm-5 col-xs-5">
                            </div>
                            <div class="button_delete_list-post_admin">

                            </div>
                        </div>
                    </div>
                </div>
                <div class="row" id="add_article">
                    <a href="index.php?action=newPostAdmin" class="btn btn-success btn-lg"> <span class="glyphicon glyphicon-plus"> </span><span class="text_button_admin">Ajouter un chapitre</span></a>
                </div>
            </div>
        </div>
    </section>


    <?php require('./src/view/footer.php'); ?>

    <?php $content = ob_get_clean(); ?>

    <?php require('./src/view/template.php'); ?>
