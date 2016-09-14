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
        
        <link rel="icon" type="image/x-icon" href="favicon.ico" />
        
        <script src="js/jquery.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
    </head>
    <body>
       
            
             <?php include("./header.php") ?>
             <div class="container">
            <div class="col-xs-9">
                <br>
               <div class="jumbotron">
                
                <h1 class="page-header">Bienvenue sur le site du Club Code</h1>
                   <p> Le Club Code est le club de programmation de <a href="https://www.telecom-sudparis.eu" target="_blank">Télécom SudParis</a> et <a href="https://www.telecom-em.eu/">Télécom École de Management</a>.</p>
                 
                
            </div>

        

         <div class="panel panel-primary">
      <div class="panel-heading"><h2>Actualités</h2></div>
      <div class="panel-body">
  <div>
                    <h3>LA première soirée code a lieu le ...</h3>
                    <p>Que tu sois débutant ou ...</p>
                   
          </div>
          <hr>
          <div>
                    <h3>Amphi de présentation le ...</h3>
                    <p>Redécouvrez le club code lors de l'amphi de présentation </p>
                   
          </div>
         
         </div>
    </div>
          
          <div class="panel panel-primary">
      <div class="panel-heading"><h2>Nos derniers projets</h2></div>
      <div class="panel-body">
   <div class="col-md-6" style="margin-bottom: 20px;">
                    <h3>Clotûre du projet MakeItMagic 1.0</h3>
                    <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
                    <p><a class="btn btn-primary" href="#" role="button">Plus de détails »</a></p>
                </div>
                <div class="col-md-6" style="margin-bottom: 20px;">
                  
                    <h3>Création du site web</h3>
                    <p>Nous avons créé ce site web pour ..... Technologies utilisées ?</p>
                    <p><a class="btn btn-primary" href="#" role="button">Plus de détails »</a></p>
           
                </div>
         
         </div>
                </div>
            </div>
                <div class="col-xs-3 text-center">
                    <div><h2>Derniers Tweets</h2><a class="twitter-timeline text-center" data-width="500" data-height="21em" href="https://twitter.com/k_recard">Tweets by @Club_COde</a> <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script></div>
                    <div id="partenaires"><h2>Partenaires</h2><img src="http://minet.net/static/images/logos/minet.png" alt="" /><p> Minet</p>
                    <img src="" alt="" /><p>Magic Makers ?</p></div>
                    <div id="calendrier"><h2>Calendrier</h2><img src="" alt="" /><p> </p></div>
                </div>
    </div>
                 
               
           
            
       
         
            
      <?php include("./footer.php") ?>
        <script>$(function () {  $('.carousel').carousel({ interval: 5000 }); });</script> <!-- Initialise le slider pour le défilement automatique, avec un interval donné, ici 5000ms -->
    </body>
</html>

