<?php 
session_start();
session_unset();
session_destroy();

?>


<html>
    <head>
        <link rel="stylesheet" href="css/myStyles.css"> 
        <link rel="stylesheet" href="css/icons.css"> 
       
        <title>
            Login
        </title>
        <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f7f7f7;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            
        }

        .container {
                
            width: 100%;
        }

        .title {
            text-align: center;
    margin-top: -77px;
    font-size: 36px;
    font-weight: bold;
    color: #2c3e50;
    padding-top: 10px;
}
        

        .paragraph {
            background-color: #fff;
            border: 2px solid #3498db;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin: 10px;
            padding: 50px;
            font-size: 16px;
            color: #333;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        label {
            margin-bottom: 8px;
            color: #2c3e50;
        }

        input {
            padding: 10px;
            margin-bottom: 16px;
            border: 2px solid #bdc3c7;
            border-radius: 4px;
        }

        input[type="button"] {
            background-color: #3498db;
            color: #fff;
            cursor: pointer;
        }

        input[type="button"]:hover {
            background-color: #2980b9;
        }

        input[type="text"], input[type="password"] {
            color: #333;
        }

        a {
            display: block;
            margin-top: 10px;
            text-align: center;
            color: #7f8c8d;
            text-decoration: none;
        }

        a:hover {
            color: #34495e;
        }
        .container {
            max-width: 400px;
            width: 100%;
            text-align: center;
            margin-top:0;
            margin-bottom:0;
        }
    </style>
    </head>
    <body>
        <!-- <div class="row header " >
            
        </div> -->
        <div class="container">
        <div class="title">
            <h1>Login</h1>
        </div>     
        
        
        <div class="paragraph">
            <form action="BE/login.php" method="POST" id="login-form">
                <label for="un">User Name</label>
                <br>
                <input type="text" name="username" id="un">
                <br>
                <label for="pass">Password</label>
                <br>
                <input type="password" name="password" id="pass">
                <br>
                <input type="button" value="Login" onclick="login()">
                <input type="button" value="Cancel" onclick="ClearForm()">
            </form>
            <a href="pages/signup.html">Sign Up...</a>
        </div>
        </div>
    
<script>
    function login(){
        var un=document.getElementById("un").value;
        var pass=document.getElementById("pass").value;
        if ((un=="")||(pass=="")){
            alert("You must fill in the username and the password!");
        }else{
            document.getElementById("login-form").submit();
        }

    }
    function ClearForm(){
        document.getElementById("un").value="";
        document.getElementById("pass").value="";
    }
</script>
</body>
</html>