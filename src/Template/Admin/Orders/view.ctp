<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="orders view large-9 medium-8 columns content">
    <h3><?= h($order->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Account') ?></th>
            <td><?= $order->has('account') ? $this->Html->link($order->account->id, ['controller' => 'Accounts', 'action' => 'view', $order->account->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Paypal Capture') ?></th>
            <td><?= h($order->paypal_capture) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Confirm Date') ?></th>
            <td><?= h($order->confirm_date) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Delivery Date') ?></th>
            <td><?= h($order->delivery_date) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Transfer Date') ?></th>
            <td><?= h($order->transfer_date) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($order->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Total') ?></th>
            <td><?= $this->Number->format($order->total) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Order Status') ?></th>
            <td><?= $this->Number->format($order->order_status) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Payment Status') ?></th>
            <td><?= $this->Number->format($order->payment_status) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Payment Method') ?></th>
            <td><?= $this->Number->format($order->payment_method) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Postage') ?></th>
            <td><?= $this->Number->format($order->postage) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Delivery Cash') ?></th>
            <td><?= $this->Number->format($order->delivery_cash) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Deleted') ?></th>
            <td><?= $this->Number->format($order->deleted) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Deleted Date') ?></th>
            <td><?= h($order->deleted_date) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($order->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Updated') ?></th>
            <td><?= h($order->updated) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Order Details') ?></h4>
        <?php if (!empty($order->order_details)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Order Id') ?></th>
                <th scope="col"><?= __('Shop Id') ?></th>
                <th scope="col"><?= __('Product Id') ?></th>
                <th scope="col"><?= __('Type Id') ?></th>
                <th scope="col"><?= __('Type') ?></th>
                <th scope="col"><?= __('Quantity') ?></th>
                <th scope="col"><?= __('Price') ?></th>
                <th scope="col"><?= __('Subtotal') ?></th>
                <th scope="col"><?= __('Postage') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($order->order_details as $orderDetails): ?>
            <tr>
                <td><?= h($orderDetails->id) ?></td>
                <td><?= h($orderDetails->order_id) ?></td>
                <td><?= h($orderDetails->shop_id) ?></td>
                <td><?= h($orderDetails->product_id) ?></td>
                <td><?= h($orderDetails->type_id) ?></td>
                <td><?= h($orderDetails->type) ?></td>
                <td><?= h($orderDetails->quantity) ?></td>
                <td><?= h($orderDetails->price) ?></td>
                <td><?= h($orderDetails->subtotal) ?></td>
                <td><?= h($orderDetails->postage) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'OrderDetails', 'action' => 'view', $orderDetails->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'OrderDetails', 'action' => 'edit', $orderDetails->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'OrderDetails', 'action' => 'delete', $orderDetails->id], ['confirm' => __('Are you sure you want to delete # {0}?', $orderDetails->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
