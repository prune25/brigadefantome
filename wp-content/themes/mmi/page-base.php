<?php
/**
* Template Name : Page Base
*Description : page de base
*/
get_header();?>
	<section>
		<header>
			<h1 style="text-align:center;"><?php the_title(); ?></h1>
		</header>
		<?php while ( have_post() ) : the_post(); ?>
		<div>
			<?php the_content(); ?>
		</div>
</section>
<?php get_footer(); ?>