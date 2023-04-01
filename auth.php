<?php
$title = "PHP ADMIN";
require 'include/header.php';

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    if ((isset($_POST["email"]) and $_POST["email"] == "ibrokhimov3210@gmail.com") ) {
        header("Location:https://www.youtube.com");
        
    } 

}
?>

<head>
    <link rel="stylesheet" href="assets/auth.css">
</head>

<form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">


    <form class="container py-3 form-signin w-100 m-auto">
        <h1 class="h3 mb-3 fw-normal">Please sign in</h1>

        <div class="form-floating">
            <input name="email" type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
            <label for="floatingInput">Email address</label>
        </div>
        <div class="form-floating">
            <input name="password" type="password" class="form-control" id="floatingPassword" placeholder="Password">
            <label for="floatingPassword">Password</label>
        </div>

        <div class="checkbox mb-3">
            <label>
                <input type="checkbox" value="remember-me"> Remember me
            </label>
        </div>
        <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
        <p class="mt-5 mb-3 text-body-secondary">&copy; 2017–2023</p>
    </form>
</form>

<?php require 'include/futer.php' ?>