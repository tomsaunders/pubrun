<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ResultSetTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ResultSetTable Test Case
 */
class ResultSetTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ResultSetTable
     */
    public $ResultSet;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.result_set',
        'app.result_sets',
        'app.tracks',
        'app.result',
        'app.results',
        'app.runners',
        'app.temp_results',
        'app.vw_results',
        'app.vw_result_set'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('ResultSet') ? [] : ['className' => ResultSetTable::class];
        $this->ResultSet = TableRegistry::get('ResultSet', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ResultSet);

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
