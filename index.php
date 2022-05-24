<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to mybooksify</title>
    <?php include_once("links.php"); ?>
    <link rel="stylesheet" href="css/books.css">
    <link rel="stylesheet" href="css/index.css">
</head>

<body>
    <?php
        include_once("nav.php"); 
    ?>

    <section class="section1">
        <div class="heading">Buy & Sell Books Online</div>
        <div class="desc">Cash your Books with us.</div>

        <div class="row input-group">
            <input class="col" type="text" placeholder="Search for...">
            <input class="col" type="button" value="Search">
        </div>

    </section>

    <div class="section2">
        <div class="container">
            <label>Newly Added Books</label>
        </div>

        <div class="row books-container"></div>

        <div class="row category">
            <div class="col item">
                <div class="title">NCERT</div>
                <div>4 ads posted</div>
            </div>
            <div class="col item">
                <div class="title">Novel</div>
                <div>4 ads posted</div>
            </div>
            <div class="col item">
                <div class="title">School Books</div>
                <div>4 ads posted</div>
            </div>
        </div>
    </div>

    <div class="img2"></div>

    <div class="social-icons">
        <a href="#" target="_blank" class="icon">
            <i class="fab fa-facebook-square fa-fw"></i>
        </a>
        <a href="https://www.instagram.com/mybooksify" target="_blank" class="icon">
            <i class="fab fa-instagram fa-fw"></i>
        </a>
        <a href="mailto:mybooksify@gmail.com" target="_blank" class="icon">
            <i class="fas fa-envelope fa-fw"></i>
        </a>
    </div>

    <?php include_once("footer.php"); ?>

    <script src="js/jquery-3.4.1.js"></script>
    <script>
        const books = 6;
        for (let i = 0; i < books; i++) {
            $(".books-container").append(`<div class="books">
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