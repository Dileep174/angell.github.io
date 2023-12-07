<!DOCTYPE html>
<html lang="en">
<head>
  <title>Angle Website</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/bootstrap.min.css">
 <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/custome.css">
 <!-- google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Shantell+Sans:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <?php wp_head() ?>
</head>
<body>

 <!-- ========================================
main header menu start
======================================== -->
<div class="container-fluid nav-bar">
    <div class="container-fluid">
        <nav class="navbar navbar-light navbar-expand-lg p-0">
            
            <a href="index.html" class="navbar-brand">
                <?php the_custom_logo(); ?>
            </a>
            <button class="navbar-toggler " type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars text-primary"> Menu</span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarCollapse">
                <?php
                    wp_nav_menu(
                        array(
                        'menu' => 'primary-menu',
                        'menu_class' => 'navbar-nav',
                        )
                    );
                ?>
                <div class="mycard"> <a href="#"class="py-2 px-4 text-center"> <img src="<?php echo get_template_directory_uri(); ?>/img/cart.png" alt="" class="img-fluid text-center"></a></div>
            </div>

        </nav>
    </div>
</div>


 <!-- ========================================
main header menu End
======================================== -->