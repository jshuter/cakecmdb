<?php
namespace App\Model\Table;

use App\Model\Entity\Relation;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Relations Model
 */
class RelationsTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('relations');
        $this->displayField('id1');
        $this->primaryKey('id1');
        $this->belongsTo('Things', [
            'foreignKey' => 'thing_id'
        ]);
        $this->belongsTo('Thing2s', [
			'classname' => 'Things',
            'foreignKey' => 'thing2_id'
        ]);
        $this->belongsTo('Reltypes', [
            'foreignKey' => 'reltype_id'
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
            ->add('thing2_id', 'valid', ['rule' => 'numeric'])
            ->requirePresence('thing2_id', 'create')
            ->notEmpty('thing2_id')
            ->add('reltype_id', 'valid', ['rule' => 'numeric'])
            ->requirePresence('reltype_id', 'create')
            ->notEmpty('reltype_id');

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
        $rules->add($rules->existsIn(['thing2_id'], 'Things'));
        $rules->add($rules->existsIn(['reltype_id'], 'Reltypes'));
        return $rules;
    }
}
