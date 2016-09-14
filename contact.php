<!DOCTYPE html>
<html>
    <head>
        <title>Club Code</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Club Code, Télécom & Management SudParis">
        <meta name="keywords" content="HTML, CSS, JS, JavaScript, bootstrap, club code, telecom management sudparis">
        <meta name="author" content=""> 
        
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="css/bootstrap-theme.min.css" rel="stylesheet" type="text/css" />
        <link href="css/style.css" type="text/css" rel="stylesheet" />
        <link href="css/contact.css" type="text/css" rel="stylesheet" />
        
        <link rel="icon" type="image/x-icon" href="favicon.ico" />
        
        <script src="js/jquery.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
    </head>
    <body>
      <?php include("./header.php") ?> 
 
<h1>Nous contacter</h1>
        <div class="col-sm-7">
<form class="cf">
  <div class="half left cf">
    <input type="text" id="input-name" placeholder="Name">
    <input type="email" id="input-email" placeholder="Email address">
    <input type="text" id="input-subject" placeholder="Subject">
  </div>
  <div class="half right cf">
    <textarea name="message" type="text" id="input-message" placeholder="Message"></textarea>
  </div>  
  <input type="submit" value="Submit" id="input-submit">
</form> 
        </div>
        <div class="col-sm-5">
        
        <p>Mail: <a href="mailto:club.code@tem-tsp.eu">club.code@tem-tsp.eu</a></p>
        <p>Adresse: Club Code<br />Télécom &amp; Management SudParis<br />9 Rue Charles Fourier<br />91 011 Évry CEDEX</p>
        </div>

    <?php include("./footer.php") ?>
    </body>
    </html>
