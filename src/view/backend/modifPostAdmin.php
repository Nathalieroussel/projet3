<?php $title = 'Jean Forteroche | Administration: modification de chapitre';?>

<?php ob_start(); ?>

<?php require('./src/view/nav_connected.php'); ?>
<div class="container">
	<section id="modification_chapitre">
		<h1>Modifier un chapitre</h1>
		<form method="post" action="index.php?action=sendModifPostAdmin&amp;id=<?= $_GET['id'] ?>" class=add_post>
			<div class="tinymce">
				<div class="row">
					<div class="col-lg-12">
						<label for="pseudo" style="color:silver;" class="label_add_post">Titre: </label>
						<div class="title_new_article">
							<input type="text" name="title" value="<?= htmlspecialchars($modifPost['title']) ?>" class="form-control">
						</div>
					</div>
				</div>
		    	<textarea id="textarea" name="content"><?= htmlspecialchars($modifPost['content']) ?></textarea>
				<div class="boutton_save_new_article">
					<button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-download-alt"></span> Enregistrer</a></button>
				</div>
		</form>
	</section>
</div>

<?php require('./src/view/footer.php'); ?>

<?php $content = ob_get_clean(); ?>

<?php require('./src/view/template.php'); ?>
