<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="productTypeQuantity index large-9 medium-8 columns content">
    <h3><?= __('Product Type Quantity') ?></h3>
    <table class="table" cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('product_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('type') ?></th>
                <th scope="col"><?= $this->Paginator->sort('quantity') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($productTypeQuantity as $productTypeQuantity): ?>
            <tr>
                <td><?= $this->Number->format($productTypeQuantity->id) ?></td>
                <td><?= $productTypeQuantity->has('product') ? $this->Html->link($productTypeQuantity->product->name, ['controller' => 'Products', 'action' => 'view', $productTypeQuantity->product->id]) : '' ?></td>
                <td><?= h($productTypeQuantity->type) ?></td>
                <td><?= $this->Number->format($productTypeQuantity->quantity) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $productTypeQuantity->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $productTypeQuantity->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $productTypeQuantity->id], ['confirm' => __('Are you sure you want to delete # {0}?', $productTypeQuantity->id)]) ?>
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
