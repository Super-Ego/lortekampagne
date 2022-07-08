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
<article id="se-fact-<?= $id ?>" class="se-fact flex flex-col justify-start items-center overflow-hidden text-center" data-animation="fade-up">
    <h3 class="font-overskrift text-h1-mobile md:text-100px xl:text-120px 2xl:text-h1 font-semibold pb-4"><?= $big_number ?></h3>
    <p class="text-primary-d-2"><?= $body ?></p>
</article>