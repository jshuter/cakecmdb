<?php
namespace App\Model\Table;

use App\Model\Entity\AaasBbb;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * AaasBbbs Model
 */
class AaasBbbsTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('aaas_bbbs');
        $this->displayField('id');
        $this->primaryKey('id');
        $this->belongsTo('Aaas', [
            'foreignKey' => 'aaa_id'
        ]);
        $this->belongsTo('Bbbs', [
            'foreignKey' => 'bbb_id'
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
            ->add('aaa_id', 'valid', ['rule' => 'numeric'])
            ->requirePresence('aaa_id', 'create')
            ->notEmpty('aaa_id')
            ->add('bbb_id', 'valid', ['rule' => 'numeric'])
            ->requirePresence('bbb_id', 'create')
            ->notEmpty('bbb_id')
            ->requirePresence('attrib1', 'create')
            ->notEmpty('attrib1');

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
        $rules->add($rules->existsIn(['aaa_id'], 'Aaas'));
        $rules->add($rules->existsIn(['bbb_id'], 'Bbbs'));
        return $rules;
    }
}
