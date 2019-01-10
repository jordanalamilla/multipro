<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?php bloginfo( 'title' ); ?></title>

    <?php wp_head(); ?>

</head>

<body>

    <section id="container">

        <!-- LOGO -->
        <section id="logo">

            <?php // GET USERS WORDPRESS LOGO
                if ( function_exists( 'the_custom_logo' ) )
                    the_custom_logo(); ?>

        </section>

        <section id="content">

            <!-- NAVIGATION -->
            <section id="navbar">

                <!-- SITE IDENTITY -->
                <header>

                    <h1>

                        <!-- SITE TITLE -->
                        <a href="<?php bloginfo( 'url' ); ?>"><?php bloginfo( 'name' ); ?></a>

                        <!-- SITE TAGLINE -->
                        <span><?php bloginfo( 'description' ); ?></span>

                    </h1>

                </header>

                <!-- MOBILE MENU ICON -->
                <button id="mobile-nav-button"><i class="fas fa-bars"></i></button>

                <nav>

                    <!-- WORDPRESS PAGES -->
                    <ul><?php wp_list_pages( [ 'title_li' => null ] ); ?></ul>

                </nav>

            </section>