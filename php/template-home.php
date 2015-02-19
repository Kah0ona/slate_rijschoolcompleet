 <?php
/*
Template Name: Homepage
*/
?>
<?php get_header(); ?>
	
	<!-- <div class="u-gridRow">
		<div class="Welcome">
			<h1 class="Welcome-title">Welkom op de website van Rijschool Compleet</h1>
			<p class="Welcome-text">
				Rijschool compleet is een rijschool met 10 jaar ervaring, en rijdt in de omgeving 
					Waddinxveen. <br/> U kunt bij ons terecht voor autorijlessen, autorijlessen met aahangwagen, en motorrijlessen.
			</p>
		</div>
	</div> -->

<!--///////////////////////////////////AANBIEDINGEN/////////////////////////////-->
	<div class="Offer-wrap">
		<div class="Offer">
			<div class="u-gridContainer">
				<!-- <h6 class="Offer-heading u-sectionHeading">Aanbiedingen</h6> -->
				<ul class="Offer-slider bxslider">
				<?php
					$args = array(
						'post_type' => 'aanbieding',
						'orderby' => 'date',
						'order' => 'DESC'
					);
					$aanbiedingen = new WP_Query( $args );
					if( $aanbiedingen->have_posts() ) {
						while( $aanbiedingen->have_posts() ) {
							$aanbiedingen->the_post();
							?>
								<div class="Offer-item">
									 
									<a href="<?php echo get_permalink(); ?>">
										<?php 
											if(get_the_post_thumbnail() == "") { 
												the_content(); 
											} else { 
												the_post_thumbnail();
											} ?></a>
								</div>

							<?php
						}
					}
					else {
						echo '<p>Er zijn momenteel geen aanbiedingen';
					}
				?>
			</div>
		</div>  
 	</div>
	<div class="u-gridRow Content-home">
		<div class="u-gridContainer">
			<div class="Content u-gridColumn12">
			<h5 class="Home-title">Welkom op de website van Rijschool Compleet.</h5>
			<p>Graag willen wij je welkom heten op onze vernieuwde site. Op deze site zullen wij je zo uitgebreid mogelijk informeren over de activiteiten van Rijschool Compleet.
Rijschool Compleet is een rijschool met ruim 14 jaar ervaring in het geven van autorijlessen, autorijlessen met aanhangwagen en motorrijlessen.
</p>
<p>Wij bieden deze opleidingen voor heel regio Gouda <b>(Waddinxveen, Boskoop, Bodegraven, Stolwijk, Moordrecht, Nieuwerkerk a/d 
	IJssel Moerkapelle, Reeuwijk, Zevenhuizen).</b></p>


					</div>
				</article>
			</div> 

			<div class="u-gridRow Content-wrap">
		<div class="u-gridContainer">
			<div class="Content u-gridColumn3">
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
			
			<div class="Home-col u-gridColumn3">

					<a href="cbr"><img src="/files/2014/05/Screen-Shot-2014-05-30-at-11.42.26.png"></img></a>
					<br>
					<!-- <a href="cbr"><img src="/files/2014/05/Screen-Shot-2014-05-30-at-11.42.26.png"></img></a> -->
					<a href="app"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/app-banner.png" /></a>
					<a href="cashback"><img id="Cashback" src="<?php echo get_stylesheet_directory_uri(); ?>/img/cashback.png" /></a>
					<a href="cadeaubon"><img src="/files/2014/04/cadeaubonrijschoolcompleet1.jpg"></a>
					<!-- <a href="cbr"><img src="/files/2014/06/cashback.png"></img></a> -->
			</div>

 
			<div class="Usp-col u-gridColumn3 ">
			<!-- <div class="fb-like-box" data-href="https://www.facebook.com/rijschool.compleet" data-colorscheme="light" data-show-faces="true" data-header="false" data-stream="true" data-show-border="true"></div>			 -->
			<!--<div class="Contactbar-form">
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

<!--///////////////////////////////////RECENSIES/////////////////////////////-->

 		<div class="Review">
		<div class="u-gridContainer">
				<ul class="Review-slider bxslider">
					<?php
					$args = array(
						// args here
						'number'       => '16',
						'order'        => 'DESC',

						);

						// The Query
					$referenties_query = new WP_Comment_Query;
					$referenties = $referenties_query->query( $args );

						// Comment Loop
					if ( $referenties ) {

						foreach ( $referenties as $referenties ) {
							?>
							<li class="Review-item">
								<blockquote>
									<?php echo '<p>' . substr($referenties->comment_content, 0, 150) . '...</p>'; ?><br><br>
									<?php echo '<p>'  . $referenties->comment_author  . ',</p>'; ?>
									&nbsp</p><?php echo '<p>'  . 
									date_format(new DateTime($referenties->comment_date),
									 'd-m-Y H:i')  . '</p>'; ?>
								</blockquote>
							</li>

							<?php
						}
					} else {
						echo 'Geen referenties beschikbaar.';
					}
					?>
				</ul>
		</div>
				<a class="Button Button--review" href="/recensies">Bekijk meer recensies</a>
	</div>

<!--///////////////////////////////////FACEBOOK USP CBR BUTTON/////////////////////////////-->
	
</div>


 	<!--
	<ul class="bxslider">
		<li><img src="http://placekitten.com/200/300" /></li>
		<li><img src="http://placekitten.com/200/300" /></li>
		<li><img src="http://placekitten.com/200/300" /></li>
		<li><img src="http://placekitten.com/200/300" /></li>
		<li><img src="http://placekitten.com/200/300" /></li>
		<li><img src="http://placekitten.com/200/300" /></li>
		<li><img src="http://placekitten.com/200/300" /></li>
		<li><img src="http://placekitten.com/200/300" /></li>
		<li><img src="http://placekitten.com/200/300" /></li>

	</ul>

	-->


<?php get_footer(); ?>
