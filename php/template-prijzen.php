<?php
/*
Template Name: Prijzen template
*/
?>
<?php get_header(); ?>

	

 
<div class="u-gridRow Content-wrap">
<div class="u-gridContainer">
	<div class=".u-gridColumn10">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<article class="Content-article" id="post-<?php the_ID(); ?>">
			<?php if(!is_front_page()) { ?>
			<h2><?php the_title(); ?></h2>
			<?php } ?>
			<div>

<!--//////////////////////////////////////AUTO//////////////////////////////////////////-->
				<table class="Table">
						<tr>
							<td style="text-align: center;" colspan="2" valign="middle">
							<h2 name"Auto" id="Auto"><strong>Auto</strong></h2></a>
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/car.png"></img>
							</td>
							
						</tr>
						<tr>
							<td style="text-align: center;"><strong>Onderdeel</strong></td>
							<td style="text-align: center;" width="90"><strong>Prijs</strong></td>
						</tr>
						<tr>
							<td>Losse Rijles <sup>(60 minuten)</sup></td>
							
							<td>€46,-</td>
						</tr>
						<tr>
							<td>CBR Praktijkexamen incl. administratiekosten en autohuur tijdens examen</td>
							
							<td>€230,-</td>
						</tr>
						<tr>
							<td>Tussentijdse Toets incl. administratie kosten en autohuur tijdens de toets</td>
							<td>€175,-</td>
						</tr>
						<tr>
							<td>Deel toets 2 R.I.S</td>
							<td>€46</td>
						</tr>
						<tr>
							<td>Eigen Verklaring <sup>(online kopen en invullen via CBR.nl)</sup>  <b><a href="https://mijn.cbr.nl/nl/Authentication/Login?ReturnUrl=%2f">inloggen met je DIGID</a></b> <sup>(* eis van CBR)</sup></td>
							<td>€25.80,-</td>
						</tr>
						<tr>
							<td>R.I.S. Praktijkboek</td>
							<td>€19,95,-</td>
						</tr>
						<tr>
							<td>Verkeerstheorie boek</td>
							<td><a href="#">Zie webshop</a></td>
						</tr>
						<tr>
							<td>Vragenboek</td>
							<td><a href="#">Zie webshop</a></td>

						</tr>
						<tr>
							<td>C.D.</td>
							<td><a href="#">Zie webshop</a></td> 
							
						</tr> 
						<tr>
							<td>Aanvraag C.B.R. theorie examen door de Rijschool</td>
							<td>€35,-</td> 

						</tr>
						<tr>
							<td>Individueel theorie examen reserveren door de rijschool</td>
							<td>€90,-</td>
						</tr>
						<tr>
							<td>Theorie examen CBR	</td>
							<td>€25,55,-</td>
						</tr>
						<tr>
							<td>i-Theorie Cursus <sup>(online theorie cursus)</sup></td>
							<td>€69,-</td>
						</tr> 
						<tr>
							<td>Administratiekosten Rijschool</td>
							<td>€20,-</td>
						</tr>
				</table>

				

				<!--//////////////////////////////////////PAKKETTEN//////////////////////////////////////////-->
<table class="Table">
				<tr>
					<td style="text-align: center;" colspan="2" valign="middle">
				<h1 name"Pakket" id="Pakket"><strong>Pakketten</strong></h1></a>
					</td>
			<!-- 		<td>
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/car.png"></img>
				</td> -->
				</tr>
				<tr>
					<td style="text-align: center;"><strong>Pakket naam</strong></td>
					<td style="text-align: center;"><strong>Inhoud</strong></td>
					<td style="text-align: center;" width="90"><strong>Prijs</strong></td>
				</tr>
				<tr>
					<td>Start pakket <br> A 10</td>
					<td>
						<ul>
							<li>10 Rijlessen</li> 
							<li>Gratis i-Theorie Cursus</li>
							<li><sup>*Startpakket is eenmalig af te nemen</sup><li>
						</ul>
					</td>
					<td>€399,-</td>
				</tr>

				<tr>
					<td>Start Pakket <br> B 25</td>
					<td>
						<ul>
							<li>25 Rijlessen <sup>(60 minuten)</sup></li>
							<li>Gratis i-Theorie Cursus</li>
							<li>Gratis Tussentijdse Toets (T.T.T)</li>
							<li>Gratis Praktijkexamen</li>
							<li>Gratis Deel 2 Toets</li>
							<li>Administratiekosten</li>
						</ul>
					</td>
					<td>€1450,-</td>
				</tr>

				<tr>
					<td>Compleet Pakket</td>
					<td>
						<ul>
							<li>40 Rijlessen <sup>(60 minuten)</sup></li>
							<li>Gratis Praktijkexamen </li>
							<li>Gratis Tussentijdse Toets <sup>(T.T.T)</sup></li>
							<li>Gratis Deel 2 Toets</li>
							<li>Administratiekosten</li>
							<li>Gratis Praktijk Examengarantie<sup>*</li>
							<li><sup>*Examengarantie is een eenmalig gratis Praktijk Herexamen exclusief  Rijlessen</sup></li>
						</ul>
					</td>
					<td>€2220,-</td>
				</tr>

				<tr>
					<td name="14Daagse" id="14Daagse">14 Daagse Rijopleiding</td> 
					<td>
						<ul>
							<li>Bij een 14 Daagse rijopleiding is de het mogelijk om 2 uur in de ochtend en 2 uur in de middag te lessen. Zo is het mogelijk om binnen 14 dagen je rijbewijs te halen.</li>
							<a href="/spoedopleiding"><li>Zie voor meer informatie Spoedopleiding</li></a>
						</ul>
					</td>
					<td></td>
				</tr>

				<tr>
					<td>Pakket A 14</td>
					<td>
						<ul>
							<li>25 Rijlessen van 60 minuten</li>
							<li>Gratis CBR Praktijkexamen  </li>
							<li>Gratis Deel 2 Toets</li>
							<li>Administratiekosten</li>
							<li><sup>* Dit Pakket is eventueel naar keuze uit te breiden met een Tussentijdse Toets met een toeslag van €150 i.p.v. €175</sup></li>
						</ul>
					</td>
					<td>€1350,-</td>
				</tr>

				<tr>
					<td>Pakket B 14</td>
					<td>
						<ul>
							<li>30 Rijlessen van 60 minuten</li>
							<li>Gratis CBR Praktijkexamen  </li>
							<li>Gratis Deel 2 Toets</li>
							<li>Administratiekosten</li>
							<li><sup>* Dit Pakket is eventueel naar keuze uit te breiden met een Tussentijdse Toets met een toeslag van €150 i.p.v. €175</sup></li>
						</ul>
					</td>
					<td>€1580,-</td>
				</tr>

				<tr>
					<td>Pakket C 14</td>
					<td>
						<ul>
							<li>35 Rijlessen van 60 minuten</li>
							<li>Gratis CBR Praktijkexamen  </li>
							<li>Gratis Deel 2 Toets</li>
							<li>Administratiekosten</li>
							<li><sup>* Dit Pakket is eventueel naar keuze uit te breiden met een Tussentijdse Toets met een toeslag van €150 i.p.v. €175<sup></li>
						</ul>
					</td>
					<td>€1810,-</td>
				</tr>

				<tr>
					<td>Zomeractie</td>
					<td>
						<ul>
							<li>10 Rijlessen<sup>*</sup></li>
							<li>24 Rijlessen<sup>*</sup></li>
							<li>30 Rijlessen<sup>*</sup></li>
							<li>36 Rijlessen<sup>*</sup></li>
							<li><sup>* Rijlessen van 45 minuten. Eventueel uit te breiden met een Tussentijdse Toets en een examen met een toeslag van €350 i.p.v. €405</sup></li>
						</ul>	
					</td>
					<td>
						<ul>
							<li>€307,50</li>
							<li>€738,-</li>
							<li>€922,50</li>
							<li>€1107,-</li>
						</ul>
					</td>
				</tr>

		</table>

<!--//////////////////////////////////////MOTOR//////////////////////////////////////////-->
				<table class="Table">
				<td style="text-align: center;" colspan="2" valign="middle">
					<h2 name"Motor" id="Motor"><strong>Motor</strong></h2></a>
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/motor.png"></img>
				</td>
			<tr>
				<td style="text-align: center;"><strong>Onderdeel</strong></td>
				<td style="text-align: center;" width="90"><strong>Prijs</strong></td>
			</tr>
			<tr>
				<td>Losse Rijles <sup>(60 minuten)</sup></td>
				<td>€45,-</td>
			</tr>
			<tr>
				<td>i-Theorie Cursus <sup>(online theorie cursus)</sup></td>
				<td>€69,-</td>
			</tr>
			<tr>
				<td>CBR AVB examen incl. administratiekosten</td>
				<td>€120,-</td>
			</tr>
			<tr>
				<td>C.B.R. praktijkexamen A.V.D. incl. administratiekosten</td>
				<td>€225,-</td>
			</tr>
			<tr>
				<td>Eigen Verklaring<sup>*(online kopen en invullen via CBR.nl)</sup> <b><a href="https://mijn.cbr.nl/nl/Authentication/Login?ReturnUrl=%2f">inloggen met je DIGID</a></b> <sup>(* eis van CBR)</sup></td>
				<td>€25,80</td>
			</tr>
			<tr>
				<td>Startpakket 10 lessen <sup>(60 minuten)</sup></td>
				<td>€399,-</td>
			</tr>
			<tr>
				<td>Kortingspakket 25 lessen <sup>(60 minuten)</sup>  C.B.R. AVB / Voertuigbeheersing examen incl. administratiekosten C.B.R. AVD Praktijkexamen incl. administratiekosten </td>
				<td>€1380,-</td>
			</tr>
			<tr>
				<td>Verkeerstheorie boek</td>
				<td><a href="#">Zie webshop</a></td>
			</tr>
			<tr>
				<td>Vragenboek</td>
				<td><a href="#">Zie webshop</a></td>
			</tr>
			<tr>
				<td>CD</td>
				<td><a href="#">Zie webshop</a></td>
			</tr>
			<tr>
				<td>Aanvraag C.B.R. theorie examen door de Rijschool</td> 
				<td>€35,-</td>
			</tr>
			<tr>
				<td>Individueel theorie examen reserveren door de rijschool</td>
				<td>€90,-</td>
			</tr>
			<tr>
				<td>Theorie examen CBR</td>
				<td>€25,55,-</td>
			</tr>
			<tr>
				<td>Administratiekosten Rijschool</td>
				<td>€20,-</td> 
			</tr>
	</table>

<!--//////////////////////////////////////AANHANGER//////////////////////////////////////////-->
	<table class="Table">
			<tr>
				<td style="text-align: center;" colspan="2" valign="middle">
				<h2 name"Aanhanger" id="Aanhanger"><strong>Aanhanger</strong></h2></a>
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/aanhanger.png"></img>
				</td>
				
			</tr>
			<tr>
				<td style="text-align: center;" colspan="2"><strong>Onderdeel</strong></td>
				<td style="text-align: center;" width="90"><strong>Prijs</strong></td>
			</tr>
			<tr>
				<td colspan="2">Losse Rijles <sup>(60 minuten)</sup></td>
				<td>€57,-</td>
			</tr>
			<tr>
				<td colspan="2">CBR Praktijkexamen incl. administratiekosten en autohuur tijdens examen</td>
				<td>€250,-</td>
			</tr>
			<tr>
				<td colspan="2">Dagopleiding: Start om 8.30 en examen om 14.00</td>
				<td>€499,-</td>
			</tr>
			<tr>
				<td colspan="2">Eigen Verklaring <sup>*(online kopen en invullen via CBR.nl)</sup>  <b><a href="https://mijn.cbr.nl/nl/Authentication/Login?ReturnUrl=%2f">inloggen met je DIGID</a></b> <sup>(* eis van CBR)</sup></td>
				<td>€25,80,-</td> 
			</tr>
			<tr>
				<td colspan="2">Administratiekosten Rijschool</td>
				<td>€20,-</td>
			</tr>
			<tr>
				<td colspan="2">Caravan Training <sup>(training van 3 uur)</sup> incl. boek “Veilig op weg”</td>
				<td>€130,-</td>
			</tr>
	</table>

	<table class="Table">

<!--//////////////////////////////////////BROMFIETS//////////////////////////////////////////-->
			<tr>
				<td style="text-align: center;" colspan="2" valign="middle">
					<h2><strong>Bromfiets</strong></h2>
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/brommer.png"></img>
				</td>
			</tr>
			<tr>
				<td style="text-align: center;" colspan="2"><strong>Onderdeel</strong></td>
				<td style="text-align: center;" width="90"><strong>Prijs</strong></td>
			</tr>
			<tr>
				<td colspan="2">Eigen Verklaring<sup>* (online kopen en invullen via CBR.nl)</sup> <b><a href="https://mijn.cbr.nl/nl/Authentication/Login?ReturnUrl=%2f">inloggen met je DIGID</a></b> <sup>(* eis van CBR)</sup></td>
				<td>€25,80,-</td> 
			</tr>
				<tr>
				<td colspan="2">i-Theorie Cursus <sup>(online theorie cursus)</sup></td>
				<td>€69,-</td> 
			</tr>
			<tr>
				<td colspan="2">Theorieboek</td>
				<td><a href="#">Zie webshop</a></td>
			</tr>
			<tr>
				<td colspan="2">Vragenboek</td> 
				<td><a href="#">Zie webshop</a></td>
			</tr>
			<tr>
				<td colspan="2">C.D.</td>
				<td><a href="#">Zie webshop</a></td>
			</tr>
			</tr>
				<tr>
				<td colspan="2">Theorie examen CBR</td>
				<td>€25,55,-</td> 
			</tr>
			</tr>
			<tr>
				<td colspan="2">Cursus 4 uur les, praktijk incl. examen en theorie examen</td>
				<td>€369,-</td> 
			</tr>
			<tr>
				<td colspan="2">Administratiekosten</td>
				<td>€20,-</td> 
			</tr>
	</table> 

<!--//////////////////////////////////////CARAVAN//////////////////////////////////////////-->
		<table class="Table">
			<tr>
				<td style="text-align: center;" colspan="2" valign="middle">
					<h2><strong>Caravantraining</strong></h2>
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/caravan.png"></img>
				</td>
			</tr>
			<tr>
				<td style="text-align: center;" colspan="2"><strong>Onderdeel</strong><br></td>
				<td style="text-align: center;" width="90"><strong>Prijs</strong></td>
			</tr>
			<tr>
				<td colspan="2">Training incl. boek "Veilig op weg"<br></td>
				<td>€130,-</td>
			</tr>
		</tbody>
	</table> 



	<p><br>** Zie voorwaarden op deze website; te weten artikel 3-betaling, regel 10 en 11.</p>
	<p>** Startpakket is eenmalig. Alle lessen hebben een duur van 60 minuten.</p>
	<p>** Prijswijziging en druk- en typefouten voorbehouden.</p>

						<?php the_content(); ?>
						<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
					</div>
				</article>
			<?php endwhile; endif; ?>
			</div>   

<!-- 			<div class="Usp u-gridColumn4 ">
				<p>Nog even de voordelen op een rijtje:</p>
				<ul class="Usp-list">
					<li class="icon check"> Hoog slagingspercentage (81%-85 %)</li>
					<li class="icon check"> Hoge mate van kwaliteit</li>
					<li class="icon check"> Maatwerk</li>
					<li class="icon check"> Inzicht in de vorderingen</li>
					<p class="Usp-text">van de cursist</p>
					<li class="icon check"> Goede prijs-kwaliteitsverhouding</li>
					<li class="icon check"> Cursisten krijgen het praktijkboek </li>
					<p class="Usp-text">'Rijopleiding In Stappen'</p>
					<li class="icon check"> Een goede service</li>
				</ul>
			</div> -->

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
