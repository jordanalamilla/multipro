<?php get_header(); ?>

<?php while( have_posts() ) : the_post(); ?>

    <section class="page">

        <!-- TITLE -->
        <h1><?php the_title() ?></h1>

        <!-- CONTENT -->
        <?php the_content() ?>

    </section>

<?php endwhile; ?>

<?php get_footer(); ?>