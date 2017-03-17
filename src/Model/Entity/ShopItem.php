<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * ShopItem Entity
 *
 * @property int $id
 * @property int $shop_id
 * @property string $tradetype
 * @property string $brandname
 * @property string $productname
 * @property string $img
 * @property int $pricefrom
 * @property int $priceto
 * @property int $deleted
 * @property \Cake\I18n\Time $created
 * @property \Cake\I18n\Time $updated
 * @property \Cake\I18n\Time $deleted_date
 *
 * @property \App\Model\Entity\Shop $shop
 */
class ShopItem extends Entity
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
