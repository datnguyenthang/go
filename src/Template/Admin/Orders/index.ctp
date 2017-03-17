<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="orders index large-9 medium-8 columns content">
    <h3><?= __('Orders') ?></h3>
    <table class="table" cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('account_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('total') ?></th>
                <th scope="col"><?= $this->Paginator->sort('order_status') ?></th>
                <th scope="col"><?= $this->Paginator->sort('payment_status') ?></th>
                <th scope="col"><?= $this->Paginator->sort('payment_method') ?></th>
                <th scope="col"><?= $this->Paginator->sort('paypal_capture') ?></th>
                <th scope="col"><?= $this->Paginator->sort('postage') ?></th>
                <th scope="col"><?= $this->Paginator->sort('delivery_cash') ?></th>
                <th scope="col"><?= $this->Paginator->sort('deleted') ?></th>
                <th scope="col"><?= $this->Paginator->sort('deleted_date') ?></th>
                <th scope="col"><?= $this->Paginator->sort('confirm_date') ?></th>
                <th scope="col"><?= $this->Paginator->sort('delivery_date') ?></th>
                <th scope="col"><?= $this->Paginator->sort('transfer_date') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('updated') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($orders as $order): ?>
            <tr>
                <td><?= $this->Number->format($order->id) ?></td>
                <td><?= $order->has('account') ? $this->Html->link($order->account->id, ['controller' => 'Accounts', 'action' => 'view', $order->account->id]) : '' ?></td>
                <td><?= $this->Number->format($order->total) ?></td>
                <td><?= $this->Number->format($order->order_status) ?></td>
                <td><?= $this->Number->format($order->payment_status) ?></td>
                <td><?= $this->Number->format($order->payment_method) ?></td>
                <td><?= h($order->paypal_capture) ?></td>
                <td><?= $this->Number->format($order->postage) ?></td>
                <td><?= $this->Number->format($order->delivery_cash) ?></td>
                <td><?= $this->Number->format($order->deleted) ?></td>
                <td><?= h($order->deleted_date) ?></td>
                <td><?= h($order->confirm_date) ?></td>
                <td><?= h($order->delivery_date) ?></td>
                <td><?= h($order->transfer_date) ?></td>
                <td><?= h($order->created) ?></td>
                <td><?= h($order->updated) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $order->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $order->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $order->id], ['confirm' => __('Are you sure you want to delete # {0}?', $order->id)]) ?>
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
