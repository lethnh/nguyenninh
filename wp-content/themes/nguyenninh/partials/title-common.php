<?php
// Setup defaults
$array_defaults = array(
    'sub-title' => null,
    'title' => get_the_title(),
    'sub-title-below' => null,
    'sub-title-below-2' => null,
    'class' => null
);

$args = wp_parse_args($args, $array_defaults);
?>
<div class="d-flex flex-col w-100 title-block-common <?= $args['class'] ?>">
    <p class="sub-title gray-80"><?= $args['sub-title'] ?></p>
    <?php if ($args['title']) : ?>
        <div class="title-main d-flex align-self-center w-75">
            <p class="gray-80"><?= $args['title'] ?></p>
        </div>
    <?php endif; ?>
    <?php if ($args['sub-title-below']) : ?>
        <div class="sub-title-below d-flex align-self-center w-75">
            <p class="gray-70 text-style-base"><?= $args['sub-title-below'] ?></p>
        </div>
    <?php endif; ?>
    <?php if ($args['sub-title-below-2']) : ?>
        <div class="sub-title-below-2 d-flex align-self-center w-75 mt-64">
            <div class="flex space-x-2 align-items-centerjustify-center flex-[1]">
                <div>
                    <p class="font-prata text-7xl">“</p>
                </div>
                <div class="flex-1 mt-[10px] h-0.5 self-start bg-pink-900 bg-opacity-50 border rounded-full border-gray-700">
                </div>
            </div>
            <p class="text-content gray-70 flex-[2] ms-4"><?= $args['sub-title-below-2']['first'] ?></p>
            <p class="text-content gray-70 flex-[2] ms-4"><?= $args['sub-title-below-2']['second'] ?></p>
        </div>
    <?php endif; ?>
</div>