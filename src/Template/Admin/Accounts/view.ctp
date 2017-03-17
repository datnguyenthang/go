<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="accounts view large-9 medium-8 columns content">
    <h3><?= h($account->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Password') ?></th>
            <td><?= h($account->password) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Mail') ?></th>
            <td><?= h($account->mail) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Facebook') ?></th>
            <td><?= h($account->facebook) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Google') ?></th>
            <td><?= h($account->google) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Twitter') ?></th>
            <td><?= h($account->twitter) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Hashcode') ?></th>
            <td><?= h($account->hashcode) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($account->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($account->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Updated') ?></th>
            <td><?= h($account->updated) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Deleted Date') ?></th>
            <td><?= h($account->deleted_date) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Actived') ?></th>
            <td><?= $account->actived ? __('Yes') : __('No'); ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Deleted') ?></th>
            <td><?= $account->deleted ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Orders') ?></h4>
        <?php if (!empty($account->orders)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Account Id') ?></th>
                <th scope="col"><?= __('Total') ?></th>
                <th scope="col"><?= __('Order Status') ?></th>
                <th scope="col"><?= __('Payment Status') ?></th>
                <th scope="col"><?= __('Payment Method') ?></th>
                <th scope="col"><?= __('Paypal Capture') ?></th>
                <th scope="col"><?= __('Postage') ?></th>
                <th scope="col"><?= __('Delivery Cash') ?></th>
                <th scope="col"><?= __('Deleted') ?></th>
                <th scope="col"><?= __('Deleted Date') ?></th>
                <th scope="col"><?= __('Confirm Date') ?></th>
                <th scope="col"><?= __('Delivery Date') ?></th>
                <th scope="col"><?= __('Transfer Date') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Updated') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($account->orders as $orders): ?>
            <tr>
                <td><?= h($orders->id) ?></td>
                <td><?= h($orders->account_id) ?></td>
                <td><?= h($orders->total) ?></td>
                <td><?= h($orders->order_status) ?></td>
                <td><?= h($orders->payment_status) ?></td>
                <td><?= h($orders->payment_method) ?></td>
                <td><?= h($orders->paypal_capture) ?></td>
                <td><?= h($orders->postage) ?></td>
                <td><?= h($orders->delivery_cash) ?></td>
                <td><?= h($orders->deleted) ?></td>
                <td><?= h($orders->deleted_date) ?></td>
                <td><?= h($orders->confirm_date) ?></td>
                <td><?= h($orders->delivery_date) ?></td>
                <td><?= h($orders->transfer_date) ?></td>
                <td><?= h($orders->created) ?></td>
                <td><?= h($orders->updated) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Orders', 'action' => 'view', $orders->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Orders', 'action' => 'edit', $orders->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Orders', 'action' => 'delete', $orders->id], ['confirm' => __('Are you sure you want to delete # {0}?', $orders->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Wish Lists') ?></h4>
        <?php if (!empty($account->wish_lists)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Product Id') ?></th>
                <th scope="col"><?= __('Account Id') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($account->wish_lists as $wishLists): ?>
            <tr>
                <td><?= h($wishLists->id) ?></td>
                <td><?= h($wishLists->product_id) ?></td>
                <td><?= h($wishLists->account_id) ?></td>
                <td><?= h($wishLists->created) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'WishLists', 'action' => 'view', $wishLists->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'WishLists', 'action' => 'edit', $wishLists->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'WishLists', 'action' => 'delete', $wishLists->id], ['confirm' => __('Are you sure you want to delete # {0}?', $wishLists->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
