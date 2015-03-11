<!DOCTYPE html>
<html>
    
    
    
    
    <head lang="en">
        <title>BFGTeam | Home</title>
        <link rel='stylesheet' type='text/css' href='../css/bootstrap.css'>
        <link rel='stylesheet' type='text/css' href='../css/styles.css'>
		<link rel="icon" href="../favicon.ico">
        <meta name='viewport' content='width=device-width, initial-scale=1'>
        <meta name='viewport' content='width=device-width, initial-scale=1 maximum-scale=1, user-scalable=no'>
        <?php require_once "../php/gallery.php";?>
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
                    <a class="navbar-brand navbar-button">Home</a>
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
            
            
        <div class="home-image">
            <div id="slideshow">
<?php getGallery();?>
            </div>
            <div class="container-fluid home-text-back" onclick="location.href='../gallery'"></div>
            <div class="container-fluid home-text" onclick="location.href='../gallery'" onmouseover="this.innerHTML='Gallery'" onmouseout="this.innerHTML ='QuakeCraft Elites'">QuakeCraft Elites</div>
        </div>
            
        
        <div class="container home-break"></div>
            
            
            
        <div class="container">
            <div class="container col-md-4">
                <button type="button" data-toggle="modal" data-target="#myModal" class="home-button"><img src="../images/icon-info.png" width="100px"></button>
                <br class="hidden-xs hidden-sm">
                <strong>About</strong>
                <br class="hidden-xs hidden-sm">
                <div class="inline-block absolute hidden-md hidden-lg outerDiv">
                    <div class="innerDiv">Learn more about who we are and what we do</div>
                </div>
                <div class="hidden-sm hidden-xs">Learn more about who we are and what we do</div>
            </div>
            <div class="container home-break hidden-md hidden-lg"></div>
            <div class="container col-md-4">
                <a onclick="window.open('http://hypixel.net/threads/29418/')" style="cursor:pointer;"><img src="../images/icon-forums.png" width="100px"></a>
                <br class="hidden-xs hidden-sm">
                <strong>Forums</strong>
                <br class="hidden-xs hidden-sm">
                <div class="inline-block absolute hidden-md hidden-lg outerDiv">
                    <div class="innerDiv">Get to know us on the forums or just come hang out</div>
                </div>
                <div class="hidden-sm hidden-xs">Get to know us on the forums or just come hang out</div>
            </div>
            <div class="container home-break hidden-md hidden-lg"></div>
            <div class="container col-md-4">
                <a href="../apply"><img src="../images/icon-apply.png" width="100px"></a>
                <br class="hidden-xs hidden-sm">
                <strong>Apply</strong>
                <br class="hidden-xs hidden-sm">
                <div class="inline-block absolute hidden-md hidden-lg outerDiv">
                    <div class="innerDiv">Apply to be part of the team and contribute to the community</div>
                </div>
                <div class="hidden-sm hidden-xs">Apply to be part of the team and contribute to the community</div>
            </div>
        </div>
            
            
            
        <div class="container home-break"></div>
            
            
        <div class="container footer">
            <div class="container footer-text">
                <strong>&#169; BFGTeam<br>
                <div>&#169; kerbybit</div><br></strong>
            </div>
        </div>

            
        <!--about modal-->
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">About</h4>
              </div>
              <div class="modal-body">
                <h1>About the guild</h1>
                Eventually, a description of the guild and what we stand for will go here. Right now, we are reworking a lot of what we do as a guild so we can't really put anything here yet.
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>
        
    
    
            
        <!-- Bootstrap core JavaScript -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script src="../js/bootstrap.min.js"></script>
        <script src="../js/docs.min.js"></script>
        <script src="../js/slideshow.js"></script>
        <script src="../js/stickynav.js"></script>
    </body>
    
    
    
    
</html>