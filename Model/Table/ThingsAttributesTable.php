<?php
namespace App\Model\Table;

use App\Model\Entity\ThingsAttribute;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ThingsAttributes Model
 */
class ThingsAttributesTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('things_attributes');
        $this->displayField('id');
        $this->primaryKey('id');
        $this->belongsTo('Things', [
            'foreignKey' => 'thing_id'
        ]);
        $this->belongsTo('Attributes', [
            'foreignKey' => 'attribute_id'
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
            ->add('thing_id', 'valid', ['rule' => 'numeric'])
            ->requirePresence('thing_id', 'create')
            ->notEmpty('thing_id')
            ->add('attribute_id', 'valid', ['rule' => 'numeric'])
            ->requirePresence('attribute_id', 'create')
            ->notEmpty('attribute_id');

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
        $rules->add($rules->existsIn(['thing_id'], 'Things'));
        $rules->add($rules->existsIn(['attribute_id'], 'Attributes'));
        return $rules;
    }
}
