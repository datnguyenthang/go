<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="accounts form large-9 medium-8 columns content">
    <?= $this->Form->create($account) ?>
    <fieldset>
        <legend><?= __('Edit Account') ?></legend>
        <?php
            echo $this->Form->input('password');
            echo $this->Form->input('mail');
            echo $this->Form->input('facebook');
            echo $this->Form->input('google');
            echo $this->Form->input('twitter');
            echo $this->Form->input('hashcode');
            echo $this->Form->input('actived');
            echo $this->Form->input('deleted');
            echo $this->Form->input('deleted_date', ['empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
