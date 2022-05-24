<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="css/login1.css">
    <link href="https://fonts.googleapis.com/css2?family=Macondo&family=Roboto&display=swap" rel="stylesheet">
</head>

<body>

<?php
        include_once("conn.php");
        session_start();

        $msg = "";

        if(isset($_SESSION['id'])){
            header("location: index.php");
        }

        if(isset($_POST['submit'])){
            $email = $_POST['email'];
            $pass = bin2hex($_POST['pass']);
            $sql = "SELECT id,name FROM users where email='$email' and pass='$pass'";
            $res = mysqli_query($conn, $sql);
            if(mysqli_num_rows($res) > 0){
                $row = mysqli_fetch_assoc($res);
                $_SESSION['id'] = $row['id'];
                $_SESSION['name'] = $row['name'];
                header("location: index.php");
            }else{
                $msg = "Wrong email or password!!";
            }
        }
    ?>
    
    <div class="row">

        <div class="col">
            <img src="img/section-2.jpg" alt="">
        </div>
        
        <div class="col">
            <div class="big">Welcome to mybooksify</div>
            <form method="post" class="container">


                <div class="heading"><i class="fas fa-user-lock"></i> Sign in</div>
                
                <div class="input-group">
                    <div>Email</div>
                    <input type="email" name="email" placeholder="abc@example.com">
                </div>
                
                <div class="input-group">
                    <div>Password</div>
                    <input type="password" name="pass" placeholder="*******">
                </div>
        
                <input type="submit" name="submit" value="Login">
                
                <div class="msg"><?php echo $msg; ?></div>
                
                <a href="register.php">New here? Create an account</a>
            </form>
        </div>
</div>
</body>

</html>