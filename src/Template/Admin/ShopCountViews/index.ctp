<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="shopCountViews index large-9 medium-8 columns content">
    <h3><?= __('Shop Count Views') ?></h3>
    <table class="table" cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('shop_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('current_date') ?></th>
                <th scope="col"><?= $this->Paginator->sort('quantity') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($shopCountViews as $shopCountView): ?>
            <tr>
                <td><?= $this->Number->format($shopCountView->id) ?></td>
                <td><?= $shopCountView->has('shop') ? $this->Html->link($shopCountView->shop->name, ['controller' => 'Shops', 'action' => 'view', $shopCountView->shop->id]) : '' ?></td>
                <td><?= h($shopCountView->current_date) ?></td>
                <td><?= $this->Number->format($shopCountView->quantity) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $shopCountView->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $shopCountView->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $shopCountView->id], ['confirm' => __('Are you sure you want to delete # {0}?', $shopCountView->id)]) ?>
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
