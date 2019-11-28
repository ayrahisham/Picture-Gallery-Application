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
        <title>Add Multiple Pictures</title>
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
            
        <div class="contactus">
            <h1>Add Multiple Pictures To The Gallery Collection</h1>          
        </div>  
             
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
                 
function display_addpic_form()
{
    $phpself = $_SERVER["PHP_SELF"];
    echo <<<ADDPICFORM
        <form method="post" style="background-image: url('./images/addpicturebackground.jpg')" action="$phpself" enctype="multipart/form-data" input type="hidden" name="MAX_FILE_SIZE" value=1000000>
            <table border="1">
                <tr>
                    <th colspan="2">
                        <div class="contactus">
                            <h2><u>PICTURE 1</u></h2>
                        </div>
                    </th>
                </tr>
                <tr>
                    <th>
                        <div class="contactform">
                            *Title: 
                        </div>
                    </th>
                    <td>
                        <div class="contactus">
                            <textarea name='title1' rows='2' cols='50'></textarea>
                        </div>
                    </td>
                </tr>
                <tr>
                    <th>
                        <div class="contactform">
                             *Comment: 
                        </div>
                    </th>
                    <td>
                         <div class="contactus">
                             <textarea name='comment1' rows='8' cols='80'></textarea>
                         </div>
                    </td>
                </tr>
                <tr>
                    <th>
                        <div class="contactform">
                             *Picture (all types of files): 
                        </div>
                    </th>
                    <td>
                        <div class="contactus">
                            <input type="file" name="image1"></input>
                        </div>
                    </td>
                </tr>
                <tr>
                    <th>
                        <div class="contactform">
                            *Comma separated list of tags: 
                        </div>
                    </th>
                    <td>
                        <div class="contactus">
                            <textarea name='taglist1' rows='5' cols='50'></textarea>
                        </div>
                    </td>
                </tr>
                <tr>
                    <th colspan="2">
                        <div class="contactus">
                            <h2><u>PICTURE 2</u></h2>
                        </div>
                    </th>
                </tr>
                <tr>
                    <th>
                        <div class="contactform">
                            *Title: 
                        </div>
                    </th>
                    <td>
                        <div class="contactus">
                            <textarea name='title2' rows='2' cols='50'></textarea>
                        </div>
                    </td>
                </tr>
                <tr>
                    <th>
                        <div class="contactform">
                             *Comment: 
                        </div>
                    </th>
                    <td>
                         <div class="contactus">
                             <textarea name='comment2' rows='8' cols='80'></textarea>
                         </div>
                    </td>
                </tr>
                <tr>
                    <th>
                        <div class="contactform">
                             *Picture (all types of files): 
                        </div>
                    </th>
                    <td>
                        <div class="contactus">
                            <input type="file" name="image2"></input>
                        </div>
                    </td>
                </tr>
                <tr>
                    <th>
                        <div class="contactform">
                            *Comma separated list of tags: 
                        </div>
                    </th>
                    <td>
                        <div class="contactform">
                            <textarea name='taglist2' rows='5' cols='50'></textarea>
                        </div>
                    </td>
                </tr>
            <tr>
                    <th colspan="2">
                        <div class="contactus">
                            <h2><u>PICTURE 3</u></h2>
                        </div>
                    </th>
                </tr>
                <tr>
                    <th>
                        <div class="contactform">
                            *Title: 
                        </div>
                    </th>
                    <td>
                        <div class="contactus">
                            <textarea name='title3' rows='2' cols='50'></textarea>
                        </div>
                    </td>
                </tr>
                <tr>
                    <th>
                        <div class="contactform">
                             *Comment: 
                        </div>
                    </th>
                    <td>
                         <div class="contactus">
                             <textarea name='comment3' rows='8' cols='80'></textarea>
                         </div>
                    </td>
                </tr>
                <tr>
                    <th>
                        <div class="contactform">
                             *Picture (all types of files): 
                        </div>
                    </th>
                    <td>
                        <div class="contactus">
                            <input type="file" name="image3"></input>
                        </div>
                    </td>
                </tr>
                <tr>
                    <th>
                        <div class="contactform">
                            *Comma separated list of tags: 
                        </div>
                    </th>
                    <td>
                        <div class="contactus">
                            <textarea name='taglist3' rows='5' cols='50'></textarea>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                    </td>
                    <td colspan="4">
                        <div class="contactform">
                            <input type="submit" value="Upload All Pictures" align="right">
                        </div>
                    </td>
                </tr>
            </table>
        </form>      
ADDPICFORM;
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
         
function add_pictures()
{
    global $mysqli;
    //image1
    $error1 = $_FILES["image1"]["error"];
    if ($error1 != UPLOAD_ERR_OK)
    {
        badinput($error1);
            exit();
    }
        
    $filename1 = $_FILES['image1']['tmp_name'];
    $title1 = $_POST["title1"];
    $comment1 = $_POST["comment1"];
    $taglist1 = $_POST["taglist1"];
    if (empty($title1))
    {
        badinput("in need of title!");
        exit();
    }
    
    if (empty($comment1))
    {
        badinput("in need of comment!");
        exit();
    }
    
    if (empty($taglist1))
    {
        badinput("in need of tag(s)!");
        exit();
    }
           
    $addpicmatch = '/^[a-zA-Z0-9\s"\.;,:!?()]+$/';
    if (!preg_match($addpicmatch, $title1))
    {
        badinput('title input is invalid!');
        exit();
    }
           
    if (!preg_match($addpicmatch, $comment1))
    {
        badinput('comment input is invalid!');
        exit();
    }
           
    $numbytes1 = filesize($filename1);
           
    $handle1 = fopen($filename1, "r");
    if (!$handle1)
    {
        badinput("unable to open file!");
        exit;
    }
        
    $imagedata1 = addslashes(fread($handle1,$numbytes1));
    if (!$imagedata1)
    {
        badinput("unable to read file!");
        exit;
    }
        
    fclose($handle1);
    
     //image2
    $error2 = $_FILES["image2"]["error"];
    if ($error2 != UPLOAD_ERR_OK)
    {
        badinput($error2);
            exit();
    }
        
    $filename2 = $_FILES['image2']['tmp_name'];
    $title2 = $_POST["title2"];
    $comment2 = $_POST["comment2"];
    $taglist2 = $_POST["taglist2"];
    if (empty($title2))
    {
        badinput("in need of title!");
        exit();
    }
    
    if (empty($comment2))
    {
        badinput("in need of comment!");
        exit();
    }
    
    if (empty($taglist2))
    {
        badinput("in need of tag(s)!");
        exit();
    }
    
    if (!preg_match($addpicmatch, $title2))
    {
        badinput('title input is invalid!');
        exit();
    }
           
    if (!preg_match($addpicmatch, $comment2))
    {
        badinput('comment input is invalid!');
        exit();
    }
           
    $numbytes2 = filesize($filename2);
           
    $handle2 = fopen($filename2, "r");
    if (!$handle2)
    {
        badinput("unable to open file!");
        exit;
    }
        
    $imagedata2 = addslashes(fread($handle2,$numbytes2));
    if (!$imagedata2)
    {
        badinput("unable to read file!");
        exit;
    }
        
    fclose($handle2);
    
            
    //image3
    $error3 = $_FILES["image3"]["error"];
    if ($error3 != UPLOAD_ERR_OK)
    {
        badinput($error3);
            exit();
    }
        
    $filename3 = $_FILES['image3']['tmp_name'];
    $title3 = $_POST["title3"];
    $comment3 = $_POST["comment3"];
    $taglist3 = $_POST["taglist3"];
    if (empty($title3))
    {
        badinput("in need of title!");
        exit();
    }
    
    if (empty($comment3))
    {
        badinput("in need of comment!");
        exit();
    }
    
    if (empty($taglist3))
    {
        badinput("in need of tag(s)!");
        exit();
    }
    
    if (!preg_match($addpicmatch, $title3))
    {
        badinput('title input is invalid!');
        exit();
    }
           
    if (!preg_match($addpicmatch, $comment3))
    {
        badinput('comment input is invalid!');
        exit();
    }
           
    $numbytes3 = filesize($filename3);
           
    $handle3 = fopen($filename3, "r");
    if (!$handle3)
    {
        badinput("unable to open file!");
        exit;
    }
        
    $imagedata3 = addslashes(fread($handle3,$numbytes3));
    if (!$imagedata3)
    {
        badinput("unable to read file!");
        exit;
    }
        
    fclose($handle3);
    
    //image1
    connectToDatabase();
           
        $query1 = "INSERT INTO image VALUES(null, '$title1', '$comment1', '$imagedata1')";
        $mysqli->query($query1);
        $errorreport1 = $mysqli->error;
             
        if (!empty($errorreport1))
        {
            echo <<<FAILEDRESPONSE
                <div class="error">
                    <h1>Failure Page!</h1>
                        <h2>First Picture update failed.</h2>
                            <p>MySQL database error code was $errorreport1.</p>
                </div>
FAILEDRESPONSE;
        }
        else
        {
            $result1 = $mysqli->query("SELECT LAST_INSERT_ID()");
            $row1 = $result1->fetch_row();
            $ident1 = $row1[0];
            echo <<< SUCCESSRESPONSE
                 <div class="error">
                    <h1>First Picture Record Inserted!</h1>
                        <h2>New Picture Created!</h2>
                            <p>Picture record is #$ident1.</p>
                </div>
SUCCESSRESPONSE;
        }
        
        //image2
        connectToDatabase();
        
        $query2 = "INSERT INTO image VALUES(null, '$title2', '$comment2', '$imagedata2')";
        $mysqli->query($query2);
        $errorreport2 = $mysqli->error;
             
        if (!empty($errorreport2))
        {
            echo <<<FAILEDRESPONSE
                <div class="error">
                    <h1>Failure Page!</h1>
                        <h2>First Picture update failed.</h2>
                            <p>MySQL database error code was $errorreport2.</p>
                </div>
FAILEDRESPONSE;
        }
        else
        {
            $result2 = $mysqli->query("SELECT LAST_INSERT_ID()");
            $row2 = $result2->fetch_row();
            $ident2 = $row2[0];
            echo <<< SUCCESSRESPONSE
                 <div class="error">
                    <h1>First Picture Record Inserted!</h1>
                        <h2>New Picture Created!</h2>
                            <p>Picture record is #$ident2.</p>
                </div>
SUCCESSRESPONSE;
        }
        
        //image3
        connectToDatabase();
        
        $query3 = "INSERT INTO image VALUES(null, '$title3', '$comment3', '$imagedata3')";
        $mysqli->query($query3);
        $errorreport3 = $mysqli->error;
             
        if (!empty($errorreport3))
        {
            echo <<<FAILEDRESPONSE
                <div class="error">
                    <h1>Failure Page!</h1>
                        <h2>First Picture update failed.</h2>
                            <p>MySQL database error code was $errorreport3.</p>
                </div>
FAILEDRESPONSE;
        }
        else
        {
            $result3 = $mysqli->query("SELECT LAST_INSERT_ID()");
            $row3 = $result3->fetch_row();
            $ident3 = $row3[0];
            echo <<< SUCCESSRESPONSE
                 <div class="error">
                    <h1>First Picture Record Inserted!</h1>
                        <h2>New Picture Created!</h2>
                            <p>Picture record is #$ident3.</p>
                </div>
SUCCESSRESPONSE;
        }
            
        //First Tag
        $tagsarray1 = explode(",",$taglist1);
             
        foreach($tagsarray1 as $atag1)
        {
            $alphas = '/^[A-Za-z ]+$/';
            if (!preg_match($alphas, $atag1)) 
            {
                     continue;
             }
             
            connectToDatabase();
            
            $stmt1 = "INSERT INTO imagetag VALUES ('$atag1', '$ident1')";
            $mysqli->query($stmt1);
            $errortag1 = $mysqli->error;    
        }
             
        if (!empty($errortag1))
        {
            echo <<<FAILEDTAG
                <div class="error">
                    <h1>Failure Tag!</h1>
                        <h2>First Tag update failed.</h2>
                            <p>MySQL database error code was $errortag1.</p>
                </div>
FAILEDTAG;
        }
        else
        {
            $result1 = $mysqli->query("SELECT LAST_INSERT_ID()");
            $row1 = $result1->fetch_row();
            echo <<< SUCCESSTAG
                <div class="error">
                    <h1>First Tag Record Inserted!</h1>
                        <h2>New Tag Picture Created!</h2>
                            <p>Tag Picture record is #$ident1.</p>
                </div>
SUCCESSTAG;
         }
    
     //Second Tag
        $tagsarray2 = explode(",",$taglist2);
             
        foreach($tagsarray2 as $atag2)
        {
            $alphas = '/^[A-Za-z ]+$/';
            if (!preg_match($alphas, $atag2)) 
            {
                     continue;
             }
             
            connectToDatabase();
            
            $stmt2 = "INSERT INTO imagetag VALUES ('$atag2', '$ident2')";
            $mysqli->query($stmt2);
            $errortag2 = $mysqli->error;    
        }
             
        if (!empty($errortag2))
        {
            echo <<<FAILEDTAG
                <div class="error">
                    <h1>Failure Tag!</h1>
                        <h2>First Tag update failed.</h2>
                            <p>MySQL database error code was $errortag2.</p>
                </div>
FAILEDTAG;
        }
        else
        {
            $result2 = $mysqli->query("SELECT LAST_INSERT_ID()");
            $row2 = $result2->fetch_row();
            echo <<< SUCCESSTAG
                <div class="error">
                    <h1>First Tag Record Inserted!</h1>
                        <h2>New Tag Picture Created!</h2>
                            <p>Tag Picture record is #$ident2.</p>
                </div>
SUCCESSTAG;
         }    
         
     //Third Tag
        $tagsarray3 = explode(",",$taglist3);
             
        foreach($tagsarray3 as $atag3)
        {
            $alphas = '/^[A-Za-z ]+$/';
            if (!preg_match($alphas, $atag3)) 
            {
                     continue;
             }
             
            connectToDatabase();
            
            $stmt3 = "INSERT INTO imagetag VALUES ('$atag3', '$ident3')";
            $mysqli->query($stmt3);
            $errortag3 = $mysqli->error;    
        }
             
        if (!empty($errortag3))
        {
            echo <<<FAILEDTAG
                <div class="error">
                    <h1>Failure Tag!</h1>
                        <h2>First Tag update failed.</h2>
                            <p>MySQL database error code was $errortag3.</p>
                </div>
FAILEDTAG;
        }
        else
        {
            $result3 = $mysqli->query("SELECT LAST_INSERT_ID()");
            $row3 = $result3->fetch_row();
            echo <<< SUCCESSTAG
                <div class="error">
                    <h1>First Tag Record Inserted!</h1>
                        <h2>New Tag Picture Created!</h2>
                            <p>Tag Picture record is #$ident3.</p>
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
   add_pictures();
}
else
{
    display_addpic_form();
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