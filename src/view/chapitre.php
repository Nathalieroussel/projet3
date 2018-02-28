<section id="blog" class="section-padding wow fadeInUp delay-05s">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h2 class="service-title pad-bt15">CHAPITRES DU LIVRE</h2>
                <hr class="bottom-line"
                    </div>
            </div>
            
            </div>

            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="blog-sec">
                    
                
                  
             
          

            

        <?php while ($data = $posts->fetch())
			 {?>
       <div class="container">
        <div class="article">
            <a href="index.php?action=postView&amp;id=<?= $data['id'] ?>">
                <div class="row">
                    <h3 class="col-lg-12">
                        <?= htmlspecialchars($data['title']) ?>
                    </h3>
                </div>
                <div class="row">
                    <p class="col-lg-9">
                        <?= htmlspecialchars($data['extract_content']) ?>...</p>
                    <ul class="list-unstyled col-lg-2">
                        <li>
                            <?= htmlspecialchars($data['datePost_fr']) ?>
                        </li>
                        <li>Jean Forteroche</li>
                    </ul>
                </div>
            </a>
        </div>
    </div>

        <?php }
			$posts->closeCursor(); ?>
    </section>







 