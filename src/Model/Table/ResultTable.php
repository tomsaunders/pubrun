<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Result Model
 *
 * @property \App\Model\Table\ResultsTable|\Cake\ORM\Association\BelongsTo $Results
 * @property \App\Model\Table\ResultSetsTable|\Cake\ORM\Association\BelongsTo $ResultSets
 * @property \App\Model\Table\RunnersTable|\Cake\ORM\Association\BelongsTo $Runners
 * @property \App\Model\Table\ResultTable|\Cake\ORM\Association\HasMany $Result
 * @property \App\Model\Table\TempResultsTable|\Cake\ORM\Association\HasMany $TempResults
 * @property \App\Model\Table\VwResultsTable|\Cake\ORM\Association\HasMany $VwResults
 *
 * @method \App\Model\Entity\Result get($primaryKey, $options = [])
 * @method \App\Model\Entity\Result newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Result[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Result|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Result patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Result[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Result findOrCreate($search, callable $callback = null, $options = [])
 */
class ResultTable extends Table
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

        $this->setTable('result');
        $this->setPrimaryKey('result_id');

        $this->belongsTo('ResultSet', [
            'foreignKey' => 'result_set_id'
        ]);
        $this->belongsTo('Runner', [
            'foreignKey' => 'runner_id'
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
            ->integer('result_hour')
            ->allowEmpty('result_hour');

        $validator
            ->integer('result_min')
            ->allowEmpty('result_min');

        $validator
            ->integer('result_sec')
            ->allowEmpty('result_sec');

        $validator
            ->scalar('notes')
            ->allowEmpty('notes');

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
        $rules->add($rules->existsIn(['result_set_id'], 'ResultSets'));
        $rules->add($rules->existsIn(['runner_id'], 'Runners'));

        return $rules;
    }
}
