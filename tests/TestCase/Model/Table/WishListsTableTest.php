<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\WishListsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\WishListsTable Test Case
 */
class WishListsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\WishListsTable
     */
    public $WishLists;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.wish_lists',
        'app.products',
        'app.shops',
        'app.nationals',
        'app.states',
        'app.districts',
        'app.type_shops',
        'app.monies',
        'app.order_details',
        'app.orders',
        'app.accounts',
        'app.types',
        'app.pictures',
        'app.shop_count_views',
        'app.shop_infos',
        'app.shop_items',
        'app.categories',
        'app.product_type_quantity'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('WishLists') ? [] : ['className' => 'App\Model\Table\WishListsTable'];
        $this->WishLists = TableRegistry::get('WishLists', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->WishLists);

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
