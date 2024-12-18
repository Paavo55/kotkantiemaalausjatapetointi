 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="styles/contact.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <script src="scripts/script.js" defer></script>
    <title>Yhteystiedot</title>
</head>
<body>
  <div id="pageContainer">
    <nav class="navbar navbar-default">
        <div class="container-fluid">
          <div class="navbar-header">
            <a class="navbar-brand" href="index.php">Kotkantie maalaus- ja tapetointi</a>
          </div>
          <ul class="nav navbar-nav">
                <li><a href="index.php">Etusivu</a></li>
                <li><a href="services.php">Palvelut</a></li>
                <li><a href="colors.php">Värien Testaus</a></li>
                <li class="active"><a href="contact.php">Yhteystiedot</a></li>
                <li><a href="gallery.php">Galleria</a></li>
          </ul>
        </div>
      </nav>
      <div class="container-fluid">
        <div class="col-lg-12 text-center">
          <div id="welcomeMessage">
            <h1>Olemme Kotkantien maalaus ja tapetointi</h1>
          </div>
        </div>
        <div class="container-fluid text-center" id="contactContainer">
            <div class="col-lg-12 col-xs-12" id="contactLocation">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1686.137156032252!2d25.51181002723535!3d65.00052173180927!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4681cd5aac2e0dcb%3A0xd0f738d563fe562d!2sKotkantie%203%2C%2090250%20Oulu!5e0!3m2!1sfi!2sfi!4v1717336514468!5m2!1sfi!2sfi" width="300;" height="350;" style="border:1px solid black;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" id="mapEmbed"></iframe>
            </div>
            <div class="col-lg-12 col-xs-12" id="contactInfo">
              <h2>Ota yhteyttä meihin</h2>
              <h3><span class="material-symbols-outlined">
                mail
                </span> info@kotkantiemaalaus.fi</h3>
              <h3><span class="material-symbols-outlined">
                call
                </span> 044 99988899</h3>
              <h3><span class="material-symbols-outlined">
                home
                </span> Kotkantie 3, 90100 Oulu</h3>
            </div>
            <div class="col-lg-12 col-xs-12" id="contactForm">
              <h2>Seuraa mediassa</h2>
              <h3><a href="https://www.youtube.com/"><img src="pics/youtube_social_icon_red.png"></a></h3>
              <h3><a href="https://www.instagram.com"><img src="pics/instagram.png"></a></h3>
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