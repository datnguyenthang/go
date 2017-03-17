<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="pictures index large-9 medium-8 columns content">
    <h3><?= __('Pictures') ?></h3>
    <table class="table" cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('product_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('shop_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('picture_name') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($pictures as $picture): ?>
            <tr>
                <td><?= $this->Number->format($picture->id) ?></td>
                <td><?= $picture->has('product') ? $this->Html->link($picture->product->name, ['controller' => 'Products', 'action' => 'view', $picture->product->id]) : '' ?></td>
                <td><?= $picture->has('shop') ? $this->Html->link($picture->shop->name, ['controller' => 'Shops', 'action' => 'view', $picture->shop->id]) : '' ?></td>
                <td><?= h($picture->picture_name) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $picture->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $picture->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $picture->id], ['confirm' => __('Are you sure you want to delete # {0}?', $picture->id)]) ?>
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
