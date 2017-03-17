<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Monies Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Shops
 *
 * @method \App\Model\Entity\Money get($primaryKey, $options = [])
 * @method \App\Model\Entity\Money newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Money[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Money|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Money patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Money[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Money findOrCreate($search, callable $callback = null, $options = [])
 */
class MoniesTable extends Table
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

        $this->table('monies');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->belongsTo('Shops', [
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
            ->allowEmpty('shop_name');

        $validator
            ->dateTime('update_date')
            ->allowEmpty('update_date');

        $validator
            ->allowEmpty('detail');

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
