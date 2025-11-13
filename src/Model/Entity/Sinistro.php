<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Sinistro Entity
 *
 * @property int $id
 * @property int $seguro_id
 * @property \Cake\I18n\Date $data_ocorrencia
 * @property string|null $tipo
 * @property string|null $descricao
 * @property string|null $status
 * @property \Cake\I18n\DateTime|null $created
 * @property \Cake\I18n\DateTime|null $modified
 *
 * @property \App\Model\Entity\Seguro $seguro
 */
class Sinistro extends Entity
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
    protected array $_accessible = [
        'seguro_id' => true,
        'data_ocorrencia' => true,
        'tipo' => true,
        'descricao' => true,
        'status' => true,
        'created' => true,
        'modified' => true,
        'seguro' => true,
    ];
}
