<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
</head>
<body>
    <?php
    session_start();
    include_once "function.php";
    echo "<br><br><br><br><br><br><h1><br><p style=text-align:center;> YES<br>
    You are successful.<br>Welcome to our community.</h1>"
    ?>
    
    <a  href="student.php"class="hero-btn" >Logout</a>
    
</body>
</html>

 <style>
    body{
        background:rgb(38, 39, 39);
        color:white;
    }
    .hero-btn{
    text-decoration: none;
    float: right;
    background: red;
    padding: 10px 25px;
    color: #fff;
    border-radius: 5px;
    margin-right: 700px;
    border: none;
    
}
 </style>
 