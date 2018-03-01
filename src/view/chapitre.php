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
                        <ul class="blog-detail list-inline"> 
								<li><i class="fa fa-user"></i> Jean Forteroche</li> 
								<li><i class="fa fa-clock-o"></i> <?= htmlspecialchars($data['datePost_fr']) ?></li> 
							</ul> 
                        
                        <p><?= htmlspecialchars($data['extract_content']) ?>...<a href="index.php?action=postView&amp;id=<?= $data['id']?>" class="heading_color"></a></p>
                        <a class="btn btn-read" href="index.php?action=postView&amp;id=<?= $data['id']?>">Lire l'intégralité</a>
                        
                        <hr>

                        <span class="pull-right">Extrait du livre :<strong><em>"Billet simple pour l'Alaska"</em></strong></span> 
                    </div>
                </div>
            </div>
        </div>

   
    <?php } $posts->closeCursor(); ?>
 
</section>
 