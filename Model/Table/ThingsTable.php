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
        $this->hasMany('Attributes', [
            'foreignKey' => 'thing_id'
        ]);
        $this->belongsToMany('Systems', [
            'through' => 'systems_things'
        ]);
        $this->belongsToMany('Thing2s', [
            'through' => 'things_thing2s'
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
            ->allowEmpty('description')
            ->add('type_id', 'valid', ['rule' => 'numeric'])
            ->requirePresence('type_id', 'create')
            ->notEmpty('type_id')
            ->add('version_id', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('version_id');

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
        return $rules;
    }
}
