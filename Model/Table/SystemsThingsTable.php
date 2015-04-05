<?php
namespace App\Model\Table;

use App\Model\Entity\SystemsThing;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * SystemsThings Model
 */
class SystemsThingsTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('systems_things');
        $this->displayField('id');
        $this->primaryKey('id');
        $this->belongsTo('Things', [
            'foreignKey' => 'thing_id'
        ]);
        $this->belongsTo('Systems', [
            'foreignKey' => 'system_id'
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
            ->add('system_id', 'valid', ['rule' => 'numeric'])
            ->requirePresence('system_id', 'create')
            ->notEmpty('system_id');

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
        $rules->add($rules->existsIn(['system_id'], 'Systems'));
        return $rules;
    }
}
