<?
// Button arguments
$url = isset($args['url']) ? $args['url'] : '';
$title = isset($args['title']) ? $args['title'] : null;
$target = isset($args['taget']) ? $args['taget'] : '';
$id = isset($args['id']) ? $args['id'] : null;
$classes = isset($args['classes']) ? $args['classes'] : '';
$variant = isset($args['variant']) ? $args['variant'] : null;
$icon = isset($args['icon']) ? $args['icon'] : false;

// If an ID is passed change url to permalink
if ($id) :
    $url = get_permalink($id);
endif;

// Button size presets
$variantClasses = "text-default py-6 px-8 gap-4 hover:ring-4";

if ($variant === "small") :
    $variantClasses = "text-sm py-2 px-4 hover:ring-2";
elseif ($variant === "medium") :
    $variantClasses = "text-default py-4 px-6 hover:ring-2 gap-2";
endif;
?>

<!-- Button component -->
<a href="<?= esc_url($url) ?>" target="<?= esc_attr(
  $target
) ?>" title="<?= esc_attr(
  $title
) ?>" class="<?= $variantClasses ?> bg-accent-b cursor-pointer group flex items-center w-fit text-primary-d select-none rounded-full hover:ring-opacity-75 hover:bg-accent-l hover:ring-4 hover:ring-accent-d <?= $classes ?>">

    <? if($title): ?>    
        <span><?= $title ?></span>
    <? endif; ?>

    <? if ($variant !== "small" && $icon) : ?>
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" class="text-primary-b" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <line x1="5" y1="12" x2="19" y2="12"></line>
            <polyline points="12 5 19 12 12 19"></polyline>
        </svg>
    <? endif; ?>
</a>