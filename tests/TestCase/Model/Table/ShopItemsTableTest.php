<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ShopItemsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ShopItemsTable Test Case
 */
class ShopItemsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ShopItemsTable
     */
    public $ShopItems;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.shop_items',
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
        $config = TableRegistry::exists('ShopItems') ? [] : ['className' => 'App\Model\Table\ShopItemsTable'];
        $this->ShopItems = TableRegistry::get('ShopItems', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ShopItems);

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
