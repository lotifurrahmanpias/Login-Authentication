<?php
session_start();
$_SESSION['student_id']='';
include_once "function.php"
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="student.css">
</head>

<body>
    <form style="margin-left:-160px;" class="index" method="POST">
        <h2>LOGIN</h2>

        <div class="error">
            <!-- <p class = "error">Password is required! </p> -->
            <label>Student Id</label>
            <input type="text" name="student_id" placeholder="Enter Your Student Id"><br>
            <label>Password</label>
            <input type="password" name="password" placeholder=" Enter Your Password"><br>
            <button type="submit" name="login" >Login</button>
            <p>Don't have account?</p>
           
        </div>
    </form>
    <a style=" margin-left:-220px; margin-top:275px;"  href="s_reg.php"><button>Register</button></a>
</body>

<style>
    body{
        background:  rgb(210, 210, 250);
    }

    .error{
       color:white; 
       background:  rgb(1, 124, 124) ;    
    }
    label{
        color:rgb(150, 146, 146);
    }
</style>

</html>

<?php
if (strlen($_SESSION['student_id'])>0) {
    header('Location:success.php');
}

if (isset($_POST['login'])) {
    $student_id =stripslashes($_POST['student_id']) ;
    $student_id = mysqli_real_escape_string($conn, $student_id);

   
    $password = stripcslashes($_POST['password']);
    $password = mysqli_real_escape_string($conn, $password);

    $sql = "SELECT * FROM student WHERE student_id = '$student_id' AND password = '" . md5($password) . "'";

    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['student_id'] = $student_id;
        header('Location: success.php');
    } else {
        echo "<p style=color:red;margin:-104px;margin-top:310px;text-align:center;><b>Invaild Email or Password !</b> </p>" ;
    }
    header("refresh:1 url=student.php");
}

?>
