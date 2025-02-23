<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Account Entity
 *
 * @property int $id
 * @property string $name
 * @property string|null $description
 * @property string|null $type
 * @property string|null $bic
 * @property string|null $iban
 * @property string|null $adviser
 * @property string|null $phone
 * @property string|null $image
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 */
class Account extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array<string, bool>
     */
    protected $_accessible = [
        'name' => true,
        'description' => true,
        'type' => true,
        'bic' => true,
        'iban' => true,
        'adviser' => true,
        'phone' => true,
        'image' => true,
        'created' => true,
        'modified' => true,
    ];
}
