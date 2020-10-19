<!doctype html>
<html class="no-js" lang="zxx">
<?php include_once "layout/head.php" ?>

<body>
    <?php include_once "layout/loader.php" ?>
    <?php include_once "layout/header.php" ?>
    <main>
        <?php 
            if(isset($_GET['page'])){
                $page = $_GET['page'];
            }else{
                $page = 'home';
            }

            switch ($page) {
                case 'about':
                    include_once "view/about.php";
                    break;
                case 'blog':
                    include_once "view/blog.php";
                    break;
                case 'blog_details':
                    include_once "view/blog_details.php";
                    break;
                case 'contact':
                    include_once "view/contact.php";
                    break;
                case 'courses':
                    include_once "view/courses.php";
                    break;
                case 'course_details':
                    include_once "view/course_details.php";
                    break;
                
                default:
                    include_once "layout/slider.php";
                    include_once "view/home.php";
                    break;
            }
        ?>
    </main>
    <?php include_once "layout/footer.php" ?>
    <?php include_once "layout/js.php" ?>
</body>
</html>