<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <?php include_once("links.php"); ?>
    <link rel="stylesheet" href="css/books.css">
    <link rel="stylesheet" href="css/profile.css">
</head>

<body>

    <div class="main">
        <?php include_once("nav.php"); ?>

    <?php
        include_once("conn.php");
        $id = $_SESSION['id'];
        $sql = "SELECT email,phone FROM users WHERE id='$id'";
        $res = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($res);
        $name = $_SESSION['name'];
        $email = $row['email'];
        $phone = $row['phone'];
    ?>
      
      <div class="profile-container">
            <div class="row">
                <div class="details">
                    <div class="heading"><?php echo $name; ?></div>
                    <div><i class="fas fa-mobile"></i> <?php echo $phone; ?></div>
                    <div><i class="fas fa-envelope"></i> <?php echo $email; ?></div>
                    <div class="input-group">
                        <div class="col"><i class="fas fa-edit"></i> Edit details</div>
                        <a class="col" href="logout.php"><i class="fas fa-sign-out-alt"></i> Sign out</a>
                    </div>
                </div>
            </div>
            
            <section class="post-container">
                <h2>Your Posts</h2>

                <div class="books-container"></div>

            </section>
        </div>

    </div>

    <?php include_once("footer.php"); ?>

    <script src="js/jquery-3.4.1.js"></script>
    <script>
        const books = 6;
        for (let i = 0; i < books; i++) {
            $(".books-container").append(`<div class="col books">
                <div class="img"></div>
                <div class="desc">
                    <div class="name">MATHEMATCIS NCERT 10</div>
                    <div class="row">
                        <div class="price">10</div>
                        <div><i class="far fa-heart"></i></div>
                    </div>
                </div>
            </div>`);
        }
    </script>
</body>

</html>