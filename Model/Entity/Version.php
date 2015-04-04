<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Version Entity.
 */
class Version extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'major' => true,
        'minor' => true,
        'description' => true,
        'things' => true,
    ];
}
