<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Track Model
 *
 * @property \App\Model\Table\TracksTable|\Cake\ORM\Association\BelongsTo $Tracks
 * @property \App\Model\Table\ResultSetTable|\Cake\ORM\Association\HasMany $ResultSet
 * @property \App\Model\Table\TempResultsTable|\Cake\ORM\Association\HasMany $TempResults
 * @property \App\Model\Table\TrackTable|\Cake\ORM\Association\HasMany $Track
 * @property \App\Model\Table\VwResultSetTable|\Cake\ORM\Association\HasMany $VwResultSet
 * @property \App\Model\Table\VwResultsTable|\Cake\ORM\Association\HasMany $VwResults
 * @property \App\Model\Table\VwTrackRunsTable|\Cake\ORM\Association\HasMany $VwTrackRuns
 * @property \App\Model\Table\VwTracksTable|\Cake\ORM\Association\HasMany $VwTracks
 *
 * @method \App\Model\Entity\Track get($primaryKey, $options = [])
 * @method \App\Model\Entity\Track newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Track[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Track|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Track patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Track[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Track findOrCreate($search, callable $callback = null, $options = [])
 */
class TrackTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('track');
        $this->setPrimaryKey('track_id');

        $this->hasMany('ResultSet', [
            'foreignKey' => 'track_id'
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->scalar('track_name')
            ->allowEmpty('track_name');

        $validator
            ->integer('track_length')
            ->allowEmpty('track_length');

        $validator
            ->scalar('track_link')
            ->allowEmpty('track_link');

        $validator
            ->scalar('track_description')
            ->allowEmpty('track_description');

        $validator
            ->scalar('track_photo')
            ->allowEmpty('track_photo');

        $validator
            ->scalar('pubrun_flag')
            ->allowEmpty('pubrun_flag');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['track_id'], 'Tracks'));

        return $rules;
    }
}
