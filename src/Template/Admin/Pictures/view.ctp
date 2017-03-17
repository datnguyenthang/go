<?php
/**
  * @var \App\View\AppView $this
  */
?>
<div class="pictures view large-9 medium-8 columns content">
    <h3><?= h($picture->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Product') ?></th>
            <td><?= $picture->has('product') ? $this->Html->link($picture->product->name, ['controller' => 'Products', 'action' => 'view', $picture->product->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Shop') ?></th>
            <td><?= $picture->has('shop') ? $this->Html->link($picture->shop->name, ['controller' => 'Shops', 'action' => 'view', $picture->shop->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Picture Name') ?></th>
            <td><?= h($picture->picture_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($picture->id) ?></td>
        </tr>
    </table>
</div>
