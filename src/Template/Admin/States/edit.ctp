<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="states form large-9 medium-8 columns content">
    <?= $this->Form->create($state) ?>
    <fieldset>
        <legend><?= __('Edit State') ?></legend>
        <?php
            echo $this->Form->input('national_id', ['options' => $nationals, 'empty' => true]);
            echo $this->Form->input('name');
            echo $this->Form->input('slug');
            echo $this->Form->input('rate');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
