<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="typeShops form large-9 medium-8 columns content">
    <?= $this->Form->create($typeShop) ?>
    <fieldset>
        <legend><?= __('Edit Type Shop') ?></legend>
        <?php
            echo $this->Form->input('type');
            echo $this->Form->input('name');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
