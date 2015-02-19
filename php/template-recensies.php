<?php
/*
Template Name: Recensies template
*/
?>
<?php get_header(); ?>

<div class="u-gridRow Content-wrap">
		<div class="u-gridContainer">
			<div class="u-gridColumn7">
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
				<div id="respondPlaceholder"></div>
				<section class="Comments">
				<?php if(is_page('recensies') || is_page('recensies')) { comments_template(); } ?>
				</section>
			<?php endwhile; endif; ?>
			</div>  

			


				
				<div class="Usp-col u-gridColumn4 ">
					<div>
						<a class="Button Button--registration" href="/aanmelden"><strong>Meld je nu aan</strong></a>
					</div> 
					<!-- <div class="Contactbar-form">
					<?php echo do_shortcode('[gravityform id="1" name="Contact" title="false"]'); ?>
					</div> -->
				
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo.png" /></a>
				<p class="Usp-text"><strong>Nog even de voordelen op een rijtje:</strong></p>
				<ul class="Usp-list">
					<li class="icon check">Hoog slagingspercentage</li>
					<li class="icon check">Hoge mate van kwaliteit</li>
					<li class="icon check">Maatwerk</li>
					<li class="icon check">Methodische Rijopleiding </li>
					<p class="Usp-text">in stappen (RIS)</p>
					<li class="icon check">Inzicht in de vorderingen</li>
					<li class="icon check">Goede prijs-kwaliteitsverhouding</li>
					<p class="Usp-text">van de cursist</p>
					<li class="icon check">Altijd dezelfde instructeur</li>
					<li class="icon check">Altijd dezelfde lesauto</li>
					<li class="icon check">Faalangst Gediplomeerd</li>
					<li class="icon check">Termijnbetaling mogelijk</li>
					<li class="icon check">Een goede service</li>
				</ul>


			</div>
			
		</div>
	</div>
 
<?php get_footer(); ?>
