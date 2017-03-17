<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="shops view large-9 medium-8 columns content">
    <h3><?= h($shop->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Code') ?></th>
            <td><?= h($shop->code) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($shop->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('National') ?></th>
            <td><?= $shop->has('national') ? $this->Html->link($shop->national->name, ['controller' => 'Nationals', 'action' => 'view', $shop->national->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('State') ?></th>
            <td><?= $shop->has('state') ? $this->Html->link($shop->state->name, ['controller' => 'States', 'action' => 'view', $shop->state->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('District') ?></th>
            <td><?= $shop->has('district') ? $this->Html->link($shop->district->name, ['controller' => 'Districts', 'action' => 'view', $shop->district->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Address') ?></th>
            <td><?= h($shop->address) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Type Shop') ?></th>
            <td><?= $shop->has('type_shop') ? $this->Html->link($shop->type_shop->name, ['controller' => 'TypeShops', 'action' => 'view', $shop->type_shop->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($shop->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Phone') ?></th>
            <td><?= $this->Number->format($shop->phone) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Phonehome') ?></th>
            <td><?= $this->Number->format($shop->phonehome) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Contactperson') ?></th>
            <td><?= $this->Number->format($shop->contactperson) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Publish') ?></th>
            <td><?= $this->Number->format($shop->publish) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Accessed') ?></th>
            <td><?= $this->Number->format($shop->accessed) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Reject') ?></th>
            <td><?= $this->Number->format($shop->reject) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Count Request') ?></th>
            <td><?= $this->Number->format($shop->count_request) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Img') ?></th>
            <td><?= h($shop->img) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($shop->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Updated') ?></th>
            <td><?= h($shop->updated) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Deleted Date') ?></th>
            <td><?= h($shop->deleted_date) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Deleted') ?></th>
            <td><?= $shop->deleted ? __('Yes') : __('No'); ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Requested') ?></th>
            <td><?= $shop->requested ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Description') ?></h4>
        <?= $this->Text->autoParagraph(h($shop->description)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Monies') ?></h4>
        <?php if (!empty($shop->monies)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Shop Id') ?></th>
                <th scope="col"><?= __('Shop Name') ?></th>
                <th scope="col"><?= __('Update Date') ?></th>
                <th scope="col"><?= __('Detail') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($shop->monies as $monies): ?>
            <tr>
                <td><?= h($monies->id) ?></td>
                <td><?= h($monies->shop_id) ?></td>
                <td><?= h($monies->shop_name) ?></td>
                <td><?= h($monies->update_date) ?></td>
                <td><?= h($monies->detail) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Monies', 'action' => 'view', $monies->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Monies', 'action' => 'edit', $monies->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Monies', 'action' => 'delete', $monies->id], ['confirm' => __('Are you sure you want to delete # {0}?', $monies->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Order Details') ?></h4>
        <?php if (!empty($shop->order_details)): ?>
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
            <?php foreach ($shop->order_details as $orderDetails): ?>
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
        <?php if (!empty($shop->pictures)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Product Id') ?></th>
                <th scope="col"><?= __('Shop Id') ?></th>
                <th scope="col"><?= __('Picture Name') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($shop->pictures as $pictures): ?>
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
        <h4><?= __('Related Products') ?></h4>
        <?php if (!empty($shop->products)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Shop Id') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('Description') ?></th>
                <th scope="col"><?= __('Main Img') ?></th>
                <th scope="col"><?= __('Price') ?></th>
                <th scope="col"><?= __('Publish') ?></th>
                <th scope="col"><?= __('Category Id') ?></th>
                <th scope="col"><?= __('Stock') ?></th>
                <th scope="col"><?= __('Order') ?></th>
                <th scope="col"><?= __('Deleted') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Updated') ?></th>
                <th scope="col"><?= __('Deleted Date') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($shop->products as $products): ?>
            <tr>
                <td><?= h($products->id) ?></td>
                <td><?= h($products->shop_id) ?></td>
                <td><?= h($products->name) ?></td>
                <td><?= h($products->description) ?></td>
                <td><?= h($products->main_img) ?></td>
                <td><?= h($products->price) ?></td>
                <td><?= h($products->publish) ?></td>
                <td><?= h($products->category_id) ?></td>
                <td><?= h($products->stock) ?></td>
                <td><?= h($products->order) ?></td>
                <td><?= h($products->deleted) ?></td>
                <td><?= h($products->created) ?></td>
                <td><?= h($products->updated) ?></td>
                <td><?= h($products->deleted_date) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Products', 'action' => 'view', $products->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Products', 'action' => 'edit', $products->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Products', 'action' => 'delete', $products->id], ['confirm' => __('Are you sure you want to delete # {0}?', $products->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Shop Count Views') ?></h4>
        <?php if (!empty($shop->shop_count_views)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Shop Id') ?></th>
                <th scope="col"><?= __('Current Date') ?></th>
                <th scope="col"><?= __('Quantity') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($shop->shop_count_views as $shopCountViews): ?>
            <tr>
                <td><?= h($shopCountViews->id) ?></td>
                <td><?= h($shopCountViews->shop_id) ?></td>
                <td><?= h($shopCountViews->current_date) ?></td>
                <td><?= h($shopCountViews->quantity) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'ShopCountViews', 'action' => 'view', $shopCountViews->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'ShopCountViews', 'action' => 'edit', $shopCountViews->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'ShopCountViews', 'action' => 'delete', $shopCountViews->id], ['confirm' => __('Are you sure you want to delete # {0}?', $shopCountViews->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Shop Infos') ?></h4>
        <?php if (!empty($shop->shop_infos)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Full Name') ?></th>
                <th scope="col"><?= __('Dealer') ?></th>
                <th scope="col"><?= __('Address') ?></th>
                <th scope="col"><?= __('Phone Number') ?></th>
                <th scope="col"><?= __('Fax') ?></th>
                <th scope="col"><?= __('Zip Code') ?></th>
                <th scope="col"><?= __('Prefecture') ?></th>
                <th scope="col"><?= __('Contact Name') ?></th>
                <th scope="col"><?= __('Purchase Price') ?></th>
                <th scope="col"><?= __('Exchange') ?></th>
                <th scope="col"><?= __('Returns Product') ?></th>
                <th scope="col"><?= __('Delivery Time') ?></th>
                <th scope="col"><?= __('Privacy Policy') ?></th>
                <th scope="col"><?= __('License') ?></th>
                <th scope="col"><?= __('Date For Payment') ?></th>
                <th scope="col"><?= __('Shop Id') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Updated') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($shop->shop_infos as $shopInfos): ?>
            <tr>
                <td><?= h($shopInfos->id) ?></td>
                <td><?= h($shopInfos->full_name) ?></td>
                <td><?= h($shopInfos->dealer) ?></td>
                <td><?= h($shopInfos->address) ?></td>
                <td><?= h($shopInfos->phone_number) ?></td>
                <td><?= h($shopInfos->fax) ?></td>
                <td><?= h($shopInfos->zip_code) ?></td>
                <td><?= h($shopInfos->prefecture) ?></td>
                <td><?= h($shopInfos->contact_name) ?></td>
                <td><?= h($shopInfos->purchase_price) ?></td>
                <td><?= h($shopInfos->exchange) ?></td>
                <td><?= h($shopInfos->returns_product) ?></td>
                <td><?= h($shopInfos->delivery_time) ?></td>
                <td><?= h($shopInfos->privacy_policy) ?></td>
                <td><?= h($shopInfos->license) ?></td>
                <td><?= h($shopInfos->date_for_payment) ?></td>
                <td><?= h($shopInfos->shop_id) ?></td>
                <td><?= h($shopInfos->created) ?></td>
                <td><?= h($shopInfos->updated) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'ShopInfos', 'action' => 'view', $shopInfos->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'ShopInfos', 'action' => 'edit', $shopInfos->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'ShopInfos', 'action' => 'delete', $shopInfos->id], ['confirm' => __('Are you sure you want to delete # {0}?', $shopInfos->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Shop Items') ?></h4>
        <?php if (!empty($shop->shop_items)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Shop Id') ?></th>
                <th scope="col"><?= __('Tradetype') ?></th>
                <th scope="col"><?= __('Brandname') ?></th>
                <th scope="col"><?= __('Productname') ?></th>
                <th scope="col"><?= __('Img') ?></th>
                <th scope="col"><?= __('Pricefrom') ?></th>
                <th scope="col"><?= __('Priceto') ?></th>
                <th scope="col"><?= __('Deleted') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Updated') ?></th>
                <th scope="col"><?= __('Deleted Date') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($shop->shop_items as $shopItems): ?>
            <tr>
                <td><?= h($shopItems->id) ?></td>
                <td><?= h($shopItems->shop_id) ?></td>
                <td><?= h($shopItems->tradetype) ?></td>
                <td><?= h($shopItems->brandname) ?></td>
                <td><?= h($shopItems->productname) ?></td>
                <td><?= h($shopItems->img) ?></td>
                <td><?= h($shopItems->pricefrom) ?></td>
                <td><?= h($shopItems->priceto) ?></td>
                <td><?= h($shopItems->deleted) ?></td>
                <td><?= h($shopItems->created) ?></td>
                <td><?= h($shopItems->updated) ?></td>
                <td><?= h($shopItems->deleted_date) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'ShopItems', 'action' => 'view', $shopItems->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'ShopItems', 'action' => 'edit', $shopItems->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'ShopItems', 'action' => 'delete', $shopItems->id], ['confirm' => __('Are you sure you want to delete # {0}?', $shopItems->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
