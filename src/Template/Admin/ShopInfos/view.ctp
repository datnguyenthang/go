<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="shopInfos view large-9 medium-8 columns content">
    <h3><?= h($shopInfo->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Full Name') ?></th>
            <td><?= h($shopInfo->full_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Dealer') ?></th>
            <td><?= h($shopInfo->dealer) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Address') ?></th>
            <td><?= h($shopInfo->address) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Phone Number') ?></th>
            <td><?= h($shopInfo->phone_number) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fax') ?></th>
            <td><?= h($shopInfo->fax) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Zip Code') ?></th>
            <td><?= h($shopInfo->zip_code) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Shop') ?></th>
            <td><?= $shopInfo->has('shop') ? $this->Html->link($shopInfo->shop->name, ['controller' => 'Shops', 'action' => 'view', $shopInfo->shop->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($shopInfo->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Prefecture') ?></th>
            <td><?= $this->Number->format($shopInfo->prefecture) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($shopInfo->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Updated') ?></th>
            <td><?= h($shopInfo->updated) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Contact Name') ?></h4>
        <?= $this->Text->autoParagraph(h($shopInfo->contact_name)); ?>
    </div>
    <div class="row">
        <h4><?= __('Purchase Price') ?></h4>
        <?= $this->Text->autoParagraph(h($shopInfo->purchase_price)); ?>
    </div>
    <div class="row">
        <h4><?= __('Exchange') ?></h4>
        <?= $this->Text->autoParagraph(h($shopInfo->exchange)); ?>
    </div>
    <div class="row">
        <h4><?= __('Returns Product') ?></h4>
        <?= $this->Text->autoParagraph(h($shopInfo->returns_product)); ?>
    </div>
    <div class="row">
        <h4><?= __('Delivery Time') ?></h4>
        <?= $this->Text->autoParagraph(h($shopInfo->delivery_time)); ?>
    </div>
    <div class="row">
        <h4><?= __('Privacy Policy') ?></h4>
        <?= $this->Text->autoParagraph(h($shopInfo->privacy_policy)); ?>
    </div>
    <div class="row">
        <h4><?= __('License') ?></h4>
        <?= $this->Text->autoParagraph(h($shopInfo->license)); ?>
    </div>
    <div class="row">
        <h4><?= __('Date For Payment') ?></h4>
        <?= $this->Text->autoParagraph(h($shopInfo->date_for_payment)); ?>
    </div>
</div>
