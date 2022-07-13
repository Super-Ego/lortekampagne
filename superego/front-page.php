<? get_header();

// ACF Variables
$field = get_field('field');

// get global Mobile Detect
global $detect;

// Enqueue Swiper.js
se_enqueue_swiper();
?>

<div id="content" class="content">

	<main id="main" class="main" role="main">

		<? if (have_posts()) : while (have_posts()) : the_post(); ?>

				<? get_template_part('/template-parts/parts/frontpage', 'hero'); ?>

				<? the_content(); ?>

				<!-- RYGNING SECTION START -->
				<section class="section" id="facts">
					<div class="container">
						<h2 class="text-center pb-8 text-h2-mobile lg:text-h2 font-semibold">FACTS UDEN FILTER</h2>
						<p class="text-center pb-16 lg:pb-20 text-lg mx-auto">Det starter ofte med en smøg til festen. Når du skal se sej ud sammen med de andre og være en del af fællesskabet. Men når en festsmøg bliver til flere, og hverdagen bliver til fest, så er du pludselig fuldtidsryger. Og det er noget lort. </p>
						<div class="swiper-container swiper-slider" data-animation="fade-up">
							<div class="swiper-wrapper">
								<div class="swiper-slide">
									<?
									component('circle', [
										'body-orange' => "Rygning giver",
										'body-white' => "dig gule tænder og dårlig ånde.",
										'body-grey' => "Det er noget lort, ik?",
										'id' => 1,
									]);
									?>
								</div>
								<div class="swiper-slide">
									<?
									component('circle', [
										'body-orange' => "Cigaretrøg",
										'body-white' => "stinker, og det gør du også.",
										'body-grey' => "Det er noget lort, ik?",
										'id' => 2,
									]);
									?>
								</div>
								<div class="swiper-slide">
									<?
									component('circle', [
										'body-orange' => "Du får",
										'body-white' => "grå, kedelig og rynket hud af at ryge.",
										'body-grey' => "Det er noget lort, ik?",
										'id' => 3,
									]);
									?>
								</div>
								<div class="swiper-slide">
									<?
									component('circle', [
										'body-orange' => "Cigaretrøg",
										'body-white' => "indeholder mere end 7000 forskellige stoffer.",
										'body-grey' => "Det er noget lort, ik?",
										'id' => 4,
									]);
									?>
								</div>
								<div class="swiper-slide">
									<?
									component('circle', [
										'body-orange' => "Cigaretrøg",
										'body-white' => "indeholder benzin og ammoniak.",
										'body-grey' => "Det er noget lort, ik?",
										'id' => 5,
									]);
									?>
								</div>
								<div class="swiper-slide">
									<?
									component('circle', [
										'body-orange' => "Nikontin blev",
										'body-white' => "tidligere brugt som insektgift.",
										'body-grey' => "Det er noget lort, ik?",
										'id' => 6,
									]);
									?>
								</div>
								<div class="swiper-slide">
									<?
									component('circle', [
										'body-orange' => "Rygning",
										'body-white' => "øger risikoen for mere end 15 kræftformer.",
										'body-grey' => "Det er noget lort, ik?",
										'id' => 7,
									]);
									?>
								</div>
								<div class="swiper-slide">
									<?
									component('circle', [
										'body-orange' => "Cigaretter",
										'body-white' => "er skabt til at gøre dig afhængig af dem.",
										'body-grey' => "Det er noget lort, ik?",
										'id' => 8,
									]);
									?>
								</div>
							</div>
							<div class="swiper-pagination"></div>
						</div>
					</div>
				</section>

				<section class="section pt-0">
					<div class="container">
						<div class="grid lg:grid-cols-3 gap-12 bg-secondary-b px-8 py-12 lg:py-16 lg:px-12 xl:py-24 xl:px-16">
							<?
							component('facts', [
								'big-number' => "7.000",
								'body' => "forskellige stoffer i cigaretrøg.",
								'id' => 1,
							]);
							?>
							<?
							component('facts', [
								'big-number' => "70",
								'body' => "kræftfremkaldende stoffer i cigaretrøg.",
								'id' => 2,
							]);
							?>
							<?
							component('facts', [
								'big-number' => "13.000",
								'body' => "danskere dør hvert år af rygning.",
								'id' => 3,
							]);
							?>
						</div>
					</div>
				</section>

				<section class="section pt-0">
					<div class="container">
						<?
						component('fancy_video_left', [
							'heading' => "Det er noget lort, du ryger!!!",
							'vid_url' => "/wp-content/uploads/2022/07/RYGEKAMPAGNE-MODEL-1-RYGENING-BIO.mp4",
							'img_id' => "29",
							'id' => 1,
						]);
						?>
						<?
						component('fancy_video_right', [
							'heading' => "Det er noget lort, du ryger!!!",
							'vid_url' => "/wp-content/uploads/2022/07/RYGEKAMPAGNE-MODEL-2-RYGENING-BIO.mp4",
							'img_id' => "31",
							'id' => 1,
						]);
						?>
					</div>
				</section>

				<section class="section py-0">
					<div class="lg:w-screen">
						<?
						if ($detect->isMobile()) : {
								component('lortesmag', [
									'img-id-left' => "",
									'orange-text' => "Træt af",
									'white-text' => "lortesmag i munden?",
									'img-id-right' => "43",
									'id' => 1,
								]);
							}
						else : {
								component('lortesmag', [
									'img-id-left' => "35",
									'orange-text' => "Træt af",
									'white-text' => "lortesmag i munden?",
									'img-id-right' => "36",
									'id' => 1,
								]);
							}
						endif;
						?>
					</div>
				</section>
				<!-- RYGNING SECTION END -->

				<!-- SNUS SECTION START -->
				<section class="section">
					<div class="container">
						<h2 class="text-center pb-8 text-h2-mobile lg:text-h2 font-semibold">FACTS UDEN FILTER</h2>
						<p class="text-center pb-16 lg:pb-20 text-lg mx-auto">Cigaretter eller snus? Egentligt er der ikke den store forskel. Det starter ofte med en enkelt. Bare for sjov. Men når en enkelt bliver til flere, og sjov bliver til hverdag, er du pludselig blevet afhængig. Og det er noget lort.</p>
						<div class="swiper-container swiper-slider" data-animation="fade-up">
							<div class="swiper-wrapper">
								<div class="swiper-slide">
									<?
									component('circle', [
										'body-orange' => "Snus ødelægger",
										'body-white' => "dit tandkød.",
										'body-grey' => "Det er noget lort, ik?",
										'id' => 8,
									]);
									?>
								</div>
								<div class="swiper-slide">
									<?
									component('circle', [
										'body-orange' => "Snus misfarver",
										'body-white' => "dine tænder og gør dit spyt brunt.",
										'body-grey' => "Det er noget lort, ik?",
										'id' => 9,
									]);
									?>
								</div>
								<div class="swiper-slide">
									<?
									component('circle', [
										'body-orange' => "Nikotin i snus",
										'body-white' => "gør dig afhængig.",
										'body-grey' => "Det er noget lort, ik?",
										'id' => 10,
									]);
									?>
								</div>
								<div class="swiper-slide">
									<?
									component('circle', [
										'body-orange' => "Du bliver",
										'body-white' => "lige så afhængig af snus som cigaretter.",
										'body-grey' => "Det er noget lort, ik?",
										'id' => 11,
									]);
									?>
								</div>
								<div class="swiper-slide">
									<?
									component('circle', [
										'body-orange' => "Nikotin i snus",
										'body-white' => "påvirker din hjernes udvikling.",
										'body-grey' => "Det er noget lort, ik?",
										'id' => 12,
									]);
									?>
								</div>
								<div class="swiper-slide">
									<?
									component('circle', [
										'body-orange' => "Nikotin i snus",
										'body-white' => "påvirker din opmærksomhed og indlæring.",
										'body-grey' => "Det er noget lort, ik?",
										'id' => 13,
									]);
									?>
								</div>
							</div>
							<div class="swiper-pagination"></div>
						</div>
					</div>
				</section>

				<section class="section pt-0">
					<div class="container">
						<?
						component('fancy_video_left', [
							'heading' => "Snus er noget lort!!!",
							'vid_url' => "/wp-content/uploads/2022/07/RYGEKAMPAGNE-MODEL-2-SNUS-BIO.mp4",
							'img_id' => "41",
							'id' => 2,
						]);
						?>
						<?
						component('fancy_video_right', [
							'heading' => "Snus er noget lort!!!",
							'vid_url' => "/wp-content/uploads/2022/07/RYGEKAMPAGNE-MODEL-1-SNUS-BIO.mp4",
							'img_id' => "42",
							'id' => 2,
						]);
						?>
					</div>
				</section>

				<section class="section py-0" id="stop">
					<div class="lg:w-screen">
						<?
						if ($detect->isMobile()) : {
								component('lortesmag', [
									'img-id-left' => "",
									'orange-text' => "Træt af",
									'white-text' => "lortesmag i munden?",
									'img-id-right' => "44",
									'id' => 2,
								]);
							}
						else : {
								component('lortesmag', [
									'img-id-left' => "43",
									'orange-text' => "Træt af",
									'white-text' => "lortesmag i munden?",
									'img-id-right' => "44",
									'id' => 2,
								]);
							}
						endif;
						?>
					</div>
				</section>
				<!-- SNUS SECTION END -->

		<? endwhile;
		endif; ?>

	</main> <!-- end #main -->

</div> <!-- end #content -->

<? get_footer();
