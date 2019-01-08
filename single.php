<?php get_header(); ?>

<?php while( have_posts() ) : the_post(); ?>

    <!-- TITLE -->
    <h1>
        <?php the_title() ?>
    </h1>

    <!-- CONTENT -->
    <p><?php the_content() ?></p>

<?php endwhile; ?>

<?php get_footer(); ?>