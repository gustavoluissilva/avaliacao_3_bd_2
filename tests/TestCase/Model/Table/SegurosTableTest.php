<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SegurosTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SegurosTable Test Case
 */
class SegurosTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\SegurosTable
     */
    protected $Seguros;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected array $fixtures = [
        'app.Seguros',
        'app.Celulars',
        'app.Planos',
        'app.Funcionarios',
        'app.Pagamentos',
        'app.Sinistros',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Seguros') ? [] : ['className' => SegurosTable::class];
        $this->Seguros = $this->getTableLocator()->get('Seguros', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Seguros);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @link \App\Model\Table\SegurosTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @link \App\Model\Table\SegurosTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
