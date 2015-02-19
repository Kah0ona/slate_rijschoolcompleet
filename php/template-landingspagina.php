<?php
/*
Template Name: Landingspagina template
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

						<div class="Offer-wrap">
							<h3>Aanbiedingen</h3>
							<div class="Offer">
								<div class="u-gridContainer">
									<!-- <h6 class="Offer-heading u-sectionHeading">Aanbiedingen</h6> -->
									<ul class="Offer-slider bxslider">
									<?php
										$args = array(
											'post_type' => 'aanbieding',
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
						<h3>Recensies</h3>
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
					</div>

		<?php endwhile; endif; ?>

		</div>
		<div class="Usp-col2 u-gridColumn4 ">
					<div>
						<a class="Button Button--registration" href="/aanmelden"><strong>Meld je nu aan</strong></a>
					</div> 
					<div class="Contactbar-form">
						<?php echo do_shortcode('[gravityform id="1" name="Contact" title="false"]'); ?>
					</div>
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


<?php get_footer(); ?>