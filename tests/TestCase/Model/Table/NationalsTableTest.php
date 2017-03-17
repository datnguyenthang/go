<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\NationalsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\NationalsTable Test Case
 */
class NationalsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\NationalsTable
     */
    public $Nationals;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.nationals',
        'app.shops',
        'app.states'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Nationals') ? [] : ['className' => 'App\Model\Table\NationalsTable'];
        $this->Nationals = TableRegistry::get('Nationals', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Nationals);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
