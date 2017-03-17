<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Nationals Model
 *
 * @property \Cake\ORM\Association\HasMany $Shops
 * @property \Cake\ORM\Association\HasMany $States
 *
 * @method \App\Model\Entity\National get($primaryKey, $options = [])
 * @method \App\Model\Entity\National newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\National[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\National|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\National patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\National[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\National findOrCreate($search, callable $callback = null, $options = [])
 */
class NationalsTable extends Table
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

        $this->table('nationals');
        $this->displayField('name');
        $this->primaryKey('id');

        $this->hasMany('Shops', [
            'foreignKey' => 'national_id'
        ]);
        $this->hasMany('States', [
            'foreignKey' => 'national_id'
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
            ->requirePresence('name', 'create')
            ->notEmpty('name');

        $validator
            ->requirePresence('slug', 'create')
            ->notEmpty('slug');

        $validator
            ->integer('rate')
            ->allowEmpty('rate');

        return $validator;
    }
}
