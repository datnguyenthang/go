<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="accounts index large-9 medium-8 columns content">
    <h3><?= __('Accounts') ?></h3>
    <table class="table" cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('password') ?></th>
                <th scope="col"><?= $this->Paginator->sort('mail') ?></th>
                <th scope="col"><?= $this->Paginator->sort('facebook') ?></th>
                <th scope="col"><?= $this->Paginator->sort('google') ?></th>
                <th scope="col"><?= $this->Paginator->sort('twitter') ?></th>
                <th scope="col"><?= $this->Paginator->sort('hashcode') ?></th>
                <th scope="col"><?= $this->Paginator->sort('actived') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('updated') ?></th>
                <th scope="col"><?= $this->Paginator->sort('deleted') ?></th>
                <th scope="col"><?= $this->Paginator->sort('deleted_date') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($accounts as $account): ?>
            <tr>
                <td><?= $this->Number->format($account->id) ?></td>
                <td><?= h($account->password) ?></td>
                <td><?= h($account->mail) ?></td>
                <td><?= h($account->facebook) ?></td>
                <td><?= h($account->google) ?></td>
                <td><?= h($account->twitter) ?></td>
                <td><?= h($account->hashcode) ?></td>
                <td><?= h($account->actived) ?></td>
                <td><?= h($account->created) ?></td>
                <td><?= h($account->updated) ?></td>
                <td><?= h($account->deleted) ?></td>
                <td><?= h($account->deleted_date) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $account->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $account->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $account->id], ['confirm' => __('Are you sure you want to delete # {0}?', $account->id)]) ?>
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
