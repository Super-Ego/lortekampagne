<? get_header();

// ACF Variables
$field = get_field('field');
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
						<p class="text-center pb-16 lg:pb-20 text-lg lg:mx-auto">Det starter ofte med en smøg til festen. Når du skal se sej ud sammen med de andre og være en del af fællesskabet. Men når en festsmøg bliver til flere, og hverdagen bliver til fest, så er du pludselig fuldtidsryger. Og det er noget lort. </p>
						<div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
							<?
							component('circle', [
								'body-orange' => "RYGNING GIVER",
								'body-white' => "DIG GULE TÆNDER OG DÅRLIG ÅNDE",
								'body-grey' => "DET ER NOGET LORT, IK?",
								'id' => 1,
							]);
							?>
							<?
							component('circle', [
								'body-orange' => "CIGARETRØG",
								'body-white' => "INDEHOLDER MERE END 7000 FORSKELLIGE STOFFER.",
								'body-grey' => "DET ER NOGET LORT, IK?",
								'id' => 2,
							]);
							?>

							<?
							component('circle', [
								'body-orange' => "NIKOTIN BLEV",
								'body-white' => "TIDLIGERE BRUGT SOM INSEKTGIFT.",
								'body-grey' => "DET ER NOGET LORT, IK?",
								'id' => 3,
							]);
							?>
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
								'big-number' => "15",
								'body' => "Rygning øger risikoen for lungekræft og mere end 15 andre kræftformer.",
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
							'heading' => "DET ER NOGET LORT, DU RYGER!!!",
							'vid_url' => "/wp-content/uploads/2022/07/RYGEKAMPAGNE-MODEL-1-RYGENING-BIO.mp4",
							'img_id' => "29",
							'id' => 1,
						]);
						?>
						<?
						component('fancy_video_right', [
							'heading' => "DET ER NOGET LORT, DU RYGER!!!",
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
						component('lortesmag', [
							'img-id-left' => "35",
							'orange-text' => "TRÆT AF",
							'white-text' => "LORTESMAG I MUNDEN?",
							'call' => "RING",
							'grey-text' => "41 37 87 40",
							'phone-url' => "tel:41378740",
							'img-id-right' => "36",
							'id' => 1,
						]);
						?>
					</div>
				</section>
				<!-- RYGNING SECTION END -->

				<!-- SNUS SECTION START -->
				<section class="section">
					<div class="container">
						<h2 class="text-center pb-8 text-h2-mobile lg:text-h2 font-semibold">FACTS UDEN FILTER</h2>
						<p class="text-center pb-16 lg:pb-20 text-lg lg:mx-auto">Cigaretter eller snus? Egentligt er der ikke den store forskel. Det starter ofte med en enkelt. Bare for sjov. Men når en enkelt bliver til flere, og sjov bliver til hverdag, er du pludselig blevet afhængig. Og det er noget lort.</p>
						<div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
							<?
							component('circle', [
								'body-orange' => "Snus ødelægger",
								'body-white' => "dit tandkød.",
								'body-grey' => "DET ER NOGET LORT, IK?",
								'id' => 4,
							]);
							?>
							<?
							component('circle', [
								'body-orange' => "Snus indeholder",
								'body-white' => "op til 40 gange mere nikotin end cigaretter.",
								'body-grey' => "DET ER NOGET LORT, IK?",
								'id' => 5,
							]);
							?>

							<?
							component('circle', [
								'body-orange' => "Nikotin i snus",
								'body-white' => "Kan skade din hjerne.",
								'body-grey' => "DET ER NOGET LORT, IK?",
								'id' => 6,
							]);
							?>
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
								'id' => 4,
							]);
							?>
							<?
							component('facts', [
								'big-number' => "31",
								'body' => "kræftfremkaldende stoffer i snus.",
								'id' => 5,
							]);
							?>
							<?
							component('facts', [
								'big-number' => "40 X",
								'body' => "mere nikotin i snus end i cigaretter.",
								'id' => 6,
							]);
							?>
						</div>
					</div>
				</section>

				<section class="section pt-0">
					<div class="container">
						<?
						component('fancy_video_left', [
							'heading' => "SNUS ER NOGET LORT!!!",
							'vid_url' => "/wp-content/uploads/2022/07/RYGEKAMPAGNE-MODEL-2-SNUS-BIO.mp4",
							'img_id' => "41",
							'id' => 2,
						]);
						?>
						<?
						component('fancy_video_right', [
							'heading' => "SNUS ER NOGET LORT!!!",
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
						component('lortesmag', [
							'img-id-left' => "43",
							'orange-text' => "TRÆT AF",
							'white-text' => "LORTESMAG I MUNDEN?",
							'call' => "RING",
							'grey-text' => "41 37 87 40",
							'phone-url' => "tel:41378740",
							'img-id-right' => "44",
							'id' => 2,
						]);
						?>
					</div>
				</section>
				<!-- SNUS SECTION END -->

		<? endwhile;
		endif; ?>

	</main> <!-- end #main -->

</div> <!-- end #content -->

<? get_footer();
