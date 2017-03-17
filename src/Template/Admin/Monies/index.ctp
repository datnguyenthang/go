<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="monies index large-9 medium-8 columns content">
    <h3><?= __('Monies') ?></h3>
    <table class="table" cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('shop_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('shop_name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('update_date') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($monies as $money): ?>
            <tr>
                <td><?= $this->Number->format($money->id) ?></td>
                <td><?= $money->has('shop') ? $this->Html->link($money->shop->name, ['controller' => 'Shops', 'action' => 'view', $money->shop->id]) : '' ?></td>
                <td><?= h($money->shop_name) ?></td>
                <td><?= h($money->update_date) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $money->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $money->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $money->id], ['confirm' => __('Are you sure you want to delete # {0}?', $money->id)]) ?>
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
