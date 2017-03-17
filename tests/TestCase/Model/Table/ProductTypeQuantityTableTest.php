<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ProductTypeQuantityTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ProductTypeQuantityTable Test Case
 */
class ProductTypeQuantityTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ProductTypeQuantityTable
     */
    public $ProductTypeQuantity;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.product_type_quantity',
        'app.products'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('ProductTypeQuantity') ? [] : ['className' => 'App\Model\Table\ProductTypeQuantityTable'];
        $this->ProductTypeQuantity = TableRegistry::get('ProductTypeQuantity', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ProductTypeQuantity);

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
