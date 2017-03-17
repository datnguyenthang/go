<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="orderDetails form large-9 medium-8 columns content">
    <?= $this->Form->create($orderDetail) ?>
    <fieldset>
        <legend><?= __('Edit Order Detail') ?></legend>
        <?php
            echo $this->Form->input('order_id', ['options' => $orders]);
            echo $this->Form->input('shop_id', ['options' => $shops]);
            echo $this->Form->input('product_id', ['options' => $products]);
            echo $this->Form->input('type_id');
            echo $this->Form->input('type');
            echo $this->Form->input('quantity');
            echo $this->Form->input('price');
            echo $this->Form->input('subtotal');
            echo $this->Form->input('postage');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
