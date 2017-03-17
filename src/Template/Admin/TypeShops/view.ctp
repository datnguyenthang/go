<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="typeShops view large-9 medium-8 columns content">
    <h3><?= h($typeShop->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Type') ?></th>
            <td><?= h($typeShop->type) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($typeShop->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($typeShop->id) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Shops') ?></h4>
        <?php if (!empty($typeShop->shops)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Code') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('Description') ?></th>
                <th scope="col"><?= __('National Id') ?></th>
                <th scope="col"><?= __('State Id') ?></th>
                <th scope="col"><?= __('District Id') ?></th>
                <th scope="col"><?= __('Address') ?></th>
                <th scope="col"><?= __('Phone') ?></th>
                <th scope="col"><?= __('Phonehome') ?></th>
                <th scope="col"><?= __('Contactperson') ?></th>
                <th scope="col"><?= __('Img') ?></th>
                <th scope="col"><?= __('Type Shop Id') ?></th>
                <th scope="col"><?= __('Deleted') ?></th>
                <th scope="col"><?= __('Publish') ?></th>
                <th scope="col"><?= __('Accessed') ?></th>
                <th scope="col"><?= __('Reject') ?></th>
                <th scope="col"><?= __('Count Request') ?></th>
                <th scope="col"><?= __('Requested') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Updated') ?></th>
                <th scope="col"><?= __('Deleted Date') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($typeShop->shops as $shops): ?>
            <tr>
                <td><?= h($shops->id) ?></td>
                <td><?= h($shops->code) ?></td>
                <td><?= h($shops->name) ?></td>
                <td><?= h($shops->description) ?></td>
                <td><?= h($shops->national_id) ?></td>
                <td><?= h($shops->state_id) ?></td>
                <td><?= h($shops->district_id) ?></td>
                <td><?= h($shops->address) ?></td>
                <td><?= h($shops->phone) ?></td>
                <td><?= h($shops->phonehome) ?></td>
                <td><?= h($shops->contactperson) ?></td>
                <td><?= h($shops->img) ?></td>
                <td><?= h($shops->type_shop_id) ?></td>
                <td><?= h($shops->deleted) ?></td>
                <td><?= h($shops->publish) ?></td>
                <td><?= h($shops->accessed) ?></td>
                <td><?= h($shops->reject) ?></td>
                <td><?= h($shops->count_request) ?></td>
                <td><?= h($shops->requested) ?></td>
                <td><?= h($shops->created) ?></td>
                <td><?= h($shops->updated) ?></td>
                <td><?= h($shops->deleted_date) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Shops', 'action' => 'view', $shops->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Shops', 'action' => 'edit', $shops->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Shops', 'action' => 'delete', $shops->id], ['confirm' => __('Are you sure you want to delete # {0}?', $shops->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
