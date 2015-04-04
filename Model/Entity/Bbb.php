<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Bbb Entity.
 */
class Bbb extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'name' => true,
        'aaas' => true,
    ];
}
