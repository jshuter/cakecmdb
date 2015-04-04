<?php
namespace App\Model\Table;

use App\Model\Entity\Thing;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Things Model
 */
class ThingsTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('things');
        $this->displayField('name');
        $this->primaryKey('id');
        $this->belongsTo('Types', [
            'foreignKey' => 'type_id'
        ]);
        $this->belongsTo('Versions', [
            'foreignKey' => 'version_id'
        ]);
        $this->belongsTo('Systems', [
            'foreignKey' => 'system_id'
        ]);
        $this->belongsToMany('Attributes', [
            'foreignKey' => 'thing_id',
            'targetForeignKey' => 'attribute_id',
            'joinTable' => 'things_attributes'
        ]);
        $this->belongsToMany('Systems', [
            'foreignKey' => 'thing_id',
            'targetForeignKey' => 'system_id',
            'joinTable' => 'things_systems'
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
            ->add('id', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('id', 'create')
            ->allowEmpty('name')
            ->add('type_id', 'valid', ['rule' => 'numeric'])
            ->requirePresence('type_id', 'create')
            ->notEmpty('type_id')
            ->allowEmpty('description')
            ->add('version_id', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('version_id')
            ->add('system_id', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('system_id');

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
        $rules->add($rules->existsIn(['type_id'], 'Types'));
        $rules->add($rules->existsIn(['version_id'], 'Versions'));
        $rules->add($rules->existsIn(['system_id'], 'Systems'));
        return $rules;
    }
}
