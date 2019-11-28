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
        <title>Say Hello</title>
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
    <body background="images/background.jpg">
           
        <div class="topmenu">
            <a href="https://www.facebook.com/siiimpledesigns/"><img src="./images/fbicon.png" alt="facebook" width="25" height="25"></a>
            <a href="https://twitter.com/siiimple"><img src="./images/twittericon.png" alt="twitter" width="30" height="30"></a>
            <a href="https://www.instagram.com/simple/?hl=en"><img src="./images/igicon.png" alt="instagram" width="25" height="25"></a>
        </div> 
        
          <div id="main">
             <div id="banner">
                  <a href= "index.php">
                      <img src="./images/gallerylogo.png" alt="gallerylogo" width="180" height= "160" align="top-left">
                  </a>
            </div>
              
            <div id="mySidenav" class="sidenav">
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                <a href="home.php">About</a>
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
            // define variables and set to empty values
$mysqli=0;
         
function badinput($msg)
{
   echo <<< BADINPUT
    <div class="error">
        <h4>Sorry, it seems there is an error while sending your hello due to <br> <i><u>$msg</u></i></h4>
        <h5><a href = 'SayHello.php'><b>Return To Edit</b></a></h5>
    </div>
BADINPUT;
}

function display_add_hello()
{   
    $phpself = $_SERVER["PHP_SELF"];
    echo <<<ADDHELLO
            <form method="post" style="background-image: url('./images/contactbackground.jpg')" action="$phpself">
                <div class="contactus">
                    <h2>We would love to hear your thoughts!</h2>
                    <h4><i>We will do our very best to get back to you as soon as possible!</i></h4>
                </div>
                <table>
                    <tr>
                        <td colspan="2">
                            <div class="contactform">
                                *Your Name: 
                            </div>
                        </td>
                        <td>
                            <input type="text" name="name" size="30">
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <div class="contactform">
                                *Your Email: 
                            </div>
                        </td>   
                        <td>
                            <input type="text" name="email" size="30"/>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <div class="contactform">
                                *Your Subject: 
                            </div>
                        </td>   
                        <td>
                            <select name="subject" size="1">
                                <option value="">[Please choose yours]</option>
                                <option value="complaint">Complaint</option>
                                <option value="enquiry">Enquiry</option>
                                <option value="suggestion">Suggestion</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <div class="contactform">
                                *Your Comment: 
                            </div>
                        </td>   
                        <td> 
                            <textarea name="comment" cols="30" rows="10"></textarea>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="4">
                            <div class="contactform">
                                <input type="submit" value="Send Your Hello" size="30">
                            </div>
                        </td>
                    </tr>
                </table>
            </form>
ADDHELLO;
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

function add_hello()
{
    global $mysqli;
    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $comment = $_POST["comment"];
    
   if (empty($name)) 
   {
        badinput("in need of name!");
        exit();
   } 
   else 
   {
        if (!preg_match("/^[a-zA-Z ]*$/",$name)) 
        {
            badinput("only letters and white space allowed!");
            exit();
        }
   }

    if (empty($email)) 
    {
        badinput("in need of email!");
        exit();
    }
    else
    {   
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) 
        {
            badinput("invalid email format!"); 
            exit();
        }
    }

    if (empty($subject)) 
    {
        badinput("subject is required!");
        exit();
    }
              
    if (empty($comment)) 
    {
        badinput("comment is requried!");
        exit();
    } 
    else 
    {
        if (!preg_match("/^[a-zA-Z ]*$/",$comment)) 
        {
            badinput("only letters and white space allowed!"); 
            exit();
        }
    }
          
    connectToDatabase();
            
    $stmt = "INSERT INTO hello VALUES ('$name', '$email', '$subject', '$comment')";
    $mysqli->query($stmt);
    $errorhello = $mysqli->error;    
             
             
    if (!empty($errorhello))
    {
        echo <<<FAILEDHELLO
            <div class="error">
                <h1>Failed Hello!</h1>
                    <h2>Hello update failed.</h2>
                        <p>MySQL database error code was $errorhello.</p>
            </div>
FAILEDHELLO;
    }
    else
    {
        $result = $mysqli->query("SELECT LAST_INSERT_ID()");
        $row = $result->fetch_row();
        echo <<< SUCCESSHELLO
            <div class="error">
                <h1>Hello Record Inserted!</h1>
                    <h2>New Hello Submmited!</h2>
                        <p>Your Hello: <i>$comment</i> is recorded.</p>
            </div>
SUCCESSHELLO;
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
   add_hello();
}
else
{
    display_add_hello();
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