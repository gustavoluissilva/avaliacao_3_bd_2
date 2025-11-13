<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * CelularesFixture
 */
class CelularesFixture extends TestFixture
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
                'cliente_id' => 1,
                'marca' => 'Lorem ipsum dolor sit amet',
                'modelo' => 'Lorem ipsum dolor sit amet',
                'imei' => 'Lorem ipsum dolor ',
                'valor' => 1.5,
                'data_aquisicao' => '2025-11-13',
                'created' => '2025-11-13 12:27:46',
                'modified' => '2025-11-13 12:27:46',
            ],
        ];
        parent::init();
    }
}
