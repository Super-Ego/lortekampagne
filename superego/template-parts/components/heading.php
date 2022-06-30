<?
// Heading arguments
$type = isset($args['type']) ? $args['type'] : 1;
$content = isset($args['content']) ? $args['content'] : null;
$class = isset($args['class']) ? $args['class'] : null;

$type = "h" . $type;
?>

<<?= $type ?> class="<?= esc_attr($class) ?>"><?= $content ?></<?= $type ?>>