<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Aaa Entity.
 */
class Aaa extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'name' => true,
        'bbbs' => true,
        'aaas_bbbs' => true,
    ];
}
