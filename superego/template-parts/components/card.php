<?
// Use this snippet to pass data to a component
/* component('card', [
    'title' => "Det her er et kort",
    'body' => "Lorem ipsum dolor sit, amet consectetur adipisicing elit.",
    'id' => 2,
    'url' => '/sample-page/',
    'image' => 11,
]); */

// Card arguments
$id = isset($args['id']) ? $args['id'] : null;
$title = isset($args['title']) ? $args['title'] : null;
$body = isset($args['body']) ? $args['body'] : null;
$image = isset($args['image']) ? $args['image'] : null;
$url = isset($args['url']) ? $args['url'] : null;
$class = isset($args['class']) ? $args['class'] : '';
$image_size = isset($args['image_size']) ? $args['image_size'] : 'medium_large';
$imgAttr = ['class' => 'w-100 h-100 object-cover', 'data-animation' => 'zoom'];
$animate = isset($args['animate']) ? $args['animate'] : 'fade-up';

// If an ID is passed change url to permalink
if ($id) :
    $url = get_permalink($id);
endif;

?>


<!-- Card component -->
<article id="se-card-<?= $id ?>" class="bg-white group flex flex-col border relative border-secondary-b rounded-lg overflow-hidden h-full <?= $class ?>" data-animation="fade-up">
    <?
    component('image', [
        'id' => $image ? $image : $id,
        'size' => $image_size,
        'attr' => $imgAttr,
        'class' => "bg-secondary-d aspect-w-16 aspect-h-9 group-hover:bg-secondary-b transition-colors duration-300",
        'featured' => $image ? false : true
    ]);
    ?>

    <div class="flex flex-col py-8 px-6 h-full justify-between">
        <? if($title): ?>
            <h2 class="text-3xl mb-4 text-primary-b"><?= $title ?></h2>
        <? endif; ?>

        <? if($body): ?>
            <p class="text-primary-l"><?= $body ?></p>
        <? endif; ?>

        <?
        $url ? component('button', [
            'title' => "Læs mere",
            'id' => $id,
            'variant' => 'small',
            'classes' => "mt-6",
        ]) : null;
        ?>
    </div>
    <a href="<?= $url ?>" class="absolute inset-0"></a>
</article>