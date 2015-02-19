<?php
/*
Template Name: Opleidingen template
*/
?>
<?php get_header(); ?>
<div class="u-gridRow Content-wrap">
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
		<div class="Usp-col u-gridColumn4 ">
			<!-- <div class="Side-menu-wrap">
		<?php
		wp_nav_menu(array(
			'container'=> 'nav',
			'menu' => 'sidemenu',
			'container_class' =>'Side-menu',
			'menu_class' => '',
			'theme_location' => 'sidemenu',
			'items_wrap' => '<ul id="%1$s" class="Navigation-list--parent %2$s c-shout c-thick">%3$s</ul>',
			'walker' => new Slate_Walker_Nav_Menu()
			));
			?>
		</div> -->
			<div>
				<a class="Button Button--home" href="#"><strong>Meld je nu aan</strong></a>
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

	
<!-- 
	<div class="Review">
		<div class="u-gridContainer">
			<h2 class="Review-heading u-sectionHeadingWhite">Recensies</h2>
			<div class="u-gridRow">
				<div class="Review-item">
					<blockquote><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit onsectetur adipisicing elit</p></blockquote>
				</div>
				<div class="Review-item">
					<blockquote><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit onsectetur adipisicing elit</p></blockquote>
				</div>
				<div class="Review-item">
					<blockquote><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit onsectetur adipisicing elit</p></blockquote>
				</div>
			</div>
		</div>
	</div> -->




	<?php get_footer(); ?>
