<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * ThingsSystem Entity.
 */
class ThingsSystem extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'thing_id' => true,
        'system_id' => true,
        'thing' => true,
        'system' => true,
    ];
}
