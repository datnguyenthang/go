<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Money Entity
 *
 * @property int $id
 * @property int $shop_id
 * @property string $shop_name
 * @property \Cake\I18n\Time $update_date
 * @property string $detail
 *
 * @property \App\Model\Entity\Shop $shop
 */
class Money extends Entity
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
