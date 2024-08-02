<?php
/** @var Nayjest\Grids\Components\SelectFilter $component */
?>
<?php if ($component->getLabel()): ?>
    <span><?= $component->getLabel() ?></span>
<?php endif ?>
<?=
html()->select(
    $component->getInputName(),
    $component->getVariants(),
    $component->getValue(),
    [
        'class' => "form-control input-sm",
        'style' => 'display: inline; width: 160px; margin-right: 10px'
    ]
);
?>
