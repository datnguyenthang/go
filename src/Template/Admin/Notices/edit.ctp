<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="notices form large-9 medium-8 columns content">
    <?= $this->Form->create($notice) ?>
    <fieldset>
        <legend><?= __('Edit Notice') ?></legend>
        <?php
            echo $this->Form->input('title');
            echo $this->Form->input('content');
            echo $this->Form->input('notice_status');
            echo $this->Form->input('deleted');
            echo $this->Form->input('deleted_date', ['empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
