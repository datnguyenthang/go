<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="monies form large-9 medium-8 columns content">
    <?= $this->Form->create($money) ?>
    <fieldset>
        <legend><?= __('Edit Money') ?></legend>
        <?php
            echo $this->Form->input('shop_id', ['options' => $shops, 'empty' => true]);
            echo $this->Form->input('shop_name');
            echo $this->Form->input('update_date', ['empty' => true]);
            echo $this->Form->input('detail');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
