<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="styles/gallery.css">
    <script src="scripts/script.js" defer></script>
    <title>Galleria</title>
</head>
<body>
    <nav class="navbar navbar-default">
        <div class="container-fluid">
          <div class="navbar-header">
            <a class="navbar-brand" href="index.php">Kotkantie maalaus- ja tapetointi</a>
          </div>
          <ul class="nav navbar-nav">
                <li><a href="index.php">Etusivu</a></li>
                <li><a href="services.php">Palvelut</a></li>
                <li><a href="colors.php">Värien Testaus</a></li>
                <li><a href="contact.php">Yhteystiedot</a></li>
                <li class="active"><a href="gallery.php">Galleria</a></li>
          </ul>
        </div>
      </nav>
      <div class="container">
        <div class="text-center">
          <div class="col-md-12 col-sm-12">
            <div id="centerImage">
              <img src="pics/maalaustyö1920x1280.jpg" class="img-responsive">
            </div>
            <div class="row">
              <div class="col-xs-12" id="imageBottom1">
                <img src="pics/toolsonrandomfloor1920x1280.jpg" class="img-responsive">
              </div>
              <div class="col-xs-12" id="imageBottom2">
                <img src="pics/seinänmaalaus1920x1280.jpg" class="img-responsive">
              </div>
              <div class="col-xs-12" id="imageBottom3">
                <img src="pics/brush1920x1280.jpg" class="img-responsive">
              </div>
              <div class="col-xs-12" id="imageBottom1">
                <img src="pics/painttools1920x1280.jpg" class="img-responsive">
              </div>
              <div class="col-xs-12" id="imageBottom2">
                <img src="pics/sky1914x1276.jpg" class="img-responsive">
              </div>
              <div class="col-xs-12" id="imageBottom3">
                <img src="pics/toolsandpaint1920x1280.jpg" class="img-responsive">
              </div>
            </div>
          </div>
        </div>
      </div>
      <footer class="footer container-fluid text-center">
        <div class="row" id="footerRow">
          <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4" id="footerForm">
            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
              <label for="emailInput">Your Email:</label>
              <input type="email" id="emailInput" name="emailInput"><br>
              <label for="messageInput">Message</label><br>  
              <textarea name="messageInput" rows="6" cols="40"></textarea><br>
              <input type="submit">
            </form>
          </div>
          <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4" id="footerLinks">
            <ul>
              <li><a href="index.php">Etusivu</a></li>
              <li><a href="services.php">Palvelut</a></li>
              <li><a href="colors.php">Värien Testaus</a></li>
              <li><a href="contact.php">Yhteystiedot</a></li>
              <li><a href="gallery.php">Galleria</a></li>
            </ul>
          </div>
          <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4" id="footerContacts">
            <ul>
              <li>Puh. 044 99988899</li>
              <li>Kotkantie 3, 90100 Oulu</li>
              <li>info@kotkantiemaalaus.fi</li>
            </ul>
            <div>
              <a href="https://www.youtube.com/"><img src="pics/youtube_social_icon_red.png"></a>
              <a href="https://www.instagram.com"><img src="pics/instagram.png"></a>
            </div>
          </div> 
        </div> 
      </footer>
</body>
</html>