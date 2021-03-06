<?php
namespace App\Test\TestCase\Controller\Admin;

use App\Controller\Admin\TypeShopsController;
use Cake\TestSuite\IntegrationTestCase;

/**
 * App\Controller\Admin\TypeShopsController Test Case
 */
class TypeShopsControllerTest extends IntegrationTestCase
{

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
     * Test index method
     *
     * @return void
     */
    public function testIndex()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test view method
     *
     * @return void
     */
    public function testView()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test add method
     *
     * @return void
     */
    public function testAdd()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test edit method
     *
     * @return void
     */
    public function testEdit()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test delete method
     *
     * @return void
     */
    public function testDelete()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
