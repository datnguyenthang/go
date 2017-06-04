<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Shops Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Nationals
 * @property \Cake\ORM\Association\BelongsTo $States
 * @property \Cake\ORM\Association\BelongsTo $Districts
 * @property \Cake\ORM\Association\BelongsTo $TypeShops
 * @property \Cake\ORM\Association\HasMany $Monies
 * @property \Cake\ORM\Association\HasMany $OrderDetails
 * @property \Cake\ORM\Association\HasMany $Pictures
 * @property \Cake\ORM\Association\HasMany $Products
 * @property \Cake\ORM\Association\HasMany $ShopCountViews
 * @property \Cake\ORM\Association\HasMany $ShopInfos
 * @property \Cake\ORM\Association\HasMany $ShopItems
 *
 * @method \App\Model\Entity\Shop get($primaryKey, $options = [])
 * @method \App\Model\Entity\Shop newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Shop[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Shop|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Shop patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Shop[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Shop findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ShopsTable extends Table
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
        $this->addBehavior('Dala00/Upload.Upload', [
			'fields' => [
				'img' => [
					'path' => 'webroot{DS}img{DS}upload{DS}{model}{DS}{primaryKey}{DS}'
				],
			],
		]);
        
        $this->table('shops');
        $this->displayField('name');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Nationals', [
            'foreignKey' => 'national_id'
        ]);
        $this->belongsTo('States', [
            'foreignKey' => 'state_id'
        ]);
        $this->belongsTo('Districts', [
            'foreignKey' => 'district_id'
        ]);
        $this->belongsTo('TypeShops', [
            'foreignKey' => 'type_shop_id'
        ]);
        $this->hasMany('Monies', [
            'foreignKey' => 'shop_id'
        ]);
        $this->hasMany('OrderDetails', [
            'foreignKey' => 'shop_id'
        ]);
        $this->hasMany('Pictures', [
            'foreignKey' => 'shop_id'
        ]);
        $this->hasMany('Products', [
            'foreignKey' => 'shop_id'
        ]);
        $this->hasMany('ShopCountViews', [
            'foreignKey' => 'shop_id'
        ]);
        $this->hasMany('ShopInfos', [
            'foreignKey' => 'shop_id'
        ]);
        $this->hasMany('ShopItems', [
            'foreignKey' => 'shop_id'
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
            ->notEmpty('code')
            ->allowEmpty('code');

        $validator
            ->notEmpty('name')
            ->allowEmpty('name');

        $validator
            ->allowEmpty('description');

        $validator
            ->requirePresence('address', 'create')
            ->notEmpty('address');

        $validator
            ->allowEmpty('phone');

        $validator
            ->allowEmpty('phonehome');

        $validator
            ->allowEmpty('contactperson');

        $validator
            ->allowEmpty('img');

        $validator
            ->boolean('deleted')
            ->allowEmpty('deleted');

        $validator
            ->integer('publish')
            ->allowEmpty('publish');

        $validator
            ->integer('accessed')
            ->allowEmpty('accessed');

        $validator
            ->integer('reject')
            ->allowEmpty('reject');

        $validator
            ->integer('count_request')
            ->allowEmpty('count_request');

        $validator
            ->boolean('requested')
            ->allowEmpty('requested');

        $validator
            ->dateTime('deleted_date')
            ->allowEmpty('deleted_date');

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
        $rules->add($rules->existsIn(['national_id'], 'Nationals'));
        $rules->add($rules->existsIn(['state_id'], 'States'));
        $rules->add($rules->existsIn(['district_id'], 'Districts'));
        $rules->add($rules->existsIn(['type_shop_id'], 'TypeShops'));
        $rules->add($rules->isUnique(['code']));
        return $rules;
    }
}
