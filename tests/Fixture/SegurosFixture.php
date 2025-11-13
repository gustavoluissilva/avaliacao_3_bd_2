<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * SegurosFixture
 */
class SegurosFixture extends TestFixture
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
                'celular_id' => 1,
                'plano_id' => 1,
                'funcionario_id' => 1,
                'data_inicio' => '2025-11-13',
                'data_fim' => '2025-11-13',
                'status' => 'Lorem ipsum dolor sit amet',
                'created' => '2025-11-13 12:32:19',
                'modified' => '2025-11-13 12:32:19',
            ],
        ];
        parent::init();
    }
}
