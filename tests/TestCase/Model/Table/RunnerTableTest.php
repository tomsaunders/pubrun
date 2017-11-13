<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\RunnerTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\RunnerTable Test Case
 */
class RunnerTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\RunnerTable
     */
    public $Runner;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.runner',
        'app.runners',
        'app.result',
        'app.temp_results',
        'app.vw_results',
        'app.vw_runner'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Runner') ? [] : ['className' => RunnerTable::class];
        $this->Runner = TableRegistry::get('Runner', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Runner);

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
