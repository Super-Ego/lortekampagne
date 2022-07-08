<?
// Use this snippet to pass data to a component
/* component('fancy_video_left', [
    'heading' => "DET ER NOGET LORT, DU RYGER!!!",
    'vid_url' => "",
    'img_id' => "",
    'id' => 1,
]); */

// Fancy video arguments
$id = isset($args['id']) ? $args['id'] : null;
$heading = isset($args['heading']) ? $args['heading'] : null;
$vid_url = isset($args['vid_url']) ? $args['vid_url'] : null;
$img_id = isset($args['img_id']) ? $args['img_id'] : null;
$animate = isset($args['animate']) ? $args['animate'] : 'fade-up';

?>


<!-- Fancy video component -->
<article id="se-fancy_video_left-<?= $id ?>" class="se-fancy_video_left flex flex-col lg:grid lg:grid-cols-2 justify-center items-center overflow-hidden text-center" data-animation="fade-up">
    <div class="vid-col w-full">
        <figure class="image-figure add-overlay">
            <?= wp_get_attachment_image($img_id, "full", false) ?>
        </figure>
        <a data-fancybox data-type="html5video" href="<?= $vid_url ?>" class="btn">AFSPIL VIDEO</a>
    </div>
    <div class="text-col order-first lg:order-last py-8 lg:py-0 bg-black w-full lg:h-full lg:flex lg:justify-center lg:items-center lg:px-4">
        <h3 class="text-h3-mobile lg:text-h3 font-semibold"><?= $heading ?></h3>
    </div>    
</article>