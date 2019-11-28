<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
       <!--
       Title is needed to define the display in the user's browser tool bar, 
       search engine and when user adds the page to favorites.
       -->
        <title>The Gallery</title>
        <!--
        Meta tag is needed for machine readable formats. Elements below such as 
        viewport, description, keywords and author are used for specification.
        Meta data too can function similarly to title.
        Meta viewport is used to take control of the visibility area of a web page.
        -->
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Image Gallery">
	<meta name="keywords" content="Photo,Image,Web,Gallery">
	<meta name="author" content="minimalist">
        <!--
        Reference link for cascading style sheet; usage of div tags reference.
        -->
        <link rel="stylesheet" type="text/css" href="mystyle.css"/>  
    </head>
    <body background="./images/background.jpg">
        
        <div class="topmenu">
            <a href="https://www.facebook.com/siiimpledesigns/"><img src="./images/fbicon.png" alt="facebook" width="25" height="25"></a>
            <a href="https://twitter.com/siiimple"><img src="./images/twittericon.png" alt="twitter" width="30" height="30"></a>
            <a href="https://www.instagram.com/simple/?hl=en"><img src="./images/igicon.png" alt="instagram" width="25" height="25"></a>
            <a href="about.php">About</a>
            <a href="CreateUser.php">Register</a>
            <a href="Login.php">Login</a>
            
        </div> 
          
          <div id="main">
            <div id="banner">
                  <a href= "index.php">
                      <img src="./images/gallerylogo.png" alt="gallerylogo" width="180" height= "160" align="top-left">
                  </a>
            </div>
          <script src="myjavascript.js"></script> 
          
          <h2 style="text-align:center">Lightbox</h2>

            <div class="row">
              <div class="column">
                <img src="./images/gallery1.jpg" alt="gallery1" style="width:100%" height="300" onclick="openModal();currentSlide(1)" class="hover-shadow cursor">
              </div>
              <div class="column">
                <img src="./images/gallery2.jpg" alt=gallery2 style="width:100%" height="300" onclick="openModal();currentSlide(2)" class="hover-shadow cursor">
              </div>
              <div class="column">
                <img src="./images/gallery3.jpg" alt="gallery3" style="width:100%" height="300" onclick="openModal();currentSlide(3)" class="hover-shadow cursor">
              </div>
              <div class="column">
                <img src="./images/gallery4.jpg" alt=gallery4 style="width:100%" height="300" onclick="openModal();currentSlide(4)" class="hover-shadow cursor">
              </div>
            </div>
          
          <footer>
            <table> 
                <tr>
                    <td width="100%">
                        <div class="foot">
                            <p>The Gallery © 2017</p>
                        </div>
                    </td>              
                    <td>
                        <a href="https://www.linkedin.com/company/the-gallery">
                            <img src="./images/linkedin.png" alt="linkedin" width="50" height="50"></a>
                    </td>
                    <td>
                        <a href="https://www.youtube.com/user/thegallerymusic?gl=SG&hl=en-GB">
                            <img src="./images/youtube.jpg" alt="youtube" width="60" height="60"></a>
                    </td>
                    <td>
                        <a href="https://plus.google.com/+nationalgallerylondon">
                            <img src="./images/googleplus.png" alt="googleplus" width="40" height="40"></a>
                    </td>
                </tr>
            </table>
        </footer>
          
        </div>   
    </body>
</html>
