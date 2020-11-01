<?php include("path.php"); ?>
<?php include(ROOT_PATH . "/app/controllers/users.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- font awesome -->
    <script src="https://kit.fontawesome.com/599eedc4d1.js" crossorigin="anonymous"></script>


    <link href="https://fonts.googleapis.com/css2?family=Candal&display=swap" rel="stylesheet">
    <!-- Custom Styling -->

    <link rel="stylesheet" href="assets/css/styles.css">

    <title>Login</title>
</head>
<body>
    
 <!-- header -->
 <?php include(ROOT_PATH . "/app/includes/header.php"); ?>


    <div class="auth-content">

        <form action="login.php" method="post">
            <h2 class="form-title">Login</h2>

            <?php include(ROOT_PATH . "/app/helpers/formErrors.php"); ?>

            <div>
                <label> Username </label>
                <input type="text" name="username" value="<?php echo $username; ?>" class="text-input">
            </div>
            <div>
                <label> Password </label>
                <input type="password" name="password" value="<?php echo $password; ?>" class="text-input">
            </div>
           
            <div>

                <button type="submit" name ="login-btn"class="btn btn-big">Login</button>
            </div>
            <p> Or <a href="<?php echo BASE_URL . '/registration.php' ?>"> Sign Up </a></p>

        </form>
    </div>

    
    
    <!--Page wrapper cont -->
    <!--jQuery-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>

    <!--Custom script-->

    <script src="assets/js/scripts.js"></script>
</body>
</html>