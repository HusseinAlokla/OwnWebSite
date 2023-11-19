<?php
    session_start();
    if (!isset($_SESSION["username"])){
        header("location:../index.php");
    }
?>
<!DOCTYPE html>
<html>
  <head>
    <title>My Creative CV</title>
      <link rel="stylesheet" href="../css/Cv.css" />
      <link rel="stylesheet" href="../css/mStyle1.css" />
      <link rel="stylesheet" href="../css/main.css" />
      <link rel="stylesheet" href="../css/icons.css" />
  </head>
  <body>
      

   <div class = "Main-div">
      <div class="black-div">
        <div class="row" id="header">
          <div id="dropdown-menu" style="background-color: #554848;width=200px">
            <span>≡MENU</span>
            <div class="dropdown-content" style="background-color: rgb(40, 43, 46);">
              <ul>
                <a href="Contact.php">
                  <li></i>☏ Contact</li>
                </a>
                <a href="main.php">
                  <li></i>🏠 MainPage</li>
                </a>
                <a href="Gallery.php">
                  <li></i>📷 Gallery</li>
                </a>
              </ul>
            </div>
          </div>
        </div>
        <h1><center>Hussein Alokla</center></h1>
        <img src="../images/myphoto.jpg" style="width: 323px" alt="" />
        <h2 class="my-class">Contact</h2>
        <hr />
        <h3 class="my-class">Address🗺️:</h3>
        <p class="my-class">
          <a href="https://maps.app.goo.gl/nxV9FQNUXoA4k9CfA">Location</a>
        </p>

        <h3 class="my-class">phone:&#128222</h3>
        <pre
          style="font-size: large"
          class="my-class"
        ><a href=" https://wa.me/96176671593">chat with me</a></pre>

        <h3 class="my-class">Email📧:</h3>
        <pre
          style="font-size: large"
          class="my-class"
        ><a href="mailto:hussein.alokla@lau.edu">Email me</a></pre>
        <br />
        <h2 class="my-class">Languages</h2>
        <hr />
        <div class="language">
          <p class="my-class">English</p>
          <div class="language-bar">
            <div class="language-progress english-progress"></div>
          </div>
        </div> 
        
        <div class="language">
          <p class="my-class">Arabic</p>
          <div class="language-bar">
            <div class="language-progress arabic-progress"></div>
          </div>
        </div>
        <h2 class="my-class">Hobbies</h2>
        <hr style= />
        <ul>
          <li class="my-class">Football 	&#x26bd</li>
          <li class="my-class">Running 		&#x1f3c3</li>
          <li class="my-class">Weight-lifting &#x1f3cb</li>
        </ul>
      </div>
      <div style="float: right;"><div id="user-welcome" style="color:black">welcome <?php echo $_SESSION["username"]; ?><a href="../index.php">  logout</a></div> 
<h2 style="padding-top: 30px">Summary</h2>
        <hr style="border-top: 2px solid rgb(0, 0, 0)" />

        <p>
          As a dedicated computer science student, I am passionate about solving
          complex problems through innovative technology solutions. With a
          strong foundation in programming languages like Python and Java, as
          well as coursework in data structures, algorithms, and web
          development, I am well-equipped to contribute to real-world projects.
          I thrive in collaborative environments and am eager to apply my
          problem-solving skills and passion for technology to a dynamic team.
          Seeking opportunities to gain hands-on experience and further develop
          my skills in software development and computer science
        </p>
        <h2>Skill Higlights</h2>
        <hr style="border-top: 2px solid rgb(0, 0, 0)" />
        <ul>
          <li>Project Management</li>
          <li>Strong decision maker</li>
          <li>Complex problem solver</li>
          <li>Service focused</li>
        </ul>
        <h2>Experience</h2>
        <hr style="border-top: 2px solid rgb(0, 0, 0)" />
        <p style="font-size: 500; font-weight: bold">Cashier:</p>
        <p>5/2020 to 9/2020, Turqouise Beach Resort</p>
        <p style="font-size: 500; font-weight: bold">Private Tutor:</p>
        <p>2022 to 6/2023, at home</p>

        <h2>Education</h2>
        <hr style="border-top: 2px solid rgb(0, 0, 0)" />
        <pre style="font-size: large; font-family: inherit">
Bachelor of Science: Computer Science 2022-present
Lebanese American University, Leb
        </pre>
        <h2>Certifications</h2>
        <hr style="border-top: 2px solid rgb(0, 0, 0)" />
        <ul>
          <li>Introduction to python: Datacamp</li>
          <li>Intermediate python: Datacamp</li>
          <li>Introduction to Datascience: 365 DataScience</li>
          <li>Machine learing using naive bayes: 365 DataScience</li>
          <li>Object Oriented programming: Udemy</li>
          <li>SQL: Coursera</li>
          <li>Python for Everybody: Coursera</li>
        </ul></div>
      </div>
    </body>
</html>