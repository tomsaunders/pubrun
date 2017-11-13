<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * ResultSet Entity
 *
 * @property int $result_set_id
 * @property int $track_id
 * @property \Cake\I18n\FrozenDate $result_date
 *
 * @property \App\Model\Entity\Track $track
 * @property \App\Model\Entity\Result[] $result
 */
class ResultSet extends Entity
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
        'result_set_id' => true,
        'track_id' => true,
        'result_date' => true,
        'result_set' => true,
        'track' => true,
        'result' => true,
        'temp_results' => true,
        'vw_result_set' => true,
        'vw_results' => true
    ];
}
