<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Plano Entity
 *
 * @property int $id
 * @property string $nome
 * @property string|null $cobertura
 * @property string|null $valor_mensal
 * @property string|null $franquia
 * @property \Cake\I18n\DateTime|null $created
 * @property \Cake\I18n\DateTime|null $modified
 *
 * @property \App\Model\Entity\Seguro[] $seguros
 */
class Plano extends Entity
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
        'nome' => true,
        'cobertura' => true,
        'valor_mensal' => true,
        'franquia' => true,
        'created' => true,
        'modified' => true,
        'seguros' => true,
    ];
}
