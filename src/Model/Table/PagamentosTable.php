<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Pagamentos Model
 *
 * @property \App\Model\Table\SegurosTable&\Cake\ORM\Association\BelongsTo $Seguros
 *
 * @method \App\Model\Entity\Pagamento newEmptyEntity()
 * @method \App\Model\Entity\Pagamento newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\Pagamento> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Pagamento get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\Pagamento findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\Pagamento patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\Pagamento> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Pagamento|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\Pagamento saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\Pagamento>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Pagamento>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Pagamento>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Pagamento> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Pagamento>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Pagamento>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Pagamento>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Pagamento> deleteManyOrFail(iterable $entities, array $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class PagamentosTable extends Table
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

        $this->setTable('pagamentos');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Seguros', [
            'foreignKey' => 'seguro_id',
            'joinType' => 'INNER',
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
            ->notEmptyString('seguro_id');

        $validator
            ->date('data_pagamento')
            ->allowEmptyDate('data_pagamento');

        $validator
            ->decimal('valor_pago')
            ->allowEmptyString('valor_pago');

        $validator
            ->scalar('metodo_pagamento')
            ->allowEmptyString('metodo_pagamento');

        $validator
            ->scalar('status_pagamento')
            ->allowEmptyString('status_pagamento');

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
        $rules->add($rules->existsIn(['seguro_id'], 'Seguros'), ['errorField' => 'seguro_id']);

        return $rules;
    }
}
