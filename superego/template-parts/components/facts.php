<?
// Use this snippet to pass data to a component
/* component('facts', [
    'big-number' => "9.999",
    'body' => "Tekst tekst tekst",
    'id' => 2,
]); */

// Facts arguments
$id = isset($args['id']) ? $args['id'] : null;
$big_number = isset($args['big-number']) ? $args['big-number'] : null;
$body = isset($args['body']) ? $args['body'] : null;
$animate = isset($args['animate']) ? $args['animate'] : 'fade-up';

?>


<!-- Facts component -->
<article id="se-facts-<?= $id ?>" class="se-circle group flex flex-col justify-center items-center overflow-hidden text-center" data-animation="fade-up">
    <p class="font-heading text-h1-mobile lg:text-h1 font-semibold text-white"><?= $big_number ?></p>
    <p class=""><?= $body ?></p>
</article>