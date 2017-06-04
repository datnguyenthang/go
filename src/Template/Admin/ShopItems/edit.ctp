<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="shopItems form large-9 medium-8 columns content">
    <?= $this->Form->create($shopItem, ['type' => 'file']) ?>
    <fieldset>
        <legend><?= __('Edit Shop Item') ?></legend>
        <?php
            echo $this->Form->input('shop_id', ['options' => $shops]);
            echo $this->Form->input('trade_type_id', ['options' => $tradetypes]);
            echo $this->Form->input('brandname');
            echo $this->Form->input('productname');
            echo $this->Form->input('img', ['type' => 'file']);
            echo $this->Form->input('img_path', ['type' => 'hidden', 'value' => $this->Upload->url($shopItem, 'img')]);
            if ($shopItem->img) echo $this->Upload->image($shopItem, 'img');
            echo $this->Form->input('pricefrom');
            echo $this->Form->input('priceto');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
