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
        <title>About The Gallery</title>
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
          
          <table>
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
                    <fieldset style="height: 300px">
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
          </table>
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
