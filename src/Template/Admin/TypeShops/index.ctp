<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="typeShops index large-9 medium-8 columns content">
    <h3><?= __('Type Shops') ?></h3>
    <table class="table" cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('type') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($typeShops as $typeShop): ?>
            <tr>
                <td><?= $this->Number->format($typeShop->id) ?></td>
                <td><?= h($typeShop->type) ?></td>
                <td><?= h($typeShop->name) ?></td>
                <!--<td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $typeShop->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $typeShop->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $typeShop->id], ['confirm' => __('Are you sure you want to delete # {0}?', $typeShop->id)]) ?>
                </td>-->
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
