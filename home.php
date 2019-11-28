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
        </div> 
        
         <div id="main">
            <div id="banner">
                  <a href= "home.php">
                      <img src="./images/gallerylogo.png" alt="gallerylogo" width="180" height= "160" align="top-left">
                  </a>
        </div>
             
        <div id="mySidenav" class="sidenav">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <a href="home.php">Home</a>
            <a href="SearchByTag.php">Search</a>
            <a href="ViewTitles.php">Categories</a>
            <a href="AddPicture.php">Submit</a>
            <a href="DeletePicture.php">Unpublish</a>
            <a href="SayHello.php">Say Hello</a>
            <script src="myjavascript.js"></script> 
        </div>

        <table>
            <tr>
                <td>
                    <div id="welcome">
                      <span onclick="openNav()"><img src="./images/menuicon.jpg" alt="menuicon" width="50" height= "50">
                      <script src="myjavascript.js"></script> 
                      </span>
                    </div>
                </td>
                <td>
                    <a href="index.php"><img src="./images/logout.png" alt="logout" width="50" height="50" align="right"></a>
                </td>   
            </tr>
        </table>      
             
          <script src="myjavascript.js"></script> 
          
          <h2 style="text-align:center">Welcome To The Lightbox</h2>

            <table>
            <tr>
                <td>
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
                </td>
            </tr>
            <tr>
                <td>
                    <fieldset style="height: 250px">
                        <legend><b>The Gallery</b></legend>
                        <div class="text">
                                <blockquote>
                                Located at the entrance to NYUAD’s campus (in building A4), 
                                the spacious gallery is equipped for exhibitions in all media, 
                                allowing for both experimental and traditional museum 
                                installations. The gallery includes an outdoor sculpture garden 
                                that will host special projects and events. Admission to the 
                                Art Gallery is free and open to the public.
                                </blockquote>
                        </div>
                    </fieldset>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="row">
                        <div class="column">
                          <img src="./images/gallery5.jpg" alt="gallery5" style="width:100%" height="300" onclick="openModal();currentSlide(1)" class="hover-shadow cursor">
                        </div>
                        <div class="column">
                          <img src="./images/gallery6.jpg" alt=gallery6 style="width:100%" height="300" onclick="openModal();currentSlide(2)" class="hover-shadow cursor">
                        </div>
                        <div class="column">
                          <img src="./images/gallery7.jpg" alt="gallery7" style="width:100%" height="300" onclick="openModal();currentSlide(3)" class="hover-shadow cursor">
                        </div>
                        <div class="column">
                          <img src="./images/gallery8.jpg" alt=gallery8 style="width:100%" height="300" onclick="openModal();currentSlide(4)" class="hover-shadow cursor">
                        </div>
                  </div>
                </td>
            </tr>
            <tr>
                <td>
                    <fieldset style="height: 500px">
                        <legend><b>Mission & Vision</b></legend>
                        <div class="text">
                            <blockquote>
                            The Art Gallery will present curated exhibitions of art and culture 
                            across historical and contemporary topics, with a special emphasis 
                            on subjects of both regional concern and international significance. 
                            Its curatorial platform supports scholarly and experimental 
                            installations, artists’ projects, guest curators, and landmark 
                            exhibitions.

                            In the first few years of the gallery program, exhibitions will 
                            explore three core thematic areas. Each area is of particular relevance 
                            to NYUAD.
                            
                             Some of these exhibitions will be co-curated with our faculty, 
                             or by esteemed guest curators. Periodically an exhibition will result 
                             from an experimental exhibition “laboratory,” the product of a 
                             curatorial practicum and cross-disciplinary opportunity for 
                             designers, curators scholars, and engineers to experiment with 
                             exhibition strategies. It is our hope that the gallery will serve 
                             as a catalyst and locus of intellectual and creative activity, 
                             linking the university with the public and a worldwide community 
                             of artists, curators, and scholars.          
                            </blockquote>
                        </div>
                    </fieldset>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="row">
                        <div class="column">
                          <img src="./images/gallery9.jpg" alt="gallery9" style="width:100%" height="300" onclick="openModal();currentSlide(1)" class="hover-shadow cursor">
                        </div>
                        <div class="column">
                          <img src="./images/gallery10.jpg" alt=gallery9 style="width:100%" height="300" onclick="openModal();currentSlide(2)" class="hover-shadow cursor">
                        </div>
                        <div class="column">
                          <img src="./images/gallery11.jpg" alt="gallery10" style="width:100%" height="300" onclick="openModal();currentSlide(3)" class="hover-shadow cursor">
                        </div>
                        <div class="column">
                          <img src="./images/gallery12.jpg" alt=gallery11 style="width:100%" height="300" onclick="openModal();currentSlide(4)" class="hover-shadow cursor">
                        </div>
                  </div>
                </td>
            </tr>
            <tr>
                <td>
                    <fieldset style="height: 450px">
                        <legend><b>Gallery Team</b></legend>
                        <div class="text">
                            <blockquote>
                            Collectively, our team background includes experience at The Museum of
                            Contemporary Art (Chicago), the Philadelphia Museum of Art, 
                            The Addison Gallery of American Art (Phillips Academy), 
                            the RISD Museum of Art (Rhode Island School of Design), 
                            the David Winton Bell Gallery (Brown University), the Fred Jones Jr. 
                            Museum of Art (The University of Oklahoma), and Abu Dhabi Tourism & 
                            Culture Authority.
                            <br><br>
                            Director and Chief Curator: Maya Allison<br>
                            Museum Registrar: Kim Moinette<br>
                            Head of Installations: Sam Faix<br>
                            Exhibitions Curator: Bana Kattan <br>
                            Programs Curator: Alaa Edris <br>
                            Operations Manager: Hala Saleh          
                            </blockquote>
                        </div>
                    </fieldset>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="row">
                        <div class="column">
                          <img src="./images/gallery13.jpg" alt="gallery13" style="width:100%" height="300" onclick="openModal();currentSlide(1)" class="hover-shadow cursor">
                        </div>
                        <div class="column">
                          <img src="./images/gallery14.jpg" alt=gallery14 style="width:100%" height="300" onclick="openModal();currentSlide(2)" class="hover-shadow cursor">
                        </div>
                        <div class="column">
                          <img src="./images/gallery15.jpg" alt="gallery15" style="width:100%" height="300" onclick="openModal();currentSlide(3)" class="hover-shadow cursor">
                        </div>
                        <div class="column">
                          <img src="./images/gallery16.jpg" alt=gallery16 style="width:100%" height="300" onclick="openModal();currentSlide(4)" class="hover-shadow cursor">
                        </div>
                    </div>
                </td>
            </tr>
          </table>
          
            <div id="myModal" class="modal">
              <span class="close cursor" onclick="closeModal()">&times;</span>
              <div class="modal-content">

                <div class="mySlides">
                  <div class="numbertext">1 / 16</div>
                  <img src="./images/gallery1.jpg" alt="Gallery 1" style="width:100%">
                </div>

                <div class="mySlides">
                  <div class="numbertext">2 / 16</div>
                  <img src="./images/gallery2.jpg" alt="Gallery 2" style="width:100%">
                </div>

                <div class="mySlides">
                  <div class="numbertext">3 / 16</div>
                  <img src="./images/gallery3.jpg" alt="Gallery 3" style="width:100%">
                </div>

                <div class="mySlides">
                  <div class="numbertext">4 / 16</div>
                  <img src="./images/gallery4.jpg" alt="Gallery 4" style="width:100%">
                </div>
                  
                <div class="mySlides">
                  <div class="numbertext">5 / 16</div>
                  <img src="./images/gallery5.jpg" alt="Gallery 5" style="width:100%">
                </div>
                  
                <div class="mySlides">
                  <div class="numbertext">6 / 16</div>
                  <img src="./images/gallery6.jpg" alt="Gallery 6" style="width:100%">
                </div>
                  
                <div class="mySlides">
                  <div class="numbertext">7 / 16</div>
                  <img src="./images/gallery7.jpg" alt="Gallery 7" style="width:100%">
                </div>
                  
                <div class="mySlides">
                  <div class="numbertext">8 / 16</div>
                  <img src="./images/gallery8.jpg" alt="Gallery 8" style="width:100%">
                </div>
                
                <div class="mySlides">
                  <div class="numbertext">9 / 16</div>
                  <img src="./images/gallery9.jpg" alt="Gallery 9" style="width:100%">
                </div>
                  
                <div class="mySlides">
                  <div class="numbertext">10 / 16</div>
                  <img src="./images/gallery10.jpg" alt="Gallery 10" style="width:100%">
                </div>
                  
                <div class="mySlides">
                  <div class="numbertext">11 / 16</div>
                  <img src="./images/gallery11.jpg" alt="Gallery 11" style="width:100%">
                </div>
                  
                <div class="mySlides">
                  <div class="numbertext">12 / 16</div>
                  <img src="./images/gallery12.jpg" alt="Gallery 12" style="width:100%">
                </div>
                  
                <div class="mySlides">
                  <div class="numbertext">13 / 16</div>
                  <img src="./images/gallery13.jpg" alt="Gallery 13" style="width:100%">
                </div>
                  
                <div class="mySlides">
                  <div class="numbertext">14 / 16</div>
                  <img src="./images/gallery14.jpg" alt="Gallery 14" style="width:100%">
                </div>
                  
                <div class="mySlides">
                  <div class="numbertext">15 / 16</div>
                  <img src="./images/gallery15.jpg" alt="Gallery 15" style="width:100%">
                </div>
                  
                <div class="mySlides">
                  <div class="numbertext">16 / 16</div>
                  <img src="./images/gallery16.jpg" alt="Gallery 16" style="width:100%">
                </div>

                <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                <a class="next" onclick="plusSlides(1)">&#10095;</a>

                <div class="caption-container">
                  <p id="caption"></p>
                </div>
                
                        <div class="column">
                          <img class="demo cursor" src="./images/gallery1.jpg" style="width:100%" onclick="currentSlide(1)" alt="Gallery 1">
                        </div>
                        <div class="column">
                          <img class="demo cursor" src="./images/gallery2.jpg" style="width:100%" onclick="currentSlide(2)" alt="Gallery 2">
                        </div>
                        <div class="column">
                          <img class="demo cursor" src="./images/gallery3.jpg" style="width:100%" onclick="currentSlide(3)" alt="Gallery 3">
                        </div>
                        <div class="column">
                          <img class="demo cursor" src="./images/gallery4.jpg" style="width:100%" onclick="currentSlide(4)" alt="Gallery 4">
                        </div>
                        <div class="column">
                          <img class="demo cursor" src="./images/gallery5.jpg" style="width:100%" onclick="currentSlide(5)" alt="Gallery 5">
                        </div>
                        <div class="column">
                          <img class="demo cursor" src="./images/gallery6.jpg" style="width:100%" onclick="currentSlide(6)" alt="Gallery 6">
                        </div>
                        <div class="column">
                            <img class="demo cursor" src="./images/gallery7.jpg" style="width:100%" onclick="currentSlide(7)" alt="Gallery 7">
                         </div>
                         <div class="column">
                            <img class="demo cursor" src="./images/gallery8.jpg" style="width:100%" onclick="currentSlide(8)" alt="Gallery 8">
                         </div>
                         <div class="column">
                            <img class="demo cursor" src="./images/gallery9.jpg" style="width:100%" onclick="currentSlide(9)" alt="Gallery 9">
                         </div>
                         <div class="column">
                            <img class="demo cursor" src="./images/gallery10.jpg" style="width:100%" onclick="currentSlide(10)" alt="Gallery 10">
                         </div>
                         <div class="column">
                            <img class="demo cursor" src="./images/gallery11.jpg" style="width:100%" onclick="currentSlide(11)" alt="Gallery 11">
                         </div>
                         <div class="column">
                            <img class="demo cursor" src="./images/gallery12.jpg" style="width:100%" onclick="currentSlide(12)" alt="Gallery 12">
                         </div>
                         <div class="column">
                            <img class="demo cursor" src="./images/gallery13.jpg" style="width:100%" onclick="currentSlide(13)" alt="Gallery 13">
                         </div>
                         <div class="column">
                            <img class="demo cursor" src="./images/gallery14.jpg" style="width:100%" onclick="currentSlide(14)" alt="Gallery 14">
                         </div>
                         <div class="column">
                            <img class="demo cursor" src="./images/gallery15.jpg" style="width:100%" onclick="currentSlide(15)" alt="Gallery 15">
                         </div>
                         <div class="column">
                            <img class="demo cursor" src="./images/gallery16.jpg" style="width:100%" onclick="currentSlide(16)" alt="Gallery 16">
                         </div>
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
