<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="productTypeQuantity view large-9 medium-8 columns content">
    <h3><?= h($productTypeQuantity->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Product') ?></th>
            <td><?= $productTypeQuantity->has('product') ? $this->Html->link($productTypeQuantity->product->name, ['controller' => 'Products', 'action' => 'view', $productTypeQuantity->product->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Type') ?></th>
            <td><?= h($productTypeQuantity->type) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($productTypeQuantity->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Quantity') ?></th>
            <td><?= $this->Number->format($productTypeQuantity->quantity) ?></td>
        </tr>
    </table>
</div>
