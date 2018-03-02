<?php $title = 'Jean Forteroche | Commentaires'; ?>

<?php ob_start(); ?>

<?php require('./src/view/nav_connected.php'); ?>
<div class="container">
    <section id="console_admin">
        <h2 span class="console">Commentaires</h2>
        <div class="navigation text-left">
            <div class="row">
                <div class="col-lg-12 comments">
                    <h3>Commentaires signalés</h3>
				<hr>
				</div>
			</div>
        </div>
    
               
			<?php while ($data = $commentsReport->fetch())
			{?>
				<div class="article_admin">
					<div class="row">
						<p class="col-lg-2"><?= htmlspecialchars($data['pseudo']) ?></p>
						<div class="description_article_admin">
							<p class="col-lg-3 col-sm-9"><?= htmlspecialchars($data['content']) ?></p>
							<p class="col-lg-2"><?= htmlspecialchars($data['dateComment_fr'])?></p>
						</div>
						<div class="col-lg-4 col-sm-12 col-xs-8">
							<div class="  col-lg-4 col-sm-2 col-xs-4">
								<div class="boutton_restored_admin">
									<a href="index.php?action=restoreCommentAdmin&amp;id=<?= $data['id'] ?>" class="btn btn-sm btn-warning"><span class="glyphicon glyphicon-ok-sign"></span><span class="text_button_admin_comments"> Restaurer<span></a>
								</div>
							</div>
                                
							<div class="col-lg-6 col-sm-3 col-xs-4">
									<div class="button_comment_admin"> 
										<a href="index.php?action=postView&amp;id=<?= $data['id_post'] ?>" class="btn btn-sm btn-default"><span class="glyphicon glyphicon-comment"></span><span class="text_button_admin_comments"> Voir le commentaire</span></a>
									</div>
							</div>
							<div class="col-sm-2 col-xs-2">
								<div class="button_remove_admin">
									<a href="index.php?action=removeCommentAdmin&amp;id=<?= $data['id'] ?>" class="btn btn-sm btn-danger"><span class="glyphicon glyphicon-remove"></span><span class="text_button_admin_comments">Suprimer<span></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			<?php }
			$commentsReport->closeCursor(); ?>
		
		<div class="comments_admin">
			<div class=row>
				<div class="col-lg-12">
				<h3>Autres Commentaires</h3>
				<hr>
				</div>
			</div>
			<?php while ($data = $comments->fetch())
			{?>
				<div class="article_admin">
					<div class="row">
						<p class="col-lg-2"><?= htmlspecialchars($data['pseudo']) ?></p>
						<div class="description_article_admin">
							<p class="col-lg-3 col-sm-9"><?= htmlspecialchars($data['content']) ?></p>
							<p class="col-lg-2"><?= htmlspecialchars($data['dateComment_fr'])?></p>
						</div>
						<div class="col-lg-4 col-sm-12 col-xs-8">
							<div class="col-lg-offset-4 col-lg-6 col-sm-3 col-xs-5">
								<div class="button_comment_admin"> 
									<a href="index.php?action=postView&amp;id=<?= $data['id_post'] ?>" class="btn btn-sm btn-default"><span class="glyphicon glyphicon-comment"></span><span class="text_button_admin_comments"> Voir le commentaire</span></a>
								</div>
							</div>
							<div class="col-sm-2 col-xs-2">
								<div class="button_remove_admin">
									<a href="index.php?action=removeCommentAdmin&amp;id=<?= $data['id'] ?>" class="btn btn-sm btn-danger"><span class="glyphicon glyphicon-remove"></span><span class="text_button_admin_comments">Suprimer</span></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			<?php }
			$comments->closeCursor(); ?>
		</div>
                        </div>
                    </div>
            </div>
            </div>
        </div>
	</section>
</div>
<?php require('./src/view/footer.php'); ?>

<?php $content = ob_get_clean(); ?>

<?php require('./src/view/template.php'); ?>
