<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ShopInfos Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Shops
 *
 * @method \App\Model\Entity\ShopInfo get($primaryKey, $options = [])
 * @method \App\Model\Entity\ShopInfo newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\ShopInfo[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\ShopInfo|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ShopInfo patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\ShopInfo[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\ShopInfo findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ShopInfosTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->table('shop_infos');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Shops', [
            'foreignKey' => 'shop_id',
            'joinType' => 'INNER'
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->requirePresence('full_name', 'create')
            ->notEmpty('full_name');

        $validator
            ->requirePresence('dealer', 'create')
            ->notEmpty('dealer');

        $validator
            ->requirePresence('address', 'create')
            ->notEmpty('address');

        $validator
            ->requirePresence('phone_number', 'create')
            ->notEmpty('phone_number');

        $validator
            ->requirePresence('fax', 'create')
            ->notEmpty('fax');

        $validator
            ->requirePresence('zip_code', 'create')
            ->notEmpty('zip_code');

        $validator
            ->integer('prefecture')
            ->requirePresence('prefecture', 'create')
            ->notEmpty('prefecture');

        $validator
            ->requirePresence('contact_name', 'create')
            ->notEmpty('contact_name');

        $validator
            ->requirePresence('purchase_price', 'create')
            ->notEmpty('purchase_price');

        $validator
            ->requirePresence('exchange', 'create')
            ->notEmpty('exchange');

        $validator
            ->requirePresence('returns_product', 'create')
            ->notEmpty('returns_product');

        $validator
            ->requirePresence('delivery_time', 'create')
            ->notEmpty('delivery_time');

        $validator
            ->requirePresence('privacy_policy', 'create')
            ->notEmpty('privacy_policy');

        $validator
            ->requirePresence('license', 'create')
            ->notEmpty('license');

        $validator
            ->requirePresence('date_for_payment', 'create')
            ->notEmpty('date_for_payment');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['shop_id'], 'Shops'));

        return $rules;
    }
}
