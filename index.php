<?php
require('src/controler/frontend/FrontendController.php');
require('src/controler/backend/BackendController.php');


 


/*------------------------Affichage visiteur Partie------------------------*/
try {
	if (isset($_GET['action'])) {
		if ($_GET['action'] == 'pageAccueil') {
			$frontendController = new FrontendController();
			$frontendController->pageAccueil();
		}
		elseif ($_GET['action'] == 'postView' ) {
			if (isset($_GET['id']) && $_GET['id'] > 0 && !isset($_GET['report'])) {
				$frontendController = new FrontendController();
				$frontendController->postview();
			}
			elseif (isset($_GET['id']) && $_GET['id'] > 0 && isset($_GET['report']) && $_GET['report'] = true ) {
				$frontendController = new FrontendController();
				$frontendController->postviewReport();
			}
			else {
				throw new Exception('L\'id du billet est invalide');	
			}
		}
		elseif ($_GET['action'] == 'addCommentView') {
            if (isset($_GET['id']) && $_GET['id'] > 0) {
                if (! empty($_POST['pseudo']) && ! empty($_POST['content'])) {
                	$frontendController = new FrontendController();
                    $frontendController->addComment($_GET['id'], $_POST['pseudo'], $_POST['content']);
                }
                else {
                    throw new Exception('Tous les champs ne sont pas remplis !');
                }
            }    
        }
        elseif ($_GET['action'] == 'reportComment') {
            if (isset($_GET['id']) && $_GET['id'] > 0) {
            	if (isset($_GET['postid']) && $_GET['postid'] > 0) {
                	$frontendController = new FrontendController();
                    $frontendController->reportComment($_GET['id'],$_GET['postid']);
                }
                else { 
                	throw new Exception('L\'id de l\'article n\'est pas valide');
                }
            }
            else {
                    throw new Exception('L\'id du commentaire n\'est pas valide');
            }   
        }
		elseif ($_GET['action'] == 'loginView' ) {
			$frontendController = new FrontendController();
			$frontendController->loginView();
		}
		elseif ($_GET['action'] == 'verifyLogin' ) {
			if (! empty($_POST['pseudo']) && ! empty($_POST['password'])) {
				$frontendController = new FrontendController();
				$frontendController->verifyLogin($_POST['pseudo'], $_POST['password']);
			}
			else {
				throw new Exception('identifiant manquant');
			}
		}
		elseif ($_GET['action'] == 'legalNoticeView' ) {
			$frontendController = new FrontendController();
			$frontendController->legalNoticeView();
		}
        
       
        
/*------------------------Administration Partie------------------------*/
		elseif ($_GET['action'] == 'listPostsAdmin') {
			$backendController = new BackendController();
			$backendController->listPostsAdmin();
		}
		elseif ($_GET['action'] == 'listCommentsAdmin') {
			$backendController = new BackendController();
			$backendController->listCommentsAdmin(); 
		}
		elseif ($_GET['action'] == 'restoreCommentAdmin') {
            if (isset($_GET['id']) && $_GET['id'] > 0) {
                	$backendController = new backendController();
                    $backendController->restoreCommentAdmin($_GET['id']);
            }
            else {
                    throw new Exception('L\'id n\'est pas valide');
            }               
        }
        elseif ($_GET['action'] == 'addPostAdmin') {
        	if (! empty($_POST['title']) && ! empty($_POST['content'])) {
              	$backendController = new backendController();
                $backendController->addPost($_POST['title'], $_POST['content']);
            }
            else {
                throw new Exception('Tous les champs ne sont pas remplis !');
            }   
        }
        elseif ($_GET['action'] == 'removeCommentAdmin') {
            if (isset($_GET['id']) && $_GET['id'] > 0) {
                	$backendController = new backendController();
                    $backendController->removeCommentAdmin($_GET['id']);
            }
            else {
                    throw new Exception('L\'id n\'est pas valide');
            }   
        }
        elseif ($_GET['action'] == 'removePostAdmin') {
            if (isset($_GET['id']) && $_GET['id'] > 0) {
                	$backendController = new backendController();
                    $backendController->removePostAdmin($_GET['id']);
            }
            else {
                    throw new Exception('L\'id n\'est pas valide');
            }   
        }
		elseif ($_GET['action'] == 'newPostAdmin') {
			$backendController = new Backendcontroller();
			$backendController->newPostAdmin();
		}
		elseif ($_GET['action'] == 'modifPostAdmin') {
			if (isset($_GET['id']) && $_GET['id'] > 0) {
				$backendController = new Backendcontroller();
				$backendController->modifPostAdmin($_GET['id']);
			}
			else {
				throw new Exception('L\'id du billet est invalide');
			}
		}
		elseif ($_GET['action'] == 'sendModifPostAdmin') {
			if (isset($_GET['id']) && $_GET['id'] > 0) {
				if (! empty($_POST['title']) && ! empty($_POST['content'])) {
					$backendController = new Backendcontroller();
					$backendController->sendModifPostAdmin($_POST['title'], $_POST['content'], $_GET['id']);
				}
				else {
					throw new Exception('Les champs n\'ons pas étais remplis');
				}
			}
			else {
				throw new Exception('l\'id du billet est invalide');
			}
		}
	}
	else {
		$frontendController = new FrontendController();
			$frontendController->pageAccueil();
	}
}
catch (Exception $e) {
    echo 'Erreur : ' . $e->getMessage();
}
