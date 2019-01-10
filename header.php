<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Jordan Alamilla</title>

    <?php wp_head(); ?>

</head>

<body>

    <section id="container">

        <!-- LOGO -->
        <section id="logo">

        <?php
            if ( function_exists( 'the_custom_logo' ) ) {
                the_custom_logo();
            }
        ?>

            <!-- <img src="images/logo.png" alt="Site logo."> -->
        </section>

        <section id="content">

            <!-- NAVIGATION -->
            <section id="navbar">

                <!-- HEADER -->
                <header>
                    <h1><a href="<?php bloginfo( 'url' ); ?>">
                        <?php bloginfo( 'name' ); ?></a>
                    </h1>
                    <h2><?php bloginfo( 'description' ); ?></h2>
                </header>

                <!-- NAV LINKS -->
                <button id="mobile-nav-button"><i class="fas fa-bars"></i></button>
                <nav>
                    <!-- <a href="#">About</a>
                    <a href="#">Collaborate</a>
                    <a href="#">Contact</a> -->

                    <ul>
                        <?php wp_list_pages([ 'title_li' => null ]); ?>
                    </ul>

                </nav>

            </section>