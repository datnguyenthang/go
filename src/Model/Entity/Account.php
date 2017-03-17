<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Account Entity
 *
 * @property int $id
 * @property string $password
 * @property string $mail
 * @property string $facebook
 * @property string $google
 * @property string $twitter
 * @property string $hashcode
 * @property bool $actived
 * @property \Cake\I18n\Time $created
 * @property \Cake\I18n\Time $updated
 * @property bool $deleted
 * @property \Cake\I18n\Time $deleted_date
 *
 * @property \App\Model\Entity\Order[] $orders
 * @property \App\Model\Entity\WishList[] $wish_lists
 */
class Account extends Entity
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

    /**
     * Fields that are excluded from JSON versions of the entity.
     *
     * @var array
     */
    protected $_hidden = [
        'password'
    ];
}
