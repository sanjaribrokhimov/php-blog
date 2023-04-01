
<?php 
require "database.php";

$search = $_POST['search'];
// echo $search;

$srch = $conn->query("SELECT * FROM posts WHERE title LIKE '$search'");
$res = $srch->fetchAll();

foreach ($res as $row)
{
    echo"<b>";
    echo($row["body"]);
    echo "<br/>";
    echo"</b>";
}


?>



<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="auth.php">Php Blog Admin</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav me-auto mb-2 mb-md-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.php">Bosh Sahifa</a>
                </li>
                <li class="nav-item">
                    <!-- <a class="nav-link" href="about.php">Biz Haqimizda</a> -->
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="blog.php">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="prices.php">Narxlar</a>
                </li>
            </ul>
            <form method="post" class="d-flex" role="search">
                <input name="search" class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>
    </div>
</nav>