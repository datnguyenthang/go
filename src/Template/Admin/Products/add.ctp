<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="products form large-9 medium-8 columns content">
    <?= $this->Form->create($product) ?>
    <fieldset>
        <legend><?= __('Add Product') ?></legend>
        <?php
            echo $this->Form->input('shop_id', ['options' => $shops]);
            echo $this->Form->input('name');
            echo $this->Form->input('description');
            echo $this->Form->input('main_img');
            echo $this->Form->input('price');
            echo $this->Form->input('publish');
            echo $this->Form->input('category_id');
            echo $this->Form->input('stock');
            echo $this->Form->input('order');
            echo $this->Form->input('deleted');
            echo $this->Form->input('deleted_date', ['empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
