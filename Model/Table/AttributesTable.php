<?php
namespace App\Model\Table;

use App\Model\Entity\Attribute;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Attributes Model
 */
class AttributesTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('attributes');
        $this->displayField('name');
        $this->primaryKey('id');
        $this->belongsToMany('Things', [
            'foreignKey' => 'attribute_id',
            'targetForeignKey' => 'thing_id',
            'joinTable' => 'things_attributes'
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
            ->requirePresence('name', 'create')
            ->notEmpty('name')
            ->requirePresence('value', 'create')
            ->notEmpty('value');

        return $validator;
    }
}
