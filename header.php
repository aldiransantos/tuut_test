<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php wp_title(); ?></title>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">

    <?php wp_head(); ?>

</head>
<body>
    
<div class="header">
    <div class="wrap">
        <h1 class="logo"><a href="<?php echo site_url(); ?>" title="<?php bloginfo('name'); ?>">TUUT</a></h1>

        <ul class="header__menu">
            <li class="header__menu--item"><a href="<?php the_permalink(); ?>">Home</a></li>
            <li class="header__menu--item"><a href="<?php the_permalink(); ?>">Sobre</a></li>
            <li class="header__menu--item"><a href="<?php the_permalink(); ?>">Contato</a></li>
        </ul>
    </div>
</div>
