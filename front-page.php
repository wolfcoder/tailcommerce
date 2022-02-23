<?php get_header(); ?>
    <!--        warning -->
<?php dynamic_sidebar('warning-sidebar'); ?>
    <div class="lg:container lg:mx-auto">
        <?php if (have_posts()) : ?>
            <?php
            while (have_posts()) :
                the_post();
                ?>
                <?php
                /* translators: %s: Name of current post */
                the_content(
                    sprintf(
                        __('Continue reading %s', 'tailpress'),
                        the_title('<span class="screen-reader-text">"', '"</span>', false)
                    )
                ); ?>
            <?php endwhile; ?>

        <?php endif; ?>

    </div>

<?php
get_footer();
