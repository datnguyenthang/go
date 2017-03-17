<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Product Entity
 *
 * @property int $id
 * @property int $shop_id
 * @property string $name
 * @property string $description
 * @property string $main_img
 * @property int $price
 * @property int $publish
 * @property string $category_id
 * @property int $stock
 * @property int $order
 * @property bool $deleted
 * @property \Cake\I18n\Time $created
 * @property \Cake\I18n\Time $updated
 * @property \Cake\I18n\Time $deleted_date
 *
 * @property \App\Model\Entity\Shop $shop
 * @property \App\Model\Entity\Category $category
 * @property \App\Model\Entity\OrderDetail[] $order_details
 * @property \App\Model\Entity\Picture[] $pictures
 * @property \App\Model\Entity\ProductTypeQuantity[] $product_type_quantity
 * @property \App\Model\Entity\WishList[] $wish_lists
 */
class Product extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        '*' => true,
        'id' => false
    ];
}
