<nav>
    <div class="container">
        <div class="title">
            <img src="img/logo.png" class="logo" alt="logo" />
            <a href="index.php" class="name items large">mybooksify</a>
        </div>
        <a class="name items small">mybooksify</a>
        <div class="center">
            <a href="index.php" class="items active"><i class="fas fa-fw fa-home"></i> Home</a>
            <a href="books.php" class="items"><i class="fas fa-fw fa-book"></i> Books</a>
            <a href="about.php" class="items"><i class="fas fa-fw fa-users"></i> About Us</a>
        </div>
        <?php
        $url = "";
            session_start();
            if(isset($_SESSION['id'])){
                $url = "profile.php";
            }
            else{
                $url = "login.php";
            }
        ?>
        <a href="<?php echo $url; ?>" class="right"><i class="fas fa-fw fa-user-alt"></i></a>
    </div>
</nav>