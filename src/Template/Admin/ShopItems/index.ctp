<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="shopItems index large-9 medium-8 columns content">
    <h3><?= __('Shop Items') ?></h3>
    <table class="table" cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('shop_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('tradetype') ?></th>
                <th scope="col"><?= $this->Paginator->sort('brandname') ?></th>
                <th scope="col"><?= $this->Paginator->sort('productname') ?></th>
                <th scope="col"><?= $this->Paginator->sort('img') ?></th>
                <th scope="col"><?= $this->Paginator->sort('pricefrom') ?></th>
                <th scope="col"><?= $this->Paginator->sort('priceto') ?></th>
                <th scope="col"><?= $this->Paginator->sort('deleted') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('updated') ?></th>
                <th scope="col"><?= $this->Paginator->sort('deleted_date') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($shopItems as $shopItem): ?>
            <tr>
                <td><?= $this->Number->format($shopItem->id) ?></td>
                <td><?= $shopItem->has('shop') ? $this->Html->link($shopItem->shop->name, ['controller' => 'Shops', 'action' => 'view', $shopItem->shop->id]) : '' ?></td>
                <td><?= $tradetypes[$shopItem->trade_type_id] ?></td>
                <td><?= h($shopItem->brandname) ?></td>
                <td><?= h($shopItem->productname) ?></td>
                <td><?= $this->Html->link($shopItem->img, $this->Upload->url($shopItem, 'img'));?></td>
                <td><?= $this->Number->format($shopItem->pricefrom) ?></td>
                <td><?= $this->Number->format($shopItem->priceto) ?></td>
                <td><?= $this->Number->format($shopItem->deleted) ?></td>
                <td><?= h($shopItem->created) ?></td>
                <td><?= h($shopItem->updated) ?></td>
                <td><?= h($shopItem->deleted_date) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $shopItem->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $shopItem->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $shopItem->id], ['confirm' => __('Are you sure you want to delete # {0}?', $shopItem->id)]) ?>
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
