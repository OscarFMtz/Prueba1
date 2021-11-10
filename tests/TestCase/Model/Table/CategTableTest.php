<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CategTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CategTable Test Case
 */
class CategTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\CategTable
     */
    protected $Categ;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Categ',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Categ') ? [] : ['className' => CategTable::class];
        $this->Categ = $this->getTableLocator()->get('Categ', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Categ);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\CategTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
