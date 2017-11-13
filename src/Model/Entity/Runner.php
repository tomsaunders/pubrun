<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Runner Entity
 *
 * @property int $runner_id
 * @property string $first_name
 * @property string $surname
 * @property string $active_flag
 * @property string $gender
 *
 * @property \App\Model\Entity\Result[] $result
 */
class Runner extends Entity
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
        'runner_id' => true,
        'first_name' => true,
        'surname' => true,
        'active_flag' => true,
        'gender' => true,
        'runner' => true,
        'result' => true,
        'temp_results' => true,
        'vw_results' => true,
        'vw_runner' => true
    ];
}
