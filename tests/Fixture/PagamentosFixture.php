<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * PagamentosFixture
 */
class PagamentosFixture extends TestFixture
{
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id' => 1,
                'seguro_id' => 1,
                'data_pagamento' => '2025-11-13',
                'valor_pago' => 1.5,
                'metodo_pagamento' => 'Lorem ipsum dolor sit amet',
                'status_pagamento' => 'Lorem ipsum dolor sit amet',
                'created' => '2025-11-13 12:33:25',
                'modified' => '2025-11-13 12:33:25',
            ],
        ];
        parent::init();
    }
}
