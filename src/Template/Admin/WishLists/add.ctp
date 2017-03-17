<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <a href="#menu-toggle" class="btn btn-default" id="menu-toggle">Toggle Menu</a>
    <?= $this->Html->link(__('New Shop'), ['action' => 'add'], [ 'class' => 'btn btn-default']) ?>
</nav>
<div class="wishLists form large-9 medium-8 columns content">
    <?= $this->Form->create($wishList) ?>
    <fieldset>
        <legend><?= __('Add Wish List') ?></legend>
        <?php
            echo $this->Form->input('product_id', ['options' => $products]);
            echo $this->Form->input('account_id', ['options' => $accounts]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
