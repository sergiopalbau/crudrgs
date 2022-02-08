<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Card Entity
 *
 * @property int $id
 * @property int $admin_id
 * @property string $img
 * @property string $txt_sp
 * @property string $txt_en
 * @property string $txt_fr
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\Admin $admin
 * @property \App\Model\Entity\Use[] $uses
 */
class Card extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'admin_id' => true,
        'img' => true,
        'txt_sp' => true,
        'txt_en' => true,
        'txt_fr' => true,
        'created' => true,
        'modified' => true,
        'admin' => true,
        'uses' => true,
    ];
}
