<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * ThingsAttribute Entity.
 */
class ThingsAttribute extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'thing_id' => true,
        'attribute_id' => true,
        'thing' => true,
        'attribute' => true,
    ];
}
