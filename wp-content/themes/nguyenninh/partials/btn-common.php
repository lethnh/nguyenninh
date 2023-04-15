<?php
// Setup defaults
$array_defaults = array(
    'is_icon' => false,
    'link' => 'javascript:void(0)',
    'text' => null,
    'class' => null,
    'is_outline' => false
);

$args = wp_parse_args($args, $array_defaults);
?>
<?php if ($args['is_outline']) : ?>
    <a href="<?= $args['link']; ?>" class="btn btn-common btn-outline-common <?= $args['class']; ?>">
        <span><?= $args['text']; ?></span>
        <?php if ($args['is_icon']) : ?>
            <i class="fa-regular fa-arrow-up rotate-45"></i>
        <?php endif; ?>
    </a>
<?php else : ?>
    <a href="<?= $args['link']; ?>" class="btn btn-common <?= $args['class']; ?>">
        <span><?= $args['text']; ?></span>
        <?php if ($args['is_icon']) : ?>
            <i class="fa-regular fa-arrow-up rotate-45"></i>
        <?php endif; ?>
    </a>
<?php endif; ?>