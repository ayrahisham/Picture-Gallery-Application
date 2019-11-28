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
        <title>Display Gallery Collection</title>
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
              
        <div class="contactus">
            <h1>A Picture From The Collection</h1>
        </div>
            <table border="1">
                <?php
                
                    global $mysqli;
                    $hostname = 'localhost';
                    $username = 'root';
                    $password = '';
                    $db = 'gallery';
                    $mysqli = new mysqli($hostname, $username, $password, $db);
                    
                    $err = $mysqli->error;
    
                    if (!empty($err))
                    {
                        exit;
                    }
                    
                    $id = $_GET['id'];
                    $idmatch = '/[0-9]+$/';
                    if (!preg_match($idmatch, $id))
                    {
                        exit;
                    }
                    
                    $sql = "SELECT * FROM image WHERE Ident = $id";
                    $sth = $mysqli->query($sql);
                    $result=mysqli_fetch_array($sth);
                    echo "<div class= contactform>" . $result['Title'] . "</div><br>";
                    echo '<img src="data:image/jpeg;base64,'.base64_encode( $result['picture'] ).'"/>';
                ?>
            </table>
        
        <div class="contactus">
            <h1>Tags</h1>
        </div>
        
        <?php
        $query = $mysqli->prepare("SELECT Tagstr FROM imagetag WHERE PicID = ?");
        $query->bind_param('s', $id);
        $query->execute();
        $query->bind_result($tag);
        $count = 0;
        
        echo"<div class=contactus><h3><bold>Existing Tags:</bold></h3></div>";
       
        while ($query->fetch())
        {   
            $count++;
            echo "<div class=contactform><h6><i>" . $tag . "</i></h6></div>";
        } 
            
        if ($query->num_rows < 1)
        {
            echo "<div class=contactform><h6><i>No Tag Found For This Picture!</i></h6></div>";
        }
        $mysqli->close();
        ?>
        
        <div class="contactus">
            <h2>Add Tags</h2>
            <h3>You May Add Tags That Characterize The Contents Of This Picture...</h3>
        </div>
        
        <form action="./AddTag.php?ident=<?php echo $id ?>" method="POST" style="background-image:url('./images/searchbackground.jpg')">
            <fieldset>
                <legend>Your Tag</legend>  
                    <input type='text' name='addtag' size='16' maxlength='16'/>
                </fieldset>
            <input type='submit' value='Add Tag'/>
        </form>
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