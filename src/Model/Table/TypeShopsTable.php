<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * TypeShops Model
 *
 * @property \Cake\ORM\Association\HasMany $Shops
 *
 * @method \App\Model\Entity\TypeShop get($primaryKey, $options = [])
 * @method \App\Model\Entity\TypeShop newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\TypeShop[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\TypeShop|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\TypeShop patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\TypeShop[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\TypeShop findOrCreate($search, callable $callback = null, $options = [])
 */
class TypeShopsTable extends Table
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

        $this->table('type_shops');
        $this->displayField('name');
        $this->primaryKey('id');

        $this->hasMany('Shops', [
            'foreignKey' => 'type_shop_id'
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
            ->requirePresence('type', 'create')
            ->notEmpty('type');

        $validator
            ->requirePresence('name', 'create')
            ->notEmpty('name');

        return $validator;
    }
}
