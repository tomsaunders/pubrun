<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * RunnerFixture
 *
 */
class RunnerFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'runner';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'runner_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'first_name' => ['type' => 'string', 'length' => 50, 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'surname' => ['type' => 'string', 'length' => 50, 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'active_flag' => ['type' => 'string', 'fixed' => true, 'length' => 1, 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null],
        'gender' => ['type' => 'string', 'length' => 1, 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        '_options' => [
            'engine' => 'MyISAM',
            'collation' => 'latin1_swedish_ci'
        ],
    ];
    // @codingStandardsIgnoreEnd

    /**
     * Records
     *
     * @var array
     */
    public $records = [
        [
            'runner_id' => 1,
            'first_name' => 'Lorem ipsum dolor sit amet',
            'surname' => 'Lorem ipsum dolor sit amet',
            'active_flag' => 'Lorem ipsum dolor sit ame',
            'gender' => 'Lorem ipsum dolor sit ame'
        ],
    ];
}
