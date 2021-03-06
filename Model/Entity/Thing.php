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
        'description' => true,
        'type_id' => true,
        'version_id' => true,
        'type' => true,
        'version' => true,
        'attributes' => true,
        'systems' => true,
    ];
}
