<?php
namespace App\Model\Table;

use App\Model\Entity\Aaa;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Aaas Model
 */
class AaasTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('aaas');
        $this->displayField('name');
        $this->primaryKey('id');
        $this->belongsToMany('Bbbs', [
            'through' => 'aaas_bbbs'
        ]);

		$this->hasMany('AaasBbbs',[ 'className' => 'AaasBbbs', 'foriegn_key' => 'aaa_id']);

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
            ->notEmpty('name');

        return $validator;
    }
}
