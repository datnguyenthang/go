<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="shopInfos form large-9 medium-8 columns content">
    <?= $this->Form->create($shopInfo) ?>
    <fieldset>
        <legend><?= __('Edit Shop Info') ?></legend>
        <?php
            echo $this->Form->input('full_name');
            echo $this->Form->input('dealer');
            echo $this->Form->input('address');
            echo $this->Form->input('phone_number');
            echo $this->Form->input('fax');
            echo $this->Form->input('zip_code');
            echo $this->Form->input('prefecture');
            echo $this->Form->input('contact_name');
            echo $this->Form->input('purchase_price');
            echo $this->Form->input('exchange');
            echo $this->Form->input('returns_product');
            echo $this->Form->input('delivery_time');
            echo $this->Form->input('privacy_policy');
            echo $this->Form->input('license');
            echo $this->Form->input('date_for_payment');
            echo $this->Form->input('shop_id', ['options' => $shops]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
