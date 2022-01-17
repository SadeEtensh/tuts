<?php

if(isset($_GET['submit'])) {
    echo $_GET['email'] . '</br>';
    echo $_GET['title'] .'</br>';
    echo $_GET['ingredients'] . '</br>';
}




?>
<!DOCTYPE html>
<html lang="en">

<?php include('templates/header.php'); ?>

<section class="container grey-text" >
    <h4 class="center">Add Pizza</h4>
    <form class="white" action="add.php" method="GET">
        <label >Your Email: </lable>
        <input type="text" name="email">
        <label >Pizza Title: </lable>
        <input type="text" name="title">
        <label >Ingredients (comma separated):</lable>
        <input type="text" name="ingredients">
        <div class="center">
            <input type="submit" name="submit" value="submit"class="btn brand z-depth-0">
        </div>
    </form>
</section>
<?php include('templates/footer.php'); ?>
    
  

</html>