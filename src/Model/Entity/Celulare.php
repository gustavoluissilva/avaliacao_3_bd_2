<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Celulare Entity
 *
 * @property int $id
 * @property int $cliente_id
 * @property string|null $marca
 * @property string|null $modelo
 * @property string|null $imei
 * @property string|null $valor
 * @property \Cake\I18n\Date|null $data_aquisicao
 * @property \Cake\I18n\DateTime|null $created
 * @property \Cake\I18n\DateTime|null $modified
 *
 * @property \App\Model\Entity\Cliente $cliente
 */
class Celulare extends Entity
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
        'cliente_id' => true,
        'marca' => true,
        'modelo' => true,
        'imei' => true,
        'valor' => true,
        'data_aquisicao' => true,
        'created' => true,
        'modified' => true,
        'cliente' => true,
    ];
}
