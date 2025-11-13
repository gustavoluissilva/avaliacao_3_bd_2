<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Seguro Entity
 *
 * @property int $id
 * @property int $celular_id
 * @property int $plano_id
 * @property int|null $funcionario_id
 * @property \Cake\I18n\Date $data_inicio
 * @property \Cake\I18n\Date|null $data_fim
 * @property string|null $status
 * @property \Cake\I18n\DateTime|null $created
 * @property \Cake\I18n\DateTime|null $modified
 *
 * @property \App\Model\Entity\Celulare $celular
 * @property \App\Model\Entity\Plano $plano
 * @property \App\Model\Entity\Funcionario $funcionario
 * @property \App\Model\Entity\Pagamento[] $pagamentos
 * @property \App\Model\Entity\Sinistro[] $sinistros
 */
class Seguro extends Entity
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
        'celular_id' => true,
        'plano_id' => true,
        'funcionario_id' => true,
        'data_inicio' => true,
        'data_fim' => true,
        'status' => true,
        'created' => true,
        'modified' => true,
        'celular' => true,
        'plano' => true,
        'funcionario' => true,
        'pagamentos' => true,
        'sinistros' => true,
    ];
}
