<?php require 'database.php';
$zap = $conn->query("SELECT * FROM posts");
$sax = $zap->fetchAll();

?>
<?php
$title = "Blog";
require 'include/header.php';
?>






<section class="py-5 text-center container">
    <div class="row py-lg-5">
        <div class="col-lg-6 col-md-8 mx-auto">
            <h1 class="fw-light">Album example</h1>
            <p class="lead text-body-secondary">Something short and leading about the collection below—its contents, the creator, etc. Make it short and sweet, but not too short so folks don’t simply skip over it entirely.</p>
            <p>
                <a href="append.php" class="btn btn-primary my-2">Blog qo'shish</a>

            </p>
        </div>
    </div>
</section>

    <div class="album py-5 bg-body-tertiary ">
        <div class="container">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
            <?php foreach ($sax as $post) : ?>
                <div class="col">
                    <div class="card shadow-sm">
                        <svg style="background-image: url(https://www.shutterstock.com/image-vector/breaking-news-background-world-global-260nw-719766118.jpg)" class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="https://www.shutterstock.com/image-vector/breaking-news-background-world-global-260nw-719766118.jpg" role="img" aria-label="Placeholder: News" preserveAspectRatio="xMidYMid slice" focusable="false">
                            <title></title>
                            
                            <rect width="100%" height="100%" fill="#5559" />
                            <text x="50%" y="50%" fill="#eceeef" dy=".3em">NEWS</text>
                        </svg>
                        <div class="card-body">
                            <a href=""><h4><?=$post["title"] ?></h4></a>
                            <p class="card-text"><?=$post["body"] ?></p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                    <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                                </div>
                                <small class="text-body-secondary"><?=$post["dates"] ?></small>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>



            <?php require 'include/futer.php' ?>