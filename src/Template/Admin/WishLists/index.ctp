<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <a href="#menu-toggle" class="btn btn-default" id="menu-toggle">Toggle Menu</a>
    <?= $this->Html->link(__('New Shop'), ['action' => 'add'], [ 'class' => 'btn btn-default']) ?>
</nav>
<div class="wishLists index large-9 medium-8 columns content">
    <h3><?= __('Wish Lists') ?></h3>
    <table class="table" cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('product_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('account_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($wishLists as $wishList): ?>
            <tr>
                <td><?= $this->Number->format($wishList->id) ?></td>
                <td><?= $wishList->has('product') ? $this->Html->link($wishList->product->name, ['controller' => 'Products', 'action' => 'view', $wishList->product->id]) : '' ?></td>
                <td><?= $wishList->has('account') ? $this->Html->link($wishList->account->id, ['controller' => 'Accounts', 'action' => 'view', $wishList->account->id]) : '' ?></td>
                <td><?= h($wishList->created) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $wishList->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $wishList->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $wishList->id], ['confirm' => __('Are you sure you want to delete # {0}?', $wishList->id)]) ?>
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
