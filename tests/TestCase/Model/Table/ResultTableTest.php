<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ResultTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ResultTable Test Case
 */
class ResultTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ResultTable
     */
    public $Result;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.result',
        'app.results',
        'app.result_sets',
        'app.runners',
        'app.temp_results',
        'app.vw_results'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Result') ? [] : ['className' => ResultTable::class];
        $this->Result = TableRegistry::get('Result', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Result);

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
