<?php
// Setup defaults
$array_defaults = array(
    'is_icon' => false,
    'link' => 'javascript:void(0)',
    'text' => null,
    'class' => null
);

$args = wp_parse_args($args, $array_defaults);
?>
<a href="<?= $args['link']; ?>" class="btn btn-common"><?= $args['text']; ?>
    <?php if ($args['is_icon']) : ?>
        <i class="fa-regular fa-arrow-up rotate-45"></i>
    <?php endif; ?>
</a>