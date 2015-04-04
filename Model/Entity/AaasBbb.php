<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * AaasBbb Entity.
 */
class AaasBbb extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'aaa_id' => true,
        'bbb_id' => true,
        'attrib1' => true,
        'aaa' => true,
        'bbb' => true,
    ];
}
