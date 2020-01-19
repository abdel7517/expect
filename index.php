
<?php

    require("back-end/controller.php");
	require("front-end/navMenu.php");


  if (isset($_GET["action"]))
  {
       if($_GET["action"] == "listPost")
      {
        listPosts();
      }

      if ($_GET["action"] == "post")
      {
        post($_GET["id"]);
      }
}

else
{
    listPosts();
}




?>

