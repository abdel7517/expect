<?php
require("model/PostManager.php");
require("model/CommentsManager.php");

  function listPosts()
  {
    $postManager = new PostManager();
    $posts = $postManager->getPosts();
    require("back-end/vue.php");
    include("front-end/form.php");
  }

  function post($idPost)
  {
    $postManager = new PostManager();
    $commentsManager = new CommentsManager();
    $post = $postManager->getPost($idPost);
    $comments = $commentsManager->getComments($idPost);
    require("front-end/annonceVue.php");
  }




?>
