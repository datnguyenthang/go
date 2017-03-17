<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <a href="#menu-toggle" class="btn btn-default" id="menu-toggle">Toggle Menu</a>
    <?= $this->Html->link(__('New Shop'), ['action' => 'add'], [ 'class' => 'btn btn-default']) ?>
</nav>
<div class="wishLists view large-9 medium-8 columns content">
    <h3><?= h($wishList->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Product') ?></th>
            <td><?= $wishList->has('product') ? $this->Html->link($wishList->product->name, ['controller' => 'Products', 'action' => 'view', $wishList->product->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Account') ?></th>
            <td><?= $wishList->has('account') ? $this->Html->link($wishList->account->id, ['controller' => 'Accounts', 'action' => 'view', $wishList->account->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($wishList->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($wishList->created) ?></td>
        </tr>
    </table>
</div>
