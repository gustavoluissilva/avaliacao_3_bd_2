<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Atendimento Entity
 *
 * @property int $id
 * @property int $cliente_id
 * @property int|null $funcionario_id
 * @property \Cake\I18n\DateTime|null $data_atendimento
 * @property string|null $tipo
 * @property string|null $descricao
 * @property bool|null $resolvido
 * @property \Cake\I18n\DateTime|null $created
 * @property \Cake\I18n\DateTime|null $modified
 *
 * @property \App\Model\Entity\Cliente $cliente
 * @property \App\Model\Entity\Funcionario $funcionario
 */
class Atendimento extends Entity
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
        'funcionario_id' => true,
        'data_atendimento' => true,
        'tipo' => true,
        'descricao' => true,
        'resolvido' => true,
        'created' => true,
        'modified' => true,
        'cliente' => true,
        'funcionario' => true,
    ];
}
