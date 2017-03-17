<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="monies view large-9 medium-8 columns content">
    <h3><?= h($money->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Shop') ?></th>
            <td><?= $money->has('shop') ? $this->Html->link($money->shop->name, ['controller' => 'Shops', 'action' => 'view', $money->shop->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Shop Name') ?></th>
            <td><?= h($money->shop_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($money->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Update Date') ?></th>
            <td><?= h($money->update_date) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Detail') ?></h4>
        <?= $this->Text->autoParagraph(h($money->detail)); ?>
    </div>
</div>
