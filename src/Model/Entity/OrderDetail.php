<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * OrderDetail Entity
 *
 * @property int $id
 * @property int $order_id
 * @property int $shop_id
 * @property int $product_id
 * @property int $type_id
 * @property int $quantity
 * @property float $price
 * @property float $subtotal
 * @property float $postage
 *
 * @property \App\Model\Entity\Type $type
 * @property \App\Model\Entity\Order $order
 * @property \App\Model\Entity\Shop $shop
 * @property \App\Model\Entity\Product $product
 */
class OrderDetail extends Entity
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
