<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="shopCountViews form large-9 medium-8 columns content">
    <?= $this->Form->create($shopCountView) ?>
    <fieldset>
        <legend><?= __('Edit Shop Count View') ?></legend>
        <?php
            echo $this->Form->input('shop_id', ['options' => $shops]);
            echo $this->Form->input('current_date');
            echo $this->Form->input('quantity');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
