<?php
/** @var Nayjest\Grids\Filter $filter */
?>

<input
    class="form-control input-sm"
    name="<?= $filter->getInputName() ?>"
    value="<?= $filter->getValue() ?>"
    placeholder="<?= $label ?? '' ?>"
    />
