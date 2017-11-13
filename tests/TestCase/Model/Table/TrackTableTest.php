<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TrackTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TrackTable Test Case
 */
class TrackTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\TrackTable
     */
    public $Track;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.track',
        'app.tracks',
        'app.result_set',
        'app.result',
        'app.results',
        'app.result_sets',
        'app.runners',
        'app.temp_results',
        'app.vw_results',
        'app.vw_result_set',
        'app.vw_track_runs',
        'app.vw_tracks'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Track') ? [] : ['className' => TrackTable::class];
        $this->Track = TableRegistry::get('Track', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Track);

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
