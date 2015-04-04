<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Thing Entity.
 */
class Thing extends Entity
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
        'version_id' => true,
        'system_id' => true,
        'type' => true,
        'version' => true,
        'system' => true,
        'attributes' => true,
    ];
}
