<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="products view large-9 medium-8 columns content">
    <h3><?= h($product->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Shop') ?></th>
            <td><?= $product->has('shop') ? $this->Html->link($product->shop->name, ['controller' => 'Shops', 'action' => 'view', $product->shop->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($product->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Main Img') ?></th>
            <td><?= h($product->main_img) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Category Id') ?></th>
            <td><?= h($product->category_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($product->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Price') ?></th>
            <td><?= $this->Number->format($product->price) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Publish') ?></th>
            <td><?= $this->Number->format($product->publish) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Stock') ?></th>
            <td><?= $this->Number->format($product->stock) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Order') ?></th>
            <td><?= $this->Number->format($product->order) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($product->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Updated') ?></th>
            <td><?= h($product->updated) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Deleted Date') ?></th>
            <td><?= h($product->deleted_date) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Deleted') ?></th>
            <td><?= $product->deleted ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Description') ?></h4>
        <?= $this->Text->autoParagraph(h($product->description)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Order Details') ?></h4>
        <?php if (!empty($product->order_details)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Order Id') ?></th>
                <th scope="col"><?= __('Shop Id') ?></th>
                <th scope="col"><?= __('Product Id') ?></th>
                <th scope="col"><?= __('Type Id') ?></th>
                <th scope="col"><?= __('Type') ?></th>
                <th scope="col"><?= __('Quantity') ?></th>
                <th scope="col"><?= __('Price') ?></th>
                <th scope="col"><?= __('Subtotal') ?></th>
                <th scope="col"><?= __('Postage') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($product->order_details as $orderDetails): ?>
            <tr>
                <td><?= h($orderDetails->id) ?></td>
                <td><?= h($orderDetails->order_id) ?></td>
                <td><?= h($orderDetails->shop_id) ?></td>
                <td><?= h($orderDetails->product_id) ?></td>
                <td><?= h($orderDetails->type_id) ?></td>
                <td><?= h($orderDetails->type) ?></td>
                <td><?= h($orderDetails->quantity) ?></td>
                <td><?= h($orderDetails->price) ?></td>
                <td><?= h($orderDetails->subtotal) ?></td>
                <td><?= h($orderDetails->postage) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'OrderDetails', 'action' => 'view', $orderDetails->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'OrderDetails', 'action' => 'edit', $orderDetails->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'OrderDetails', 'action' => 'delete', $orderDetails->id], ['confirm' => __('Are you sure you want to delete # {0}?', $orderDetails->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Pictures') ?></h4>
        <?php if (!empty($product->pictures)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Product Id') ?></th>
                <th scope="col"><?= __('Shop Id') ?></th>
                <th scope="col"><?= __('Picture Name') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($product->pictures as $pictures): ?>
            <tr>
                <td><?= h($pictures->id) ?></td>
                <td><?= h($pictures->product_id) ?></td>
                <td><?= h($pictures->shop_id) ?></td>
                <td><?= h($pictures->picture_name) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Pictures', 'action' => 'view', $pictures->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Pictures', 'action' => 'edit', $pictures->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Pictures', 'action' => 'delete', $pictures->id], ['confirm' => __('Are you sure you want to delete # {0}?', $pictures->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Product Type Quantity') ?></h4>
        <?php if (!empty($product->product_type_quantity)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Product Id') ?></th>
                <th scope="col"><?= __('Type') ?></th>
                <th scope="col"><?= __('Quantity') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($product->product_type_quantity as $productTypeQuantity): ?>
            <tr>
                <td><?= h($productTypeQuantity->id) ?></td>
                <td><?= h($productTypeQuantity->product_id) ?></td>
                <td><?= h($productTypeQuantity->type) ?></td>
                <td><?= h($productTypeQuantity->quantity) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'ProductTypeQuantity', 'action' => 'view', $productTypeQuantity->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'ProductTypeQuantity', 'action' => 'edit', $productTypeQuantity->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'ProductTypeQuantity', 'action' => 'delete', $productTypeQuantity->id], ['confirm' => __('Are you sure you want to delete # {0}?', $productTypeQuantity->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Wish Lists') ?></h4>
        <?php if (!empty($product->wish_lists)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Product Id') ?></th>
                <th scope="col"><?= __('Account Id') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($product->wish_lists as $wishLists): ?>
            <tr>
                <td><?= h($wishLists->id) ?></td>
                <td><?= h($wishLists->product_id) ?></td>
                <td><?= h($wishLists->account_id) ?></td>
                <td><?= h($wishLists->created) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'WishLists', 'action' => 'view', $wishLists->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'WishLists', 'action' => 'edit', $wishLists->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'WishLists', 'action' => 'delete', $wishLists->id], ['confirm' => __('Are you sure you want to delete # {0}?', $wishLists->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
