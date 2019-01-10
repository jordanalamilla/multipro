<?php get_header(); ?>

<!-- SORT POST TYPES -->
<section id="sort">
    <!-- <a class="button" id="sort-web" data-type="web">Web</a>
    <a class="button" id="sort-art" data-type="art">Art</a>
    <a class="button" id="sort-blog" data-type="blog">Blog</a>
    <a class="button" id="sort-all" data-type="all">All</a> -->

    <ul>
        <?php wp_list_cats(); ?>
        <li><a href="<?php bloginfo('url'); ?>">All</a></li>
    </ul>

</section>

<!-- POSTS -->
<section id="posts">

    <?php while( have_posts() ) : the_post();

        $categories = get_the_category();
        $category_class = 'none';

        foreach( ( $categories ) as $category ) {

            $category_class = $category->cat_name;
        }
    ?>

        <section class="<?php echo $category_class; ?> post">

            <?php if( $category_class == 'blog' ) : ?>

                <!-- TITLE -->
                <h3>
                    <a href='<?php the_permalink() ?>'>
                        <?php the_title() ?>
                    </a>
                </h3>

                <!-- CONTENT -->
                <div class="post-content">
                    <?php the_content() ?>
                </div>

                <!-- DATE -->
                <p class="date">
                    <?php the_date(); ?>
                </p>

            <?php elseif( $category_class == 'web' ) : ?>

                <!-- OVERLAY -->
                <a href="<?php the_permalink() ?>">
                    <div class="overlay">
                        <h3><?php the_title() ?></h3>
                        <p>Web</p>
                    </div>
                </a>

                <!-- IMAGE -->
                <?php if ( has_post_thumbnail() ) {
                    the_post_thumbnail();
                } ?>

            <?php elseif( $category_class == 'art' ) : ?>

                <!-- OVERLAY -->
                <a href="<?php the_permalink() ?>">
                    <div class="overlay">
                        <h3><?php the_title() ?></h3>
                        <p>Art</p>
                    </div>
                </a>

                <!-- IMAGE -->
                <?php if ( has_post_thumbnail() ) {
                    the_post_thumbnail();
                } ?>

            <?php endif; ?>

        </section>

    <?php endwhile; ?>

</section>

<?php get_footer(); ?>