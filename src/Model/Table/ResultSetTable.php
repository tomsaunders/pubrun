<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ResultSet Model
 *
 * @property \App\Model\Table\ResultSetsTable|\Cake\ORM\Association\BelongsTo $ResultSets
 * @property \App\Model\Table\TracksTable|\Cake\ORM\Association\BelongsTo $Tracks
 * @property \App\Model\Table\ResultTable|\Cake\ORM\Association\HasMany $Result
 * @property \App\Model\Table\ResultSetTable|\Cake\ORM\Association\HasMany $ResultSet
 * @property \App\Model\Table\TempResultsTable|\Cake\ORM\Association\HasMany $TempResults
 * @property \App\Model\Table\VwResultSetTable|\Cake\ORM\Association\HasMany $VwResultSet
 * @property \App\Model\Table\VwResultsTable|\Cake\ORM\Association\HasMany $VwResults
 *
 * @method \App\Model\Entity\ResultSet get($primaryKey, $options = [])
 * @method \App\Model\Entity\ResultSet newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\ResultSet[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\ResultSet|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ResultSet patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\ResultSet[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\ResultSet findOrCreate($search, callable $callback = null, $options = [])
 */
class ResultSetTable extends Table
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

        $this->setTable('result_set');
        $this->setPrimaryKey('result_set_id');

        $this->belongsTo('Track', [
            'foreignKey' => 'track_id'
        ]);
        $this->hasMany('Result', [
            'foreignKey' => 'result_set_id'
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
            ->date('result_date')
            ->allowEmpty('result_date');

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
