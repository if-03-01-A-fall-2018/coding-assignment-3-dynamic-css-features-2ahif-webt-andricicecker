<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Contact</title>
    <meta charset="utf-8">
    <meta name="description" content="Self Driving Cars">
    <meta name="author" content="Daniel Andricic and Benjamin Ecker">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/index.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body id="ContactBody">
      <nav>
        <a href="home.html">Home</a>
        <a href="index.html">Content</a>
        <a href="History.html">History</a>
        <a class="active" href="Contact.html">Contact</a>
      </nav>
      <article>
        <section>
          <form action="" method="post" id="com">
            <div class="form-check">
              <input class="form-check-input position-static" type="checkbox" id="blankCheckbox" value="Anonymous" aria-label="Anonymous">
              <label class="form-check-label" for="gridRadios1">Anonymous</label>
            </div>
            <br>
          <!-- <img src="../Picture/star.png" width="20px" height="20px" id="1" onclick="change(['1']);">
          <img src="../Picture/star.png" width="20px" height="20px" id="2" onclick="change(['1', '2']);">
          <img src="../Picture/star.png" width="20px" height="20px" id="3" onclick="change(['1', '2', '3']);">
          <img src="../Picture/star.png" width="20px" height="20px" id="4" onclick="change(['1', '2', '3', '4']);">
          <img src="../Picture/star.png" width="20px" height="20px" id="5" onclick="change(['1', '2', '3', '4', '5']);">
          -->

          <!-- Sterne die zur Bewertung, da sind. -->
            <span class="fa-star"></span>
            <span class="fa-star"></span>
            <span class="fa-star"></span>
            <span class="fa-star"></span>
            <span class="fa-star"></span>

            <br><br>
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">@</span>
              </div>
              <input type="text" name="username" id="Username" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
            </div>

            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text">With textarea</span>
              </div>
              <textarea id="Comment" name="comment" rows="7"class="form-control" aria-label="With textarea"></textarea>
              <br><br>
            </div>
            <button type="button" value="Post"class="btn btn-dark" onClick="../PHP/contact.php">Post</button>
          </form>
        </section>

        <section>
          <div id="statistics">Technisch noch nicht ausgereift!</div> <!--Geplante Erweiterung!-->
        </section>

        <section id="Comments">
          <!-- Hier sollten, dann die Kommentare eingefügt werden. -->
        </section>
      </article>

      <script src="../js/GetFeedback.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>

  </body>
</html>
<?php

$name = $_POST["username"];
$text = $_POST[comment];
$post = $_POST["post"];

if($post){
  $write = $fopen("Contact.html", "a+");
  fwrite($write, "<u><b> $name</b></u><br>$comment<br>");
  fclose($write);

  $read = fopen("contact.html", "r+t");
  echo "All comments:<br>";

  while(!feof($read)){
    echo fread($read, 1024);

  }

  fclose($read);
}
else{
  echo "Error no comment!"
}

?>