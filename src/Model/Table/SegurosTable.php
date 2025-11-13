<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Seguros Model
 *
 * @property \App\Model\Table\CelularesTable&\Cake\ORM\Association\BelongsTo $Celulars
 * @property \App\Model\Table\PlanosTable&\Cake\ORM\Association\BelongsTo $Planos
 * @property \App\Model\Table\FuncionariosTable&\Cake\ORM\Association\BelongsTo $Funcionarios
 * @property \App\Model\Table\PagamentosTable&\Cake\ORM\Association\HasMany $Pagamentos
 * @property \App\Model\Table\SinistrosTable&\Cake\ORM\Association\HasMany $Sinistros
 *
 * @method \App\Model\Entity\Seguro newEmptyEntity()
 * @method \App\Model\Entity\Seguro newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\Seguro> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Seguro get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\Seguro findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\Seguro patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\Seguro> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Seguro|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\Seguro saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\Seguro>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Seguro>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Seguro>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Seguro> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Seguro>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Seguro>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Seguro>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Seguro> deleteManyOrFail(iterable $entities, array $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class SegurosTable extends Table
{
    /**
     * Initialize method
     *
     * @param array<string, mixed> $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('seguros');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Celulars', [
            'foreignKey' => 'celular_id',
            'className' => 'Celulares',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Planos', [
            'foreignKey' => 'plano_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Funcionarios', [
            'foreignKey' => 'funcionario_id',
        ]);
        $this->hasMany('Pagamentos', [
            'foreignKey' => 'seguro_id',
        ]);
        $this->hasMany('Sinistros', [
            'foreignKey' => 'seguro_id',
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->notEmptyString('celular_id');

        $validator
            ->notEmptyString('plano_id');

        $validator
            ->allowEmptyString('funcionario_id');

        $validator
            ->date('data_inicio')
            ->requirePresence('data_inicio', 'create')
            ->notEmptyDate('data_inicio');

        $validator
            ->date('data_fim')
            ->allowEmptyDate('data_fim');

        $validator
            ->scalar('status')
            ->allowEmptyString('status');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules): RulesChecker
    {
        $rules->add($rules->existsIn(['celular_id'], 'Celulars'), ['errorField' => 'celular_id']);
        $rules->add($rules->existsIn(['plano_id'], 'Planos'), ['errorField' => 'plano_id']);
        $rules->add($rules->existsIn(['funcionario_id'], 'Funcionarios'), ['errorField' => 'funcionario_id']);

        return $rules;
    }
}
