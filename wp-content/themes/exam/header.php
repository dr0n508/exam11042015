<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>exam11042015</title>

    <!-- Bootstrap -->


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->


    <?php wp_head()?>

</head>
<body>

<header class="header-wrap">
    <div class="container-fluid">
        <div class="main-header">
            <div class="logo"><img src="<?php bloginfo('template_url')?>/img/logo.png" alt="skokov"/></div>

            <nav class="main-menu">
            <?php wp_nav_menu(array('theme_location' => 'menu'))?>




            </nav>
        </div>
        <div class="welcome">
            <p>Blog</p>
        </div>
    </div>
</header>