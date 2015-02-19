<?php
/*
Template Name: Aanmelding template
*/ 
?>
<?php get_header(); ?>
	<div class="u-gridRow Content-yellow">
		<div class="u-gridContainer">
				<h2>Aanmeldingsformulier</h2>
				<div class="Registration">
				<?php echo do_shortcode('[gravityform id="2" name="Contact" title="false"]'); ?>
				</div>
				<div class="Usp-col u-gridColumn4 ">
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
