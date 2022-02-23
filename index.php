<?php get_header(); ?>
<!--    <pre>--><?php
//        var_dump($wp_filter);?><!-- </pre>-->

<!-- --><?php //      R_Debug::list_hooks('the_title');?>


<div class="container mx-auto my-8">

	<?php if ( have_posts() ) : ?>
		<?php
		while ( have_posts() ) :
			the_post();
			?>

			<?php get_template_part( 'template-parts/content', get_post_format() ); ?>

		<?php endwhile; ?>

	<?php endif; ?>

</div>

<?php
get_footer();
