<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="orders form large-9 medium-8 columns content">
    <?= $this->Form->create($order) ?>
    <fieldset>
        <legend><?= __('Edit Order') ?></legend>
        <?php
            echo $this->Form->input('account_id', ['options' => $accounts]);
            echo $this->Form->input('total');
            echo $this->Form->input('order_status');
            echo $this->Form->input('payment_status');
            echo $this->Form->input('payment_method');
            echo $this->Form->input('paypal_capture');
            echo $this->Form->input('postage');
            echo $this->Form->input('delivery_cash');
            echo $this->Form->input('deleted');
            echo $this->Form->input('deleted_date', ['empty' => true]);
            echo $this->Form->input('confirm_date');
            echo $this->Form->input('delivery_date');
            echo $this->Form->input('transfer_date');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
