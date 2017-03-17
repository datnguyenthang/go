<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="shopCountViews view large-9 medium-8 columns content">
    <h3><?= h($shopCountView->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Shop') ?></th>
            <td><?= $shopCountView->has('shop') ? $this->Html->link($shopCountView->shop->name, ['controller' => 'Shops', 'action' => 'view', $shopCountView->shop->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($shopCountView->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Quantity') ?></th>
            <td><?= $this->Number->format($shopCountView->quantity) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Current Date') ?></th>
            <td><?= h($shopCountView->current_date) ?></td>
        </tr>
    </table>
</div>
