<?php
$s = "";
function verifieEmail($mail) 
{
	if (preg_match('/^[a-zA-Z0-9_]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$]/i',$mail)) return false;
	list ($nom,$domaine) = explode ('@',$mail);
	if (getmxrr($domaine,$mxhosts)) return true;
	else return false;
} 
if (!empty($_POST['nom']) && !empty($_POST['email']) && !empty($_POST['message']))
{
    $destinataire = "emaildecontact@xxx.xx";
    $sujet = "Infos";
    $message = "name : ".$_POST['name']."\r\n";
    $message .= "email : ".$_POST['email']."\r\n";
     $message .= "subject : ".$_POST['subject']."\r\n";
    $message .= "message : ".$_POST['message']."\r\n";
    $from = $_POST['email'];
    if (verifieEmail($from))
    {
        $entete = 'From: '.$from;
        if (mail($destinataire,$sujet,$message,$entete))
        {
            header('Location: pageAccueil.php'); // Redirection vers la page de confirmation
        }
        else
        {
            $s = "Une erreur s'est produite. Votre demande n'a pas été envoyée.";
        }
    }
    else
    {
        $s = "Votre email est invalide. Votre demande n'a pas été envoyée.";
    }
}
else
{
    $s = "Vous n'avez pas rempli tous les champs. Votre demande n'a pas été envoyée.";
}
if ($s) echo $s;

?>