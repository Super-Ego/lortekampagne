<?
// Use this snippet to pass data to a component
/* component('lortesmag', [
    'img-id-left' => "",
    'orange-text' => "TRÆT AF",
    'white-text' => "LORTESMAG I MUNDEN?",
    'call' => "RING"
    'grey-text' => "41 37 87 40",
    'phone-url' => "tel:41378740",
    'img-id-right' => "",
    'id' => 1,
]); */

// Facts arguments
$id = isset($args['id']) ? $args['id'] : null;
$img_id_left = isset($args['img-id-left']) ? $args['img-id-left'] : null;
$img_id_right = isset($args['img-id-right']) ? $args['img-id-right'] : null;
$orange_text = isset($args['orange-text']) ? $args['orange-text'] : null;
$white_text = isset($args['white-text']) ? $args['white-text'] : null;
// $call = isset($args['call']) ? $args['call'] : null;
// $grey_text = isset($args['grey-text']) ? $args['grey-text'] : null;
// $phone_url = isset($args['phone-url']) ? $args['phone-url'] : null;
$animate = isset($args['animate']) ? $args['animate'] : 'fade-up';

// get global Mobile Detect
global $detect;

?>


<!-- Lortesmag component -->
<article id="se-lortesmag-<?= $id ?>" class="se-lortesmag bg-black lg:w-full flex flex-col lg:grid lg:grid-cols-3 justify-center items-center overflow-hidden text-center" data-animation="fade-up">
    <? if (!$detect->isMobile()) : ?>
        <div>
            <figure class="image-figure">
                <?= wp_get_attachment_image(
                    $img_id_left,
                    "full",
                    false
                ) ?>
            </figure>
        </div>
    <? endif; ?>
    <div class="py-8 lg:py-0">
        <h2 class="text-h3-mobile md:text-h2-mobile lg:text-h3 xl:text-h2 2xl:text-90px qhd:text-100px font-semibold mx-auto uppercase">
            <span class="text-secondary-b"><?= $orange_text ?></span>
            <span class="text-white"><?= $white_text ?><br>
                <!-- <?= $call ?></span><br>
            <a href="<?= $phone_url ?>" class="text-primary-l hover:text-secondary-b"><?= $grey_text ?></a> -->
        </h2>
        <a class="btn mx-auto mt-8" href="https://www.lunge.dk/lokal/horsens-lokalafdeling" target="_blank">KONTAKT LUNGEFORENINGEN</a>
    </div>
    <div>
        <figure class="image-figure">
            <?= wp_get_attachment_image(
                $img_id_right,
                "full",
                false
            ) ?>
        </figure>
    </div>
</article>