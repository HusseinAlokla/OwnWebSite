<?php
    session_start();
    if (!isset($_SESSION["username"])){
        header("location:../index.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact Us</title>
    <link rel="stylesheet" href="../css/contact.css" />
    <link rel="stylesheet" href="../css/icons.css" />
    <link rel="stylesheet" href="../css/mStyle1.css" />
  </head>
  <body>
    <div class="Header-div" style="    background-color: #333;
    color: #fff;
    text-align: center;
    padding: 1px;
    display: flex;
    justify-content: space-between;">
      <div
      id="dropdown-menu"
      style="background-color: rgb(56, 56, 62); float: left; margin-top: 10px;"
    >
      <span>≡MENU</span>
      <div class="dropdown-content"style="background-color: rgb(40, 43, 46); ">
        <ul>
          <a href="CV.php">
            <li>💼 MY Cv</li>
          </a>
          <a href="main.php">
            <li></i>🏠 MainPage</li>
          </a>
          <a href="Gallery.php">
            <li>📷 Gallery</li>
          </a>
        </ul>
      </div>
      
    </div>

      <h1>Contact Me</h1>
      <div id="user-welcome" style="display: flex;float: right;
    align-items: center; gap:8px">welcome <?php echo $_SESSION["username"] ; ?><a href="../index.php" class="text-decoration: none;
    color: #0ba5bf;
    font-weight: bold;
    transition: color 0.3s;
   "> logout</a></div> 

    </div>

    <div class="container">
      <div class="contact-info">
        <h2>Contact Information</h2>
        <p><strong>Address:</strong> Commodore Street, Hamra, Beirut</p>
        <p><strong>Phone:</strong> +961 76 671 593</p>
        <p><strong>Email:</strong> hussein.alokla77@gmail.com</p>
      </div>

      <form action="submit_form.php" method="post">
        <div class="form-group">
          <label for="name">Name:</label>
          <input type="text" id="name" name="name" required />
        </div>

        <div class="form-group">
          <label for="email">Email:</label>
          <input type="email" id="email" name="email" required />
        </div>

        <div class="form-group">
          <label for="message">Message:</label>
          <textarea id="message" name="message" rows="5" required></textarea>
        </div>

        <button type="submit">Submit</button>
      </form>
    </div>

    <footer>
      <p>&copy; 2023 Hussein Alokla</p>
    </footer>
  </body>
</html>
