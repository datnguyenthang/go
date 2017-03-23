<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="shops form large-9 medium-8 columns content">
    <?= $this->Form->create($shop, ['type' => 'file']) ?>
    <fieldset>
        <legend><?= __('Edit Shop') ?></legend>
        <?php
            echo $this->Form->input('code');
            echo $this->Form->input('name');
            echo $this->Form->input('description');
            echo $this->Form->input('national_id', ['options' => $nationals, 'empty' => true]);
            echo $this->Form->input('state_id', ['options' => $states, 'empty' => true]);
            echo $this->Form->input('district_id', ['options' => $districts, 'empty' => true]);
            echo $this->Form->input('address');
            echo $this->Form->input('phone');
            echo $this->Form->input('phonehome');
            echo $this->Form->input('contactperson');
            echo $this->Form->input('img', ['type' => 'file', 'empty' => true]);
            echo $this->Form->input('img_path', ['type' => 'hidden', 'value' => $this->Upload->url($shop, 'img')]);
            if ($shop->img) echo $this->Upload->image($shop, 'img');
            echo $this->Form->input('type_shop_id', ['options' => $typeShops, 'empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
