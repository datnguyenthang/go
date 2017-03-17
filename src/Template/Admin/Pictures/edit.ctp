<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="pictures form large-9 medium-8 columns content">
    <?= $this->Form->create($picture) ?>
    <fieldset>
        <legend><?= __('Edit Picture') ?></legend>
        <?php
            echo $this->Form->input('product_id', ['options' => $products, 'empty' => true]);
            echo $this->Form->input('shop_id', ['options' => $shops, 'empty' => true]);
            echo $this->Form->input('picture_name');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
