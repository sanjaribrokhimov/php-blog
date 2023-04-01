<?php
$title = "Blog";
require 'include/header.php';

try {

    $bosh=$_POST['titley'];
    $tana=$_POST['bodyy'];

    require 'database.php';

    $sql = "INSERT INTO posts (id,title,body,dates) VALUES (?,?,?,?)";
    $stmt= $conn->prepare($sql);
    $stmt->execute([null ,$bosh, $tana,null]);

    echo "New record created successfully";
  } catch(PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
  }
  
  $conn = null;

?>


<div class="container mt-5">
    <form method="post" action="<?php $_SERVER['PHP_SELF'] ?>">
        <h3 style="text-align: center;" class="container">blog kiriting</h3>
        Titile <br>
        <div class="input-group mb-3">

            <div class="input-group-text">
                <input class="form-check-input mt-0" type="checkbox" value="title" aria-label="Checkbox for following text input">
            </div>
            <input name="titley" type="text" class="form-control" aria-label="Text input with checkbox">
        </div>
        Body <br>
        <div class="input-group">
            <div class="input-group-text">
                <input class="form-check-input mt-0" type="radio" value="body" aria-label="Radio button for following text input">
            </div>
            <input name="bodyy" type="text" class="form-control" aria-label="Text input with radio button">
        </div>
        <br>
        <div style="text-align: center;" class="col-12">
            <button class="btn btn-primary" type="submit">Submit </button>
        </div>

    </form>
</div>



<?php require 'include/futer.php' ?>