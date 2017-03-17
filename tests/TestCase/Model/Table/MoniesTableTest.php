<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MoniesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MoniesTable Test Case
 */
class MoniesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\MoniesTable
     */
    public $Monies;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.monies',
        'app.shops'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Monies') ? [] : ['className' => 'App\Model\Table\MoniesTable'];
        $this->Monies = TableRegistry::get('Monies', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Monies);

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

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
