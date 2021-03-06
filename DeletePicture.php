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
        <title>Delete Picture(s) By Tag</title>
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
        <h5><a href = 'DeletePicture.php'><b>Return To Delete</b></a></h5>
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

function display_remove_form()
{
    $phpself = $_SERVER["PHP_SELF"];
    echo <<< SEARCHFORM
    <div class="contactus">
            <h1>Delete Picture(s) By Tag From The Gallery Collection</h1>          
    </div>
        <form action="$phpself" method="POST" style="background-image:url('./images/searchbackground.jpg')">
            <fieldset>
                <legend>Your Tag</legend>
                    <input type='text' name='deletebytag' size='10'/>
                    <input type='submit' value='Delete Tag'/>
            </fieldset>
        </form>
SEARCHFORM;
          }

function remove_tag()
{
    global $mysqli;
    $taglist = $_POST["deletebytag"];
    
    if (empty($taglist))
    {
        badinput("in need of at least one tag!");
        exit();
    }
           
    $removepicmatch = '/^[a-zA-Z0-9]+$/';
    if (!preg_match($removepicmatch, $taglist))
    {
        badinput('Tag input is invalid! Only letters and digits are allowed!');
        exit();
    }
                       
        connectToDatabase();
            
        $query = $mysqli->prepare("SELECT PicID FROM imagetag WHERE tagstr=?");
        $query->bind_param('s', $taglist);
        $query->execute();
        $query->bind_result($id);
                
        $matches = array();
        $count = 0;
        while ($query->fetch())
        {
            $count++;
            $matches[] = $id;
        }
                
        if ($count == 0)
        {
            echo <<< NOTAG
                <div class="error">
                    <h4>Sorry, no matches!</h4>
                        <h5>There are currently no pictures tagged with <i>'$taglist'</i>.</h5>
                </div>
NOTAG;
            return;
        }
        else
        {
            echo <<< TAG
                <div class="contactus">
                    <h1>Pictures With Tag '$taglist' has/have been deleted!</h1>
                </div>
                <table border="1">
                        <thead>
                            <tr>
                            <th>
                                <div class="title">
                                    <u>Picture</u>
                                </div>
                            </th>
                            <th>
                                <div class="title">
                                    <u>Title </u>
                                </div>
                            </th>
                            </tr>
                        </thead>
                        <tbody>
TAG;
 
            $item = 0;
                $stmt = $mysqli->prepare("SELECT Tagstr FROM imagetag WHERE Tagstr=?");
                    foreach($matches as $matchid)
                    {
                        $stmt->bind_param('s', $matchid);
                        $stmt->execute();
                        $stmt->bind_result($tag);
                        $stmt->fetch();
                        $item++;
                        echo "<tr>";
                        echo "<td><div class=contactform>$matchid</div></td>";
                        echo "<td><div class=contactform>$taglist</div></td>";
                        echo "</tr>";
                    } 
                    echo "</table>";

        $stmt = "DELETE FROM imagetag WHERE Tagstr = '$taglist'";
        $mysqli->query($stmt);
        $errortag = $mysqli->error;    
                 
            if (!empty($errortag))
            {
                echo <<<FAILEDTAG
                    <div class="error">
                        <h1>Failure Tag!</h1>
                            <h2>Tag delete failed.</h2>
                                <p>MySQL database error code was $errortag.</p>
                    </div>
FAILEDTAG;
            }
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
   remove_tag();
}
else 
{
    display_remove_form();
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