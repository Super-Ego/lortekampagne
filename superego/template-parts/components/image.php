<?
// Use this snippet to pass data to a component
/* component('image', [
    'id' => $image ? $image : $id,
    'size' => $imageSize,
    'attr' => $imgAttr,
    'class' => "bg-secondary-d aspect-w-16 aspect-h-9 group-hover:bg-secondary-b transition-colors duration-300",
    'featured' => $image ? false : true
]); */

// Button arguments
$id = $args['id'];
$size = $args['size'] ?: "medium_large";
$attr = $args['attr'] ?: [];
$featured = $args['featured'] ?: false;
$class = $args['class'] ?: "";
?>

<!-- Image component -->
<figure class="image-figure overflow-hidden m-0 <?= $class ?>">
    <? if ($featured) : ?>
        <?= get_the_post_thumbnail($id, $size, $attr) ?>
    <? else : ?>
        <?= wp_get_attachment_image($id, $size, false, $attr) ?>
    <? endif; ?>
</figure>