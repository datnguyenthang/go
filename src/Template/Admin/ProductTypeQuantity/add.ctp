<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="productTypeQuantity form large-9 medium-8 columns content">
    <?= $this->Form->create($productTypeQuantity) ?>
    <fieldset>
        <legend><?= __('Add Product Type Quantity') ?></legend>
        <?php
            echo $this->Form->input('product_id', ['options' => $products, 'empty' => true]);
            echo $this->Form->input('type');
            echo $this->Form->input('quantity');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
