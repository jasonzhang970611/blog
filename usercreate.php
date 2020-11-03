<?php include("path.php") ?>
<?php include(ROOT_PATH . "/app/controllers/users.php")?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <!-- font awesome -->
        <link rel ="styleheet"
            href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
            integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pQbqyi7RrhN7udi9RwhKkMHpvLBHG9Sr"
            crossorigin="anonymous">
        
        <!-- google fonts -->
        <link href="https://fonts.googleapis.com/css?family=Scandal|Lora"
            rel="stylesheet">
        

        <!-- Custom Styling -->

        <link rel="stylesheet" href="assets/css/styles.css">

        <!-- Admin Styling -->
        <link rel="stylesheet" href="assets/css/admin.css">

        <title>Admin - Add User</title>
    </head>

    <body>
        <header>
            <a class="logo" href="<?php echo BASE_URL . '/index.php';?>">
                <h1 class="logo-text"><span>Blog</span>Inspires</h1>
            </a>
            <i class="fa fa-bars menu-toggle"></i>
            <ul class="nav">
                <li>
                    <a href="#">
                        <i class="fa fa-user"></i>
                        j
                        <i class="fa fa-chevron-down" style="font-size: .8em;"></i>
                    </a>
                    <ul>
                        <li><a href="#" class="logout">logout</a></li>
                    </ul>
                </li>  
            </ul>
        </header>

        
        <!-- Admin page wrapper -->
        <div class="admin-wrapper">

        <!-- Left sidebar -->

         <!-- //Left sidebar -->
        <!-- admin content -->
        
            <div class="admin-content">
                <div class="button-group">
                    <a href="usercreate.php" class="btn btn-big">Add Users</a>
                    <a href="userindex.php" class="btn btn-big">Manage Users</a>
                </div>

                <div class="content">
                    <h2 class="page-title">Add User</h2>
                    <?php include(ROOT_PATH . '/app/helpers/formErrors.php') ?>

                    <form action="usercreate.php" method="post">
                        <div>
                            <label>Username</label>
                            <input type="text" name="username" value="<?php echo $username; ?>" class="text-input">
                        </div>
                        <div>
                            <label>Email</label>
                            <input type="email" name="email" <?php echo $email; ?> class="text-input">
                        </div>
                        <div>
                            <label>Password</label>
                            <input type="password" name="password" <?php echo $password; ?> class="text-input">
                        </div>
                        <div>
                            <label>Password Confirmation</label>
                            <input type="password" name="passwordConf" <?php echo $passwordConf;?> class="text-input">
                        </div>
                        <div>
                            <?php if ( isset($admin) && $admin == 1 ) : ?>
                                <label>
                                    <input type="checkbox" name="admin" checked>
                                    Admin
                                </label>
                            <?php else: ?>
                                <label>
                                    <input type="checkbox" name="admin">
                                    Admin
                                </label>
                            <?php endif; ?>
                            
                        </div>
                        <div>
                            <button type="submit" name="create-admin" class="btn btn-big">Add User</button>
                        </div>
                    </form>

                </div>
            
            </div>
            <!-- //admin content -->
        
        </div>
        <!-- //Admin page wrapper -->



        <!--jQuery-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>

        <!--Slick -->

        <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

        <!--Custom script-->

        <script src="../../assets/js/scripts.js"></script>
    </body>
</html>