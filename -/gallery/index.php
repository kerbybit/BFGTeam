<!DOCTYPE html>
<html>
    
    
    
    
    <head lang="en">
        <title>BFGTeam | Gallery</title>
        <link rel='stylesheet' type='text/css' href='../css/bootstrap.css'>
        <link rel='stylesheet' type='text/css' href='../css/styles.css'>
		<link rel="icon" href="../favicon.ico">
        <meta name='viewport' content='width=device-width, initial-scale=1'>
        <meta name='viewport' content='width=device-width, initial-scale=1 maximum-scale=1, user-scalable=no'>
        <?php require_once "../php/galleryGet.php";?>
    </head>
    
    
    
    
    
    <body>
        <div class='container centered hidden-xs'>
            <image src='../images/top.jpg'>
        </div>
        <nav class="navbar navbar-static-top bs-docs-nav" id="top" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar navbar-button">&#9776;</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand navbar-button" href="../home">Home</a>
                </div>
                <div class="collapse navbar-collapse bs-navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li><a class="navbar-button" href="../staff">Staff</a></li>
                        <li><a class="navbar-button" href="../roster">Roster</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a class="navbar-button" href="../news">News</a></li>
                        <li><a class="navbar-button" href="../challenges">Challenges</a></li>
                    </ul>
                </div>
            </div>
        </nav>  
        <offset class="hidden-xs"></offset>
        
        <div class="container galleryFull">
<?php getGallery();?>
        </div>
            
            
        <div class="container footer">
            <div class="container footer-text">
                <strong>&#169; BFGTeam<br>
                <div>&#169; kerbybit</div><br></strong>
            </div>
        </div>
        
    
    
            
        <!-- Bootstrap core JavaScript -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script src="../js/bootstrap.min.js"></script>
        <script src="../js/docs.min.js"></script>
        <script src="../js/stickynav.js"></script>
    </body>
    
    
    
    
</html>