<? get_header();

// ACF Variables
$field = get_field('field');
?>

<div id="content" class="content">

	<main id="main" class="main" role="main">

		<? if (have_posts()) : while (have_posts()) : the_post(); ?>

				<? get_template_part('/template-parts/parts/frontpage', 'hero'); ?>

				<? the_content(); ?>

				<?
				component('heading', [
					'content' => 'yo',
					'type' => 6
				])
				?>

				<section class="section">
					<div class="container">
						<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
							<div>
								<?
								component('card', [
									'title' => "Det her er et kort",
									'body' => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Pariatur laudantium expedita delectus temporibus ab voluptate sint neque ullam dignissimos impedit.",
									'id' => 2,
									'image' => 11,
								]);
								?>
							</div>
							<div>
								<?
								component('card', [
									'title' => "Det her er et kort 2",
									'body' => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Pariatur laudantium expedita delectus temporibus ab voluptate sint neque ullam dignissimos impedit.",
									'id' => 2,
									'image' => 11,
								]);
								?>
							</div>
							<div>
								<?
								component('card', [
									'title' => "Det her er et kort 3",
									'body' => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Pariatur laudantium expedita delectus temporibus ab voluptate sint neque ullam dignissimos impedit.",
									'id' => 2,
									'image' => 11,
								]);
								?>
							</div>
						</div>
					</div>
				</section>

				<section class="section bg-primary-b">
					<div class="container">
						<div class="grid grid-cols-3 gap-8">
							<?
							component('query', [
								'type' => 'post',
								'component' => 'card',
								'class' => 'border-0',
								'wrapper' => 'p-4 bg-primary-l rounded-lg',
								'per_page' => 3,
								'orderby' => 'date',
								'order' => 'DESC',
								'tax_query' => [
									'taxonomy' => 'category',
									'terms' => [5],
								]
							]);
							?>
						</div>
					</div>
				</section>

				<section class="section bg-primary-l">
					<div class="container">
						<div class="grid grid-cols-3 gap-8">
							<?
							component('query', [
								'type' => 'custom_type',
								'component' => 'button',
								'class' => 'bg-orange-300',
								'wrapper' => 'flex justify-center bg-primary-b py-12 rounded-lg',
								'per_page' => 3,
								'orderby' => 'date',
								'order' => 'ASC',
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
