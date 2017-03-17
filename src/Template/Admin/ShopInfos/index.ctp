<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="shopInfos index large-9 medium-8 columns content">
    <h3><?= __('Shop Infos') ?></h3>
    <table class="table" cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('full_name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('dealer') ?></th>
                <th scope="col"><?= $this->Paginator->sort('address') ?></th>
                <th scope="col"><?= $this->Paginator->sort('phone_number') ?></th>
                <th scope="col"><?= $this->Paginator->sort('fax') ?></th>
                <th scope="col"><?= $this->Paginator->sort('zip_code') ?></th>
                <th scope="col"><?= $this->Paginator->sort('prefecture') ?></th>
                <th scope="col"><?= $this->Paginator->sort('shop_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('updated') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($shopInfos as $shopInfo): ?>
            <tr>
                <td><?= $this->Number->format($shopInfo->id) ?></td>
                <td><?= h($shopInfo->full_name) ?></td>
                <td><?= h($shopInfo->dealer) ?></td>
                <td><?= h($shopInfo->address) ?></td>
                <td><?= h($shopInfo->phone_number) ?></td>
                <td><?= h($shopInfo->fax) ?></td>
                <td><?= h($shopInfo->zip_code) ?></td>
                <td><?= $this->Number->format($shopInfo->prefecture) ?></td>
                <td><?= $shopInfo->has('shop') ? $this->Html->link($shopInfo->shop->name, ['controller' => 'Shops', 'action' => 'view', $shopInfo->shop->id]) : '' ?></td>
                <td><?= h($shopInfo->created) ?></td>
                <td><?= h($shopInfo->updated) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $shopInfo->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $shopInfo->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $shopInfo->id], ['confirm' => __('Are you sure you want to delete # {0}?', $shopInfo->id)]) ?>
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
