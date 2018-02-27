<?php
require_once('Manager.php');

class MembersManager extends Manager
{
	public function getLogin()
	{
		$db = $this->dbConnect();
        $req = $db->query('SELECT Pseudo, Password FROM members');
        return  $req->fetch();

       
	}
}