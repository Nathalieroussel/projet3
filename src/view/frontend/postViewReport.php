<?php $title = 'Jean Forteroche | chapitre'; ?>

<?php ob_start(); ?>

<?php require('./src/view/nav_chapitre.php'); ?>

	<section id class="report">
	<div class="container">
		<div class="comments">
			<h2>Commentaires</h2>
			<hr>
			<?php while ($data = $comments->fetch())
			{ ?>
				<div class="comment">
					<div class="row">
						<h4 class="col-lg-10"><?= htmlspecialchars($data['pseudo']) ?><br>Le <?= $data['dateComment_fr'] ?> :</h4>
					</div>
					<div class="row">
						<p class="col-lg-10 col-sm-10 col-xs-8 "><?= htmlspecialchars($data['content']) ?></p>
						<div class="col-lg-2">
							<div class="button_report">
								<a href="index.php?action=reportComment&amp;id=<?= $data['id'] ?>&amp;postid=<?= $data['id_post'] ?>" class="btn btn-sm btn-danger"><span class="glyphicon glyphicon-exclamation-sign"></span> Signaler</a>
							</div>
						</div>
					</div>
				</div>
			<?php } $comments->closeCursor(); ?> 
			<p class="comment_report"><span class="glyphicon glyphicon-exclamation-sign"></span> Le commentaire à bien était signalé</p>
		</div>
		<form action="index.php?action=addCommentView&amp;id=<?= $post['id'] ?>" method="post" class="add_comment">
			<div class="row">
				<div class="col-lg-12">
					<br>
				<div class="form">
					<h2>Ajouter un commentaire</h2>
					<hr>
					<div class="form-group">
						<div class="row">
				      		<div class="col-lg-6">
					      		<label for="pseudo">pseudo: </label>
					     		<input id="pseudo" type="text" name="pseudo" class="form-control";>
					     	</div>
					     </div>
					     <div class="row">
					     	<div class="col-lg-12">
					     		<label for="content">message: </label>
					     		<textarea id="content" type="text" name="content" rows="3" class="form-control";></textarea>
					     	</div>
					     </div>
			   		</div>
			   		<button  class="btn btn-default" type="submit">Envoyer</button>
					</div>
				</div>
			</div>	
		</form>
        </div>
	</section>


<?php require('./src/view/footer.php'); ?>

<?php $content = ob_get_clean(); ?>

<?php require('./src/view/template.php'); ?>
