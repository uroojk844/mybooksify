<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="css/login.css">
</head>

<body>

    <?php
        include_once("conn.php");
        if(isset($_POST['submit'])){
            $name = $_POST['name'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            $pass = bin2hex($_POST['pass']);
            $sql = "INSERT INTO users(`name`,`email`,`phone`,`pass`) values('$name','$email','$phone','$pass')";
            if(mysqli_query($conn, $sql)){
                header("location: login.php");
            }

        }
    ?>

    <form method="post" class="container">
        <div class="heading"><i class="fas fa-user-lock"></i> Sign up</div>

        <div class="input-group">
            <div>Name</div>
            <input type="text" name="name" placeholder="John doe">
        </div>

        <div class="input-group">
            <div>Mobile</div>
            <input type="tel" name="phone" placeholder="1234567890">
        </div>

        <div class="input-group">
            <div>Email</div>
            <input type="email" name="email" placeholder="abc@example.com">
        </div>

        <div class="input-group">
            <div>Password</div>
            <input type="password" id="pass" name="pass" placeholder="*******">
        </div>

        <div class="input-group">
            <div>Confirm Password</div>
            <input type="password" id="cpass" placeholder="*******">
        </div>

        <input type="submit" name="submit" value="Register">

        <a href="login.php">Already have an account? Sign in</a>
    </form>
    <script src="js/jquery-3.4.1.js"></script>
    <script>
        $("#pass,#cpass").keyup(function () { 
            let pass = $("#pass").val();
            let cpass = $("#cpass").val();
            if(pass==cpass){
                $("input[type='submit']").attr("disabled", false);
                $("#pass,#cpass").css({"border-bottom-color":"seagreen"});
            }else{
                $("input[type='submit']").attr("disabled", true);
                $("#pass,#cpass").css({"border-bottom-color":"tomato"});
            }
        });
    </script>
</body>

</html>