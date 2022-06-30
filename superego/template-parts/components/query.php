<!-- WP Query loop -->
<?

// Button arguments
$type = isset($args['type']) ? $args['type'] : ['post'];
$posts_per_page = isset($args['per_page']) ? $args['per_page'] : -1;
$order = isset($args['order']) ? $args['order'] : 'ASC';
$orderby = isset($args['orderby']) ? $args['orderby'] : 'menu_order';
$component = isset($args['component']) ? $args['component'] : 'card';
$wrapper = isset($args['wrapper']) ? $args['wrapper'] : '';
$class = isset($args['class']) ? $args['class'] : '';

$index = 1;

// Filter by taxonomy
$tax_query = isset($args['tax_query']) ? $args['tax_query'] : null;
$category = isset($args['tax_query']['taxonomy']) ? $args['tax_query']['taxonomy'] : [];
$terms = isset($args['tax_query']['terms']) ? $args['tax_query']['terms'] : [];

$tax_query_template =  [
    [
        'taxonomy'         => $category,
        'terms'            => $terms,
        'field'            => 'term_id',
        'operator'         => 'IN',
    ]
];

// WP_Query arguments
$query_args = [
    'post_type'         => $type,
    'post_status'       => ['publish'],
    'posts_per_page'    => $posts_per_page,
    'order'             => $order,
    'orderby'           => $orderby,
    'tax_query'         => $tax_query ? $tax_query_template : []
];

// The Query
$query = new WP_Query($query_args);
$items = $query->posts;

foreach ($items as $item) :
    $index++;

    $data = isset($args['data']) ? $args['data'] : [
        'title' => get_the_title($item->ID),
        'body' => get_the_excerpt($item->ID),
        'class' => $class,
        'id' => $item->ID,
    ];

    array_push($data, $class);
    ?>
    <div class="<?= $type . "-" . $index . " " . esc_attr($wrapper) ?>">
        <? component($component, $data); ?> 
    </div>
<? 

endforeach;
wp_reset_postdata();