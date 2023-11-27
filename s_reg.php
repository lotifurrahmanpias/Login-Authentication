<?php
session_start();
// session_destroy();
include_once "function.php"
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <script>
    if (window.history.replaceState) {
        window.history.replaceState(null, null, window.location.href);
    }
    </script>
    
    <form action="" method="post">
        <div class="container">
            
            <h1>Register</h1>
            <h3>Please fill in this form to create an account.</h3><br>
            <label for="name"><b>Name</b></label>
            <input type="text" placeholder="Enter Your name" name="name" required> <br><br>
            <label for="studentID"><b>Student ID</b></label>
            <input type="number" placeholder="Enter Your student ID" name="student_id" required> <br><br>

            <label for="email"><b>Email</b></label>
            <input type="email" placeholder="Enter email" name="email" id="email" required><br><br><br>

            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Enter password" name="password" id="psw" required><br><br>

            <button style=" margin-left:70px;width:70px;height:30px; border-radius:10px; background-color:red;border: none;"type="" class="registerbtn" name="registration"><b> Register</b></button><br>
        </div>

    </form>
    </div>
</body>

<style>
    body{
        background-color:#a6cad7;
        background-image: linear-gradient(rgba(4, 9, 30, 0.1),rgba(4, 9, 30, 0.2)),url(student_bc.jpeg); background-repeat: no-repeat; background-size: 100% 115%;
            width: 1540px;
            height:800px;
     
    }
    .container{
       
        text-align: center;
        padding: 120px;
       

       } 
       input{
        border-radius: 6px;
        width:200px;
        height:25px;
       }
    
</style>

</html>

<?php
if (isset($_POST['registration'])) {
    $registration = stripslashes($_POST['registration']);
    $registration = mysqli_real_escape_string($conn, $registration);


   $student_id = stripslashes($_POST['student_id']);
    $student_id = mysqli_real_escape_string($conn, $student_id);

    $name = stripcslashes($_POST['name']);
    $name = mysqli_real_escape_string($conn, $name);

    $email = stripcslashes($_POST['email']);
    $email = mysqli_real_escape_string($conn, $email);

    $password = stripcslashes($_POST['password']);
    $password = mysqli_real_escape_string($conn, $password);


   
    if($student_id)
   
        $reg = "INSERT INTO student (student_id, name, email, password) VALUES ('$student_id', '$name', '$email', '" . md5($password) . "')";
        $res = mysqli_query($conn, $reg);

        if ($res) {
            echo "<p class='success'>registration succesfull </p>";
            header("Refresh:2;url=success.php");
        } else {
            echo "<p class='error'>registration Fail! </p>";
        }
        header("Refresh:2;url=student.php");
    }

?>
<style>
    p{
        color:white;
    }
</style>