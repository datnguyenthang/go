<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="districts form large-9 medium-8 columns content">
    <?= $this->Form->create($district) ?>
    <fieldset>
        <legend><?= __('Add District') ?></legend>
        <?php
            echo $this->Form->input('state_id', ['options' => $states, 'empty' => true]);
            echo $this->Form->input('name');
            echo $this->Form->input('slug');
            echo $this->Form->input('rate');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
