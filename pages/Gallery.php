<?php
    session_start();
    if (!isset($_SESSION["username"])){
        header("location:../index.php");
    }
    
$galleryData = json_decode(file_get_contents('../images.json'), true);

if ($galleryData && isset($galleryData['images'])) {
    $imageNames = $galleryData['images'];
} else {
    // Default images if JSON data is not available
    $imageNames = ["defaultImage1.jpg", "defaultImage2.jpg"];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery</title>
    <link rel="stylesheet" href="../css/main.css" />
    <link rel="stylesheet" href="../css/icons.css" />
    <link rel="stylesheet" href="../css/mStyle1.css" />
    <link rel="stylesheet" href="../css/Gallery.css">
    <link rel="stylesheet" href="../css/myStyles.css" />
    <link rel="stylesheet" href="../css/Form.css" />
    <style>
        /* Additional styles specific to the Gallery page */
        #header {
            background-color: rgb(165, 125, 14);
        }

        #user-welcome {
            color: white;
            padding: 10px;
        }

        #user-welcome a {
            color: white;
            text-decoration: none;
            font-weight: bold;
            margin-left: 10px;
        }

        .img-frame {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
        }

        .my-img {
            margin: 10px;
            cursor: pointer;
        }

        .modal {
            display: none;
            position: fixed;
            z-index: 1;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgb(0, 0, 0);
        }

        .modal-content {
            margin: 5% auto;
            display: block;
            max-width: 700px;
        }

        .modal-image {
            width: 100%;
            height: auto;
        }

        .close-button {
            color: white;
            font-size: 30px;
            font-weight: bold;
            position: absolute;
            top: 10px;
            right: 15px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="row" id="header" style="background-color:rgb(165, 125, 14);">
        <div id="dropdown-menu" style="background-color:rgb(165, 125, 14);">
            <span>≡MENU</span>
            <div class="dropdown-content">
                <ul>
                    <a href="Contact.php"><li>☏ Contact Me</li></a>
                    <a href="CV.php"><li>💼 My CV</li></a>
                    <a href="main.php"><li>🏠 MainPage</li></a>
                </ul>
            </div>
        </div>
        <div id="user-welcome">
            Welcome <?php echo $_SESSION["username"]; ?>
            <a href="../index.php">Logout</a>
        </div>
    </div>

    <h1 style="text-align: center; padding-top: 20px;">Gallery</h1>

    <div class="img-frame">
        <?php
        

        foreach ($imageNames as $imageName) {
            $imagePath = "../images/" . $imageName;
        ?>
        <a href="#modal-<?php echo $imageName; ?>">
            <div class="my-img">
                <img src="<?php echo $imagePath; ?>" class="zoom-img" alt="<?php echo $imageName; ?>" />
            </div>
        </a>
        <?php
        }
        ?>
    </div>
    <div class="paragraph" style="align-items:center">
        <form action="../BE/updateGallery.php" method="POST" id="login-form-image" style="display: flex;align-items: center;
    justify-content: center;"><label for="newImage">New Image Name:</label>
        <input type="text" id="newImage" name="newImage" class="txtfield" style="margin:1px,-1px,8px,0px" />
        <button type="button" onclick="addImage()" class="mButton" style="padding:10px;margin-bottom:8px">Add Image</button></form>
        
    </div>
    <?php
    foreach ($imageNames as $imageName) {
    ?>
    <div id="modal-<?php echo $imageName; ?>" class="modal">
        <span class="close-button" onclick="location.href='#'">&times;</span>
        <div class="modal-content">
            <img class="modal-image" src="../images/<?php echo $imageName; ?>" alt="<?php echo $imageName; ?>" />
        </div>
    </div>
    <?php
    }
    
    ?>

    <script>
        // Open the modal when clicking on an image
        function addImage() {
            var imageNameInput = document.getElementById('newImage');
            if(imageNameInput ==""){
                alert("You must fill in the image name!");
            }
            else{
                document.getElementById("login-form-image").submit();
            }
         
           
        }
        var modalLinks = document.querySelectorAll('.my-img a');
        modalLinks.forEach(function(link) {
            link.addEventListener('click', function() {
                var modalId = this.getAttribute('href').substring(1);
                document.getElementById(modalId).style.display = 'block';
            });
        

        // Close the modal when clicking the close button
        var closeButtons = document.querySelectorAll('.close-button');
        closeButtons.forEach(function(button) {
            button.addEventListener('click', function() {
                this.parentElement.style.display = 'none';
            });
        });

        // Close the modal when clicking outside the modal content
        window.addEventListener('click', function(event) {
            if (event.target.classList.contains('modal')) {
                event.target.style.display = 'none';
            }
        });
    });
    </script>
</body>
</html>
