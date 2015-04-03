<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Thing2 Entity.
 */
class Thing2 extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'name' => true,
        'type_id' => true,
        'description' => true,
        'type' => true,
        'thing2' => true,
    ];
}
