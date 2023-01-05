<?php get_header(); ?>
<div class="container w-full md:max-w-3xl mx-auto">
	<div class="w-full px-4 md:px-6 text-xl text-gray-800 leading-normal">	
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<div class="font-sans">	
				<h1 class="font-bold font-sans break-normal text-gray-900 pt-6 pb-2 text-3xl md:text-4xl"><?php the_title(); ?></h1>
				<p class="text-sm md:text-base font-normal text-gray-600"><?php the_time('F jS, Y'); ?></p>
			</div>
            <?php the_content(); ?>
	 	<?php endwhile; else : ?>
 			<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
 		<?php endif; ?>
	</div>
</div>
<?php get_footer(); ?>