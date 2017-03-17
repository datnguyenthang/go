<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="shopItems view large-9 medium-8 columns content">
    <h3><?= h($shopItem->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Shop') ?></th>
            <td><?= $shopItem->has('shop') ? $this->Html->link($shopItem->shop->name, ['controller' => 'Shops', 'action' => 'view', $shopItem->shop->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tradetype') ?></th>
            <td><?= h($shopItem->tradetype) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Brandname') ?></th>
            <td><?= h($shopItem->brandname) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Productname') ?></th>
            <td><?= h($shopItem->productname) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($shopItem->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Pricefrom') ?></th>
            <td><?= $this->Number->format($shopItem->pricefrom) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Priceto') ?></th>
            <td><?= $this->Number->format($shopItem->priceto) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Deleted') ?></th>
            <td><?= $this->Number->format($shopItem->deleted) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($shopItem->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Updated') ?></th>
            <td><?= h($shopItem->updated) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Deleted Date') ?></th>
            <td><?= h($shopItem->deleted_date) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Img') ?></h4>
        <?= $this->Text->autoParagraph(h($shopItem->img)); ?>
    </div>
</div>
