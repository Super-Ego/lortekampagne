<?
// Use this snippet to pass data to a component
/* component('circle', [
    'body-orange' => "Det her",
    'body-white' => "er en cirkel",
    'body-grey' => "med tekst",
    'id' => 2,
]); */

// Cicrle arguments
$id = isset($args['id']) ? $args['id'] : null;
$body_orange = isset($args['body-orange']) ? $args['body-orange'] : null;
$body_white = isset($args['body-white']) ? $args['body-white'] : null;
$body_grey = isset($args['body-grey']) ? $args['body-grey'] : null;
$animate = isset($args['animate']) ? $args['animate'] : 'fade-up';

?>


<!-- Circle component -->
<article id="se-circle-<?= $id ?>" class="se-circle group flex flex-col justify-center items-center border relative border-light-b rounded-full overflow-hidden text-center" data-animation="fade-up">
    <? if($body_orange): ?>
        <p class="text-secondary-b"><?= $body_orange ?></p>
    <? endif; ?>
    <? if($body_white): ?>
        <p class="text-light-b"><?= $body_white ?></p>
    <? endif; ?>
    <? if($body_grey): ?>
        <p class="text-primary-l"><?= $body_grey ?></p>
    <? endif; ?>    
</article>