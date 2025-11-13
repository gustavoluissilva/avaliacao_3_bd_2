<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PlanosTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PlanosTable Test Case
 */
class PlanosTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\PlanosTable
     */
    protected $Planos;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected array $fixtures = [
        'app.Planos',
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
        $config = $this->getTableLocator()->exists('Planos') ? [] : ['className' => PlanosTable::class];
        $this->Planos = $this->getTableLocator()->get('Planos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Planos);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @link \App\Model\Table\PlanosTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
