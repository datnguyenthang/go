<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Shop Entity
 *
 * @property int $id
 * @property string $code
 * @property string $name
 * @property string $description
 * @property int $national_id
 * @property int $state_id
 * @property int $district_id
 * @property string $address
 * @property int $phone
 * @property int $phonehome
 * @property int $contactperson
 * @property \Cake\I18n\Time $img
 * @property string $type_shop_id
 * @property bool $deleted
 * @property int $publish
 * @property int $accessed
 * @property int $reject
 * @property int $count_request
 * @property bool $requested
 * @property \Cake\I18n\Time $created
 * @property \Cake\I18n\Time $updated
 * @property \Cake\I18n\Time $deleted_date
 *
 * @property \App\Model\Entity\National $national
 * @property \App\Model\Entity\State $state
 * @property \App\Model\Entity\District $district
 * @property \App\Model\Entity\TypeShop $type_shop
 * @property \App\Model\Entity\Money[] $monies
 * @property \App\Model\Entity\OrderDetail[] $order_details
 * @property \App\Model\Entity\Picture[] $pictures
 * @property \App\Model\Entity\Product[] $products
 * @property \App\Model\Entity\ShopCountView[] $shop_count_views
 * @property \App\Model\Entity\ShopInfo[] $shop_infos
 * @property \App\Model\Entity\ShopItem[] $shop_items
 */
class Shop extends Entity
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
