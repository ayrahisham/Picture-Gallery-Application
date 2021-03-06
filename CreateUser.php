<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
    $cookie_name = "user";
    $cookie_value = "admin";
    setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
?>
<html>
    <head>
       <!--
       Title is needed to define the display in the user's browser tool bar, 
       search engine and when user adds the page to favorites.
       -->
        <title>Register Account With Gallery</title>
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
                  <a href= "index.php">
                      <img src="./images/gallerylogo.png" alt="gallerylogo" width="180" height= "160" align="top-left">
                  </a>
            </div>
          <script src="myjavascript.js"></script> 
<?php
$mysqli= 0;

function badinput($msg)
{
    echo <<< BADINPUT
    <div class="error">
        <h4>Sorry, it seems there is an error while registering due to <br> <i><u>$msg</u></i></h4>
        <h5><a href = 'CreateUser.php'><b>Register Me</b></a></h5>
        <h5>Alternatively, <a href = 'Login.php'><b>Log Me In</b></a></h5>
    </div>
BADINPUT;
}

function display_create_form()
{
    $phpself = $_SERVER["PHP_SELF"]; 
    echo <<<REGISTERFORM
            <form method="post" action=$phpself?>
                <div class="registerform">
                <table>
                  <tr>
                    <td width="10%">
                          
                    </td>
                    <td>
                        <h1>REGISTER TO UPLOAD PICTURES</h1> 
                    </td>
                  </tr>
                  <tr>
                    <td>
                        <div class="avatar">
                            <img src="./images/avatar.png" alt="avatar" width="100" height="100" align="center">
                        </div>
                    </td>
                  </tr>
                   <tr>
                        <td>
                            <label><b>Username:</b></label><br>
                        </td>
                   </tr>
                   <tr>
                        <td>
                            <img src="./images/username.png" alt="unameicon" width="50" height="50">
                        </td>
                        <td>
                            <input type="text" placeholder="Create Your Username" name="uname" required size="10">
                        </td>
                   </tr>
                   <tr>
                        <td>
                            <label><b>Password:</b></label><br>
                        </td>
                   </tr>
                    <tr>
                        <td>
                            <img src="./images/password.png" alt="pwordicon" width="50" height="50">
                        </td>
                        <td>
                            <input type="password" placeholder="Create Your Password" name="pword" required size="10">
                        </td>
                    </tr>
                    <tr>
                        <td width="30%">
                            
                        </td>
                        <td>
                            <div class="lbutton">
                                <button type="submit">Create My Account</button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td width="30%">
                            
                        </td>
                        <td>
                            <div class="cancelbtn">
                                <a href="index.php">
                                <button type="button">Go Back To Home</button></a>
                            </div>
                        </td>
                    </tr>
                </table>
                <script src="myjavascript.js"></script>
                </div>
            </form>
REGISTERFORM;
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
        
function handle_create()
{
    global $mysqli;
    $uname = $_POST["uname"];
    $pwd = $_POST["pword"];
    
    if (empty($uname) || empty ($pwd))
    {
        display_login_form();
        return;
    }
    
    $umatch = '/^[a-zA-Z0-9_-]{3,15}$/';
    if (!preg_match($umatch, $uname))
    {
        badinput('username has to consist of alphabets, capital letters and digits!');
        exit;
    }
    
    $pmatch = '/((?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[@#$%]).{6,20})/';
    if (!preg_match($pmatch, $pwd))
    {
        badinput('password has to consist of alphabets, capital letters, digits and symbols!');
        exit;
    }
    
    connectToDatabase();
    $cryptpwd = md5($pwd);
    $stmt = $mysqli->prepare("INSERT INTO login VALUES (?, ?)");
    $stmt->bind_param('ss', $uname, $cryptpwd);
    $stmt->execute();
    
    $errreport = $stmt->error;
    
    if (empty($errreport))
    {
        session_start();
        $_SESSION["user"] = $uname;
        echo <<< WELCOME
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
          
          <div id="main">
                <div class="intro">
                    <h1>WELCOME TO THE GALLERY, <br> <i>$uname</i>!</h1>
                </div>
          </div>
            
          <script src="myjavascript.js"></script> 
WELCOME;
    }
    else
    {
        badinput('account has already been created!');
    }
    
    $stmt->close();
}
    
$method = $_SERVER["REQUEST_METHOD"];

if ($method == "POST")
{
    handle_create();
}
else
{
    display_create_form();
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