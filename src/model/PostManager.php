<?php
require_once('Manager.php');

class PostManager extends Manager
{
	public function getPosts()
    {
        $db = $this->dbConnect();
        $req = $db->query('SELECT id, title, image, SUBSTRING(content,1,350) as extract_content, DATE_FORMAT(datePost, \'%d/%m/%Y\') AS datePost_fr FROM posts ORDER BY datePost DESC');

        return $req;
    }

    public function getPost($id)
    {
    	$db = $this->dbConnect();
        $req = $db->prepare('SELECT id, title, image, content, DATE_FORMAT(datePost, \'%d/%m/%Y\') AS datePost_fr FROM posts WHERE id = ?');
        $req->execute(array($id));
        $post = $req->fetch();

        return $post;
	}

    public function getPostsAdmin()
    {
        $db = $this->dbConnect();
        $req = $db->query('SELECT id, title, image, SUBSTRING(content,1,116) as extract_content, DATE_FORMAT(datePost, \'%d/%m/%Y\') AS datePost_fr FROM posts ORDER BY datePost DESC');

        return $req; 
    }
    public function createPost($title, $content)
    {
        $db = $this->dbConnect();
        $post = $db->prepare('INSERT INTO posts( title, image, content,  datePost) VALUES(?, ?,  NOW())');
        $affectedPost = $post->execute(array($title, $content));

        return $affectedPost;
    }
    public function deletePostAdmin($id)
    {
        $db = $this->dbConnect();
        $post = $db->prepare('DELETE FROM posts WHERE id = ?');
        $deletePost = $post->execute(array($id));

        return $deletePost;
    }
     public function getModifArticleAdmin($id)
    {
        $db = $this->dbConnect();
        $post = $db->prepare('SELECT id, title, image, content FROM posts WHERE id = ?');
        $post->execute(array($id));
        $modifpost = $post->fetch();

        return $modifpost;
    }
    public function sendArticleAdmin($title, $image, $content, $id)
    {
        $db = $this->dbConnect();
        $comments = $db->prepare('UPDATE posts SET title = ?, image = ?, content = ? WHERE id = ?');
        $returnArticle = $comments->execute(array($title, $image, $content, $id));

        return $returnArticle;
    }
}