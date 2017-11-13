<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Track Entity
 *
 * @property int $track_id
 * @property string $track_name
 * @property int $track_length
 * @property string $track_link
 * @property string $track_description
 * @property string $track_photo
 * @property string $pubrun_flag
 *
 * @property \App\Model\Entity\Track[] $track
 * @property \App\Model\Entity\ResultSet[] $result_set
 */
class Track extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'track_id' => true,
        'track_name' => true,
        'track_length' => true,
        'track_link' => true,
        'track_description' => true,
        'track_photo' => true,
        'pubrun_flag' => true,
        'track' => true,
        'result_set' => true,
        'temp_results' => true,
        'vw_result_set' => true,
        'vw_results' => true,
        'vw_track_runs' => true,
        'vw_tracks' => true
    ];
}
