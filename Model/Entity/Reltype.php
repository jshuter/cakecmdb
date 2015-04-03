<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Reltype Entity.
 */
class Reltype extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'name' => true,
        'description' => true,
        'things_thing2s' => true,
    ];
}
