<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Pagamento Entity
 *
 * @property int $id
 * @property int $seguro_id
 * @property \Cake\I18n\Date|null $data_pagamento
 * @property string|null $valor_pago
 * @property string|null $metodo_pagamento
 * @property string|null $status_pagamento
 * @property \Cake\I18n\DateTime|null $created
 * @property \Cake\I18n\DateTime|null $modified
 *
 * @property \App\Model\Entity\Seguro $seguro
 */
class Pagamento extends Entity
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
        'data_pagamento' => true,
        'valor_pago' => true,
        'metodo_pagamento' => true,
        'status_pagamento' => true,
        'created' => true,
        'modified' => true,
        'seguro' => true,
    ];
}
