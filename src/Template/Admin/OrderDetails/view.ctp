<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="orderDetails view large-9 medium-8 columns content">
    <h3><?= h($orderDetail->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Order') ?></th>
            <td><?= $orderDetail->has('order') ? $this->Html->link($orderDetail->order->id, ['controller' => 'Orders', 'action' => 'view', $orderDetail->order->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Shop') ?></th>
            <td><?= $orderDetail->has('shop') ? $this->Html->link($orderDetail->shop->name, ['controller' => 'Shops', 'action' => 'view', $orderDetail->shop->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Product') ?></th>
            <td><?= $orderDetail->has('product') ? $this->Html->link($orderDetail->product->name, ['controller' => 'Products', 'action' => 'view', $orderDetail->product->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Type') ?></th>
            <td><?= h($orderDetail->type) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($orderDetail->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Type Id') ?></th>
            <td><?= $this->Number->format($orderDetail->type_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Quantity') ?></th>
            <td><?= $this->Number->format($orderDetail->quantity) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Price') ?></th>
            <td><?= $this->Number->format($orderDetail->price) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Subtotal') ?></th>
            <td><?= $this->Number->format($orderDetail->subtotal) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Postage') ?></th>
            <td><?= $this->Number->format($orderDetail->postage) ?></td>
        </tr>
    </table>
</div>
