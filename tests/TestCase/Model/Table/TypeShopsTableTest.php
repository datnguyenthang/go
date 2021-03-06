<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TypeShopsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TypeShopsTable Test Case
 */
class TypeShopsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\TypeShopsTable
     */
    public $TypeShops;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.type_shops',
        'app.shops',
        'app.nationals',
        'app.states',
        'app.districts',
        'app.monies',
        'app.order_details',
        'app.orders',
        'app.accounts',
        'app.wish_lists',
        'app.products',
        'app.categories',
        'app.pictures',
        'app.product_type_quantity',
        'app.types',
        'app.shop_count_views',
        'app.shop_infos',
        'app.shop_items'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('TypeShops') ? [] : ['className' => 'App\Model\Table\TypeShopsTable'];
        $this->TypeShops = TableRegistry::get('TypeShops', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->TypeShops);

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
