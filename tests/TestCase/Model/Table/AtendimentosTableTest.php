<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AtendimentosTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AtendimentosTable Test Case
 */
class AtendimentosTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\AtendimentosTable
     */
    protected $Atendimentos;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected array $fixtures = [
        'app.Atendimentos',
        'app.Clientes',
        'app.Funcionarios',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Atendimentos') ? [] : ['className' => AtendimentosTable::class];
        $this->Atendimentos = $this->getTableLocator()->get('Atendimentos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Atendimentos);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @link \App\Model\Table\AtendimentosTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @link \App\Model\Table\AtendimentosTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
