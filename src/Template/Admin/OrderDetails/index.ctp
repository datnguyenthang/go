<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="orderDetails index large-9 medium-8 columns content">
    <h3><?= __('Order Details') ?></h3>
    <table class="table" cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('order_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('shop_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('product_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('type_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('type') ?></th>
                <th scope="col"><?= $this->Paginator->sort('quantity') ?></th>
                <th scope="col"><?= $this->Paginator->sort('price') ?></th>
                <th scope="col"><?= $this->Paginator->sort('subtotal') ?></th>
                <th scope="col"><?= $this->Paginator->sort('postage') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($orderDetails as $orderDetail): ?>
            <tr>
                <td><?= $this->Number->format($orderDetail->id) ?></td>
                <td><?= $orderDetail->has('order') ? $this->Html->link($orderDetail->order->id, ['controller' => 'Orders', 'action' => 'view', $orderDetail->order->id]) : '' ?></td>
                <td><?= $orderDetail->has('shop') ? $this->Html->link($orderDetail->shop->name, ['controller' => 'Shops', 'action' => 'view', $orderDetail->shop->id]) : '' ?></td>
                <td><?= $orderDetail->has('product') ? $this->Html->link($orderDetail->product->name, ['controller' => 'Products', 'action' => 'view', $orderDetail->product->id]) : '' ?></td>
                <td><?= $this->Number->format($orderDetail->type_id) ?></td>
                <td><?= h($orderDetail->type) ?></td>
                <td><?= $this->Number->format($orderDetail->quantity) ?></td>
                <td><?= $this->Number->format($orderDetail->price) ?></td>
                <td><?= $this->Number->format($orderDetail->subtotal) ?></td>
                <td><?= $this->Number->format($orderDetail->postage) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $orderDetail->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $orderDetail->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $orderDetail->id], ['confirm' => __('Are you sure you want to delete # {0}?', $orderDetail->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
