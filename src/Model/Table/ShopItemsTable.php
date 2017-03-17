<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ShopItems Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Shops
 *
 * @method \App\Model\Entity\ShopItem get($primaryKey, $options = [])
 * @method \App\Model\Entity\ShopItem newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\ShopItem[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\ShopItem|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ShopItem patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\ShopItem[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\ShopItem findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ShopItemsTable extends Table
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
        

        $this->table('shop_items');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Shops', [
            'foreignKey' => 'shop_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('TradeTypes', [
            'foreignKey' => 'trade_type_id',
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
            ->allowEmpty('tradetype');

        $validator
            ->allowEmpty('brandname');

        $validator
            ->allowEmpty('productname');

        $validator
            ->allowEmpty('img');
        
        $validator
            ->allowEmpty('photoid');

        $validator
            ->integer('pricefrom')
            ->allowEmpty('pricefrom');

        $validator
            ->integer('priceto')
            ->allowEmpty('priceto');

        $validator
            ->integer('deleted')
            ->allowEmpty('deleted_date');

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
        $rules->add($rules->existsIn(['shop_id'], 'Shops'));
        $rules->add($rules->existsIn(['trade_type_id'], 'TradeTypes'));

        return $rules;
    }
}
