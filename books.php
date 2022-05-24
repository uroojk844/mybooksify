<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Browse books</title>
    <?php include_once("links.php"); ?>
    <link rel="stylesheet" href="css/w3.css">
    <link rel="stylesheet" href="css/books.css">
    <link rel="stylesheet" href="css/book_page.css">
</head>

<body>
    <div class="main">
        <?php include_once("nav.php"); ?>
    </div>

    <section class="container">
        <div class="col">
            <div class="filter">
                <div class="w3-margin-bottom"><i class="fas fa-filter"></i> Filter</div>
                <div>
                    <h5>Category</h5>
                </div>

                <div>
                    <input type="checkbox" name="" id=""> <label>ALL</label>
                </div>
                <div>
                    <input type="checkbox" name="" id=""> <label>NCERT</label>
                </div>
                <div>
                    <input type="checkbox" name="" id=""> <label>NCERT</label>
                </div>
                <div>
                    <input type="checkbox" name="" id=""> <label>NCERT</label>
                </div>
            </div>
        </div>
        </div>
        <div class="col">
            <div class="search-container">
                <div>Search your book</div>
                <input type="search" placeholder="NCERT math class 10" id="">
            </div>
            <div class="books-container"></div>
        </div>
    </section>

    <?php include_once("footer.php"); ?>
    <script src="js/jquery-3.4.1.js"></script>s
    <script>
        const books = 20;
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