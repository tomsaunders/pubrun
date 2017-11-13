<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Runner Model
 *
 * @property \App\Model\Table\RunnersTable|\Cake\ORM\Association\BelongsTo $Runners
 * @property \App\Model\Table\ResultTable|\Cake\ORM\Association\HasMany $Result
 * @property \App\Model\Table\RunnerTable|\Cake\ORM\Association\HasMany $Runner
 * @property \App\Model\Table\TempResultsTable|\Cake\ORM\Association\HasMany $TempResults
 * @property \App\Model\Table\VwResultsTable|\Cake\ORM\Association\HasMany $VwResults
 * @property \App\Model\Table\VwRunnerTable|\Cake\ORM\Association\HasMany $VwRunner
 *
 * @method \App\Model\Entity\Runner get($primaryKey, $options = [])
 * @method \App\Model\Entity\Runner newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Runner[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Runner|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Runner patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Runner[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Runner findOrCreate($search, callable $callback = null, $options = [])
 */
class RunnerTable extends Table
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

        $this->setTable('runner');
        $this->setPrimaryKey('runner_id');

        $this->hasMany('Result', [
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
            ->scalar('first_name')
            ->allowEmpty('first_name');

        $validator
            ->scalar('surname')
            ->allowEmpty('surname');

        $validator
            ->scalar('active_flag')
            ->allowEmpty('active_flag');

        $validator
            ->scalar('gender')
            ->allowEmpty('gender');

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

        return $rules;
    }
}
