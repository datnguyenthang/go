<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Order Entity
 *
 * @property int $id
 * @property int $account_id
 * @property float $total
 * @property int $order_status
 * @property int $payment_status
 * @property int $payment_method
 * @property string $paypal_capture
 * @property float $postage
 * @property float $delivery_cash
 * @property int $deleted
 * @property \Cake\I18n\Time $deleted_date
 * @property string $confirm_date
 * @property string $delivery_date
 * @property string $transfer_date
 * @property \Cake\I18n\Time $created
 * @property \Cake\I18n\Time $updated
 *
 * @property \App\Model\Entity\Account $account
 * @property \App\Model\Entity\OrderDetail[] $order_details
 */
class Order extends Entity
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
