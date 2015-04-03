<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Relation Entity.
 */
class Relation extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'id' => true,
        'thing_id' => true,
        'thing2_id' => true,
        'reltype_id' => true,
        'thing' => true,
        'thing2' => true,
        'reltype' => true,
    ];
}
