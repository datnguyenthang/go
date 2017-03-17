<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="nationals form large-9 medium-8 columns content">
    <?= $this->Form->create($national) ?>
    <fieldset>
        <legend><?= __('Add National') ?></legend>
        <?php
            echo $this->Form->input('name');
            echo $this->Form->input('slug');
            echo $this->Form->input('rate');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
