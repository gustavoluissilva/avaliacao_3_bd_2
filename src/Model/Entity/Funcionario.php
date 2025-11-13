<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Funcionario Entity
 *
 * @property int $id
 * @property string $nome
 * @property string|null $cpf
 * @property string|null $cargo
 * @property string|null $email
 * @property string|null $senha
 * @property \Cake\I18n\DateTime|null $created
 * @property \Cake\I18n\DateTime|null $modified
 *
 * @property \App\Model\Entity\Atendimento[] $atendimentos
 * @property \App\Model\Entity\Seguro[] $seguros
 */
class Funcionario extends Entity
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
        'cpf' => true,
        'cargo' => true,
        'email' => true,
        'senha' => true,
        'created' => true,
        'modified' => true,
        'atendimentos' => true,
        'seguros' => true,
    ];
}
