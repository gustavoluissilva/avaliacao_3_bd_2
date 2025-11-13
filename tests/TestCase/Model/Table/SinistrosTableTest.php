<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SinistrosTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SinistrosTable Test Case
 */
class SinistrosTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\SinistrosTable
     */
    protected $Sinistros;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected array $fixtures = [
        'app.Sinistros',
        'app.Seguros',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Sinistros') ? [] : ['className' => SinistrosTable::class];
        $this->Sinistros = $this->getTableLocator()->get('Sinistros', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Sinistros);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @link \App\Model\Table\SinistrosTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @link \App\Model\Table\SinistrosTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
