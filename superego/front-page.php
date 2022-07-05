<? get_header();

// ACF Variables
$field = get_field('field');
?>

<div id="content" class="content">

	<main id="main" class="main" role="main">

		<? if (have_posts()) : while (have_posts()) : the_post(); ?>

				<? get_template_part('/template-parts/parts/frontpage', 'hero'); ?>

				<? the_content(); ?>

				<section class="section bg-black">
					<div class="container">
						<h2 class="text-center pb-8 text-h2-mobile lg:text-h2 font-semibold">FACTS UDEN FILTER</h2>
						<p class="text-center pb-8 text-lg">Det starter ofte med en smøg til festen. Når du skal se sej ud sammen med de andre og være en del af fællesskabet. Men når en festsmøg bliver til flere, og hverdagen bliver til fest, så er du pludselig fuldtidsryger. Og det er noget lort. </p>
						<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
							<div>
								<?
								component('circle', [
									'body-orange' => "RYGNING GIVER",
									'body-white' => "DIG GULE TÆNDER OG DÅRLIG ÅNDE",
									'body-grey' => "DET ER NOGET LORT, IK?",
									'id' => 1,
								]);
								?>
							</div>
							<div>
								<?
								component('circle', [
									'body-orange' => "CIGARETRØG",
									'body-white' => "INDEHOLDER MERE END 7000 FORSKELLIGE STOFFER.",
									'body-grey' => "DET ER NOGET LORT, IK?",
									'id' => 2,
								]);
								?>
							</div>
							<div>
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
					</div>
				</section>

				<section class="section bg-black">
					<div class="container">
						<div class="grid grid-cols-3 gap-8 bg-secondary-b">
							<?
							component('facts', [
								'big-number' => "9.999",
								'body' => "Tekst tekst tekst",
								'id' => 1,
							]);
							?>
						</div>
					</div>
				</section>

		<? endwhile;
		endif; ?>

	</main> <!-- end #main -->

</div> <!-- end #content -->

<? get_footer();
