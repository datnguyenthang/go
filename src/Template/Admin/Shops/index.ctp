<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="shops index large-9 medium-8 columns content">
    <h3><?= __('Shops') ?></h3>
    <table class="table" cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('code') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('national_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('state_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('district_id') ?></th>
                <!--<th scope="col"><?= $this->Paginator->sort('address') ?></th>
                <th scope="col"><?= $this->Paginator->sort('phone') ?></th>
                <th scope="col"><?= $this->Paginator->sort('phonehome') ?></th>
                <th scope="col"><?= $this->Paginator->sort('contactperson') ?></th>-->
                <th scope="col"><?= $this->Paginator->sort('img') ?></th>
                <th scope="col"><?= $this->Paginator->sort('type_shop_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('deleted') ?></th>
                <th scope="col"><?= $this->Paginator->sort('publish') ?></th>
                <th scope="col"><?= $this->Paginator->sort('accessed') ?></th>
                <th scope="col"><?= $this->Paginator->sort('reject') ?></th>
                <th scope="col"><?= $this->Paginator->sort('count_request') ?></th>
                <th scope="col"><?= $this->Paginator->sort('requested') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('updated') ?></th>
                <th scope="col"><?= $this->Paginator->sort('deleted_date') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($shops as $shop): ?>
            <tr>
                <td><?= $this->Number->format($shop->id) ?></td>
                <td><?= h($shop->code) ?></td>
                <td><?= h($shop->name) ?></td>
                <td><?= $shop->has('national') ? $this->Html->link($shop->national->name, ['controller' => 'Nationals', 'action' => 'view', $shop->national->id]) : '' ?></td>
                <td><?= $shop->has('state') ? $this->Html->link($shop->state->name, ['controller' => 'States', 'action' => 'view', $shop->state->id]) : '' ?></td>
                <td><?= $shop->has('district') ? $this->Html->link($shop->district->name, ['controller' => 'Districts', 'action' => 'view', $shop->district->id]) : '' ?></td>
                <!--<td><?= h($shop->address) ?></td>
                <td><?= $this->Number->format($shop->phone) ?></td>
                <td><?= $this->Number->format($shop->phonehome) ?></td>
                <td><?= $this->Number->format($shop->contactperson) ?></td>-->
                <td><?= $this->Html->link($shop->img, $this->Upload->url($shop, 'img'));?></td>
                <td><?= $shop->has('type_shop') ? $this->Html->link($shop->type_shop->name, ['controller' => 'TypeShops', 'action' => 'view', $shop->type_shop->id]) : '' ?></td>
                <td><?= h($shop->deleted) ?></td>
                <td><?= $this->Number->format($shop->publish) ?></td>
                <td><?= $this->Number->format($shop->accessed) ?></td>
                <td><?= $this->Number->format($shop->reject) ?></td>
                <td><?= $this->Number->format($shop->count_request) ?></td>
                <td><?= h($shop->requested) ?></td>
                <td><?= h(date('d-m-Y H:i', strtotime($shop->created))) ?></td>
                <td><?= h($shop->updated) ?></td>
                <td><?= h($shop->deleted_date) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $shop->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $shop->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $shop->id], ['confirm' => __('Are you sure you want to delete # {0}?', $shop->id)]) ?>
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
