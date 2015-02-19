<?php get_header(); ?>

<div class="u-gridRow Content">
		<div class="u-gridContainer">
			<div class="u-gridColumn6">
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<article class="Content-article" id="post-<?php the_ID(); ?>">
					<?php if(!is_front_page()) { ?>
					<h2><?php the_title(); ?></h2>
					<?php } ?>
					<div>
						<?php the_content(); ?>
						<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
					</div>
				</article>
			<?php endwhile; endif; ?>
			</div> 
			<aside class="Sidebar u-gridColumn3">
				<?php get_sidebar(); ?>
			</aside>
		</div>
	</div>
 
<?php get_footer(); ?>
