<?php get_header(); ?>

<?php while( have_posts() ) : the_post(); ?>

<section class="page">

    <!-- TITLE -->
    <h3><?php the_title() ?></h3>

    <!-- CONTENT -->
    <?php the_content() ?>

<?php endwhile; ?>

</section>

<?php get_footer(); ?>