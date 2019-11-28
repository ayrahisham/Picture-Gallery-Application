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
        <title>Add Picture Tag Gallery</title>
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
           
<?php
$mysqli=0;
         
function badinput($msg)
{
   echo <<< BADINPUT
    <div class="error">
        <h4>Sorry, it seems there is an error while uploading due to <br> <i><u>$msg</u></i></h4>
        <h5><a href = 'AddPicture.php'><b>Return To Upload</b></a></h5>
    </div>
BADINPUT;
}

function connectToDatabase()
{
    global $mysqli;
    $hostname = 'localhost';
    $username = 'root';
    $password = '';
    $db = 'gallery';
    $mysqli = new mysqli($hostname, $username, $password, $db);

    if (mysqli_connect_errno())
    {
        $problem = mysqli_connect_error();
        badinput($problem);
        exit;
    }
}
         
function add_tag()
{
    global $mysqli;
    $id = $_GET['ident'];
    $taglist = $_POST["addtag"];
    
    if (empty($taglist))
    {
        badinput("in need of at least one tag!");
        exit();
    }
           
    $addpicmatch = '/^[a-zA-Z0-9]+$/';
    if (!preg_match($addpicmatch, $taglist))
    {
        badinput('Tag input is invalid! Only letters and digits are allowed!');
        exit();
    }
             
             $tagsarray = explode(",",$taglist);
             
             foreach($tagsarray as $atag)
             {
                 $alphas = '/^[A-Za-z ]+$/';
                 if (!preg_match($alphas, $atag)) 
                 {
                     continue;
                 }
             
             connectToDatabase();
            
             $stmt = "INSERT INTO imagetag VALUES ('$atag', '$id')";
             $mysqli->query($stmt);
             $errortag = $mysqli->error;    
             }
             
            if (!empty($errortag))
            {
                echo <<<FAILEDTAG
                    <div class="error">
                        <h1>Failure Tag!</h1>
                            <h2>Tag update failed.</h2>
                                <p>MySQL database error code was $errortag.</p>
                    </div>
FAILEDTAG;
            }
            else
            {
                $result = $mysqli->query("SELECT LAST_INSERT_ID()");
                $row = $result->fetch_row();
                echo <<< SUCCESSTAG
                    <div class="error">
                        <h1>New Tag Record Inserted!</h1>
                            <h2>New Tag Picture Created!</h2>
                                <p>Tag <i>$taglist</i> is recorded for Picture #$id.</p>
                    </div>
SUCCESSTAG;
            }
    
        $mysqli->close();
}
         
session_start();
$uname = $_SESSION["user"];
if (!isset($uname))
{
    header("Location: login.php");
    exit;
}
         
$method = $_SERVER["REQUEST_METHOD"];

if ($method == "POST")
{
   add_tag();
}

?>
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