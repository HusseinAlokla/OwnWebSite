<?php
    session_start();
    if (!isset($_SESSION["username"])){
        header("location:../index.php");
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main</title>
    <link rel="stylesheet" href="../css/main.css" />
    <link rel="stylesheet" href="../css/icons.css" />
    <link rel="stylesheet" href="../css/mStyle1.css">
    <link rel="stylesheet" href="../css/contact.css">
    <link rel="stylesheet" href="../css/myStyles.css">
    <style>

    </style>
</head>

<body style="overflow: hidden; ">

    <div class="Header-div">
      
        <div id="dropdown-menu" style="float: left; background-color: rgb(103, 100, 100); margin-top: 15px;">
          <span>≡MENU</span>
          <div class="dropdown-content">
            <ul>
              <a href="Contact.php">
                <li>☏ Contact Me</li>
              </a>
              <a href="CV.php">
                <li>💼 My CV</li>
              </a>
              <a href="Gallery.php">
                <li>📷 Gallery</li>
              </a>
            </ul>
          </div>
        
      </div>
      <div id="user-welcome" class="margin-bottom:23px">welcome <?php echo $_SESSION["username"]; ?><a href="../index.php"> logout</a></div> 

        <h1>Main Menu Page</h1>
        
    </div>

    <img src="../images/image_Gif.gif" alt="portfolio" class="my-img1">

</body>

</html>
