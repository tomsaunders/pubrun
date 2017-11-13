<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * TrackFixture
 *
 */
class TrackFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'track';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'track_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'track_name' => ['type' => 'string', 'length' => 50, 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'track_length' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'track_link' => ['type' => 'string', 'length' => 250, 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'track_description' => ['type' => 'string', 'length' => 1000, 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'track_photo' => ['type' => 'string', 'length' => 250, 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'pubrun_flag' => ['type' => 'string', 'fixed' => true, 'length' => 1, 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null],
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
            'track_id' => 1,
            'track_name' => 'Lorem ipsum dolor sit amet',
            'track_length' => 1,
            'track_link' => 'Lorem ipsum dolor sit amet',
            'track_description' => 'Lorem ipsum dolor sit amet',
            'track_photo' => 'Lorem ipsum dolor sit amet',
            'pubrun_flag' => 'Lorem ipsum dolor sit ame'
        ],
    ];
}
