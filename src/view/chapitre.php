<section id="blog" class="section-padding wow fadeInUp delay-05s">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h2 class="service-title pad-bt15">CHAPITRES DU LIVRE</h2>
                <hr class="bottom-line">
            </div>
        </div>
    </div>
       
       
          <?php while ($data = $posts->fetch())
			 {?>
       
        <div class="container">
           
            <div class="row blog-row">
              
                <div class="col-md-6 col-sm-12 col-xs-12 margin_bottom30">
                    
				<img class="img-responsive center-block" src="public/img/alaska.jpg" height="250">
                </div>
                   
                   
                    <div class="blog-content">
                     <div class="col-md-6 col-sm-12 col-xs-12">
                     
                        <h3> <?= htmlspecialchars($data['title']) ?></h3>
                        <p><?= htmlspecialchars($data['datePost_fr']) ?></p>
                        <p><?= htmlspecialchars($data['extract_content']) ?>...<a href="index.php?action=postView&amp;id=<?= $data['id']?>" class="heading_color"></a></p>
                        <a class="btn btn-read" href="index.php?action=postView&amp;id=<?= $data['id']?>">Lire l'intégralité</a>
                        <hr>

                        <span class="pull-right">Par : <strong>Jean FORTEROCHE</strong></span> 
                    </div>
                </div>
            </div>
        </div>

   
    <?php } $posts->closeCursor(); ?>
 
</section>
 