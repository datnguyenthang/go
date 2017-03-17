<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * ShopInfo Entity
 *
 * @property int $id
 * @property string $full_name
 * @property string $dealer
 * @property string $address
 * @property string $phone_number
 * @property string $fax
 * @property string $zip_code
 * @property int $prefecture
 * @property string $contact_name
 * @property string $purchase_price
 * @property string $exchange
 * @property string $returns_product
 * @property string $delivery_time
 * @property string $privacy_policy
 * @property string $license
 * @property string $date_for_payment
 * @property int $shop_id
 * @property \Cake\I18n\Time $created
 * @property \Cake\I18n\Time $updated
 *
 * @property \App\Model\Entity\Shop $shop
 */
class ShopInfo extends Entity
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
