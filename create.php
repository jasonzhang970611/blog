<?php include("path.php") ?>
<?php include(ROOT_PATH . "/app/controllers/posts.php")?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <script src="https://kit.fontawesome.com/599eedc4d1.js" crossorigin="anonymous"></script>


        <link href="https://fonts.googleapis.com/css2?family=Candal&display=swap" rel="stylesheet">
        

        <!-- Custom Styling -->

        <link rel="stylesheet" href="assets/css/styles.css">

        <!-- Admin Styling -->
        <link rel="stylesheet" href="assets/css/admin.css">

        <title>Admin - Add Post</title>
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
                    <a href="Postindex.php" class="btn btn-big">Post</a>
                    <a href="index.php" class="btn btn-big">Manage Posts</a>
                </div>

                <div class="content">
                    <h2 class="page-title">Manage posts</h2>
                    <?php include(ROOT_PATH . '/app/helpers/formErrors.php') ?>

                    <form action="create.php" method="post">
                        <div>
                            <label>title</label>
                            <input type="text" name="title" value="<?php echo $title ?>" class="text-input">
                        </div>
                        <div>
                            <label>image</label>
                            <input type="file" name="image" class="text-input">
                        </div>
                        <div>
                            <label>body</label>
                            <textarea name="body" id="body" cols="30" rows="10"><?php echo $body ?></textarea>
                        </div>
                        <div>
                            
                            <?php if ( empty($published) ) : ?>
                                <label>
                                    <input type="checkbox" name="published">
                                    Publish
                                </label>
                                
                            <?php else: ?>
                                <label>
                                    <input type="checkbox" name="published" checked>
                                    Publish
                                </label>
                            <?php endif; ?>
                            
                        </div>
                        <div>
                            <button type="submit" name="add-post" class="btn btn-big">Add Post</button>
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

