<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Result Entity
 *
 * @property int $result_id
 * @property int $result_set_id
 * @property int $runner_id
 * @property int $result_hour
 * @property int $result_min
 * @property int $result_sec
 * @property string $notes
 *
 * @property \App\Model\Entity\ResultSet $result_set
 * @property \App\Model\Entity\Runner $runner
 */
class Result extends Entity
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
        'result_id' => true,
        'result_set_id' => true,
        'runner_id' => true,
        'result_hour' => true,
        'result_min' => true,
        'result_sec' => true,
        'notes' => true,
        'result' => true,
        'result_set' => true,
        'runner' => true,
        'temp_results' => true,
        'vw_results' => true
    ];
}
