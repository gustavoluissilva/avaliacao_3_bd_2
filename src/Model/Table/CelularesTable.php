<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Celulares Model
 *
 * @property \App\Model\Table\ClientesTable&\Cake\ORM\Association\BelongsTo $Clientes
 *
 * @method \App\Model\Entity\Celulare newEmptyEntity()
 * @method \App\Model\Entity\Celulare newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\Celulare> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Celulare get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\Celulare findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\Celulare patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\Celulare> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Celulare|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\Celulare saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\Celulare>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Celulare>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Celulare>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Celulare> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Celulare>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Celulare>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Celulare>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Celulare> deleteManyOrFail(iterable $entities, array $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class CelularesTable extends Table
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

        $this->setTable('celulares');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Clientes', [
            'foreignKey' => 'cliente_id',
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
            ->notEmptyString('cliente_id');

        $validator
            ->scalar('marca')
            ->maxLength('marca', 50)
            ->allowEmptyString('marca');

        $validator
            ->scalar('modelo')
            ->maxLength('modelo', 50)
            ->allowEmptyString('modelo');

        $validator
            ->scalar('imei')
            ->maxLength('imei', 20)
            ->allowEmptyString('imei')
            ->add('imei', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->decimal('valor')
            ->allowEmptyString('valor');

        $validator
            ->date('data_aquisicao')
            ->allowEmptyDate('data_aquisicao');

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
        $rules->add($rules->isUnique(['imei'], ['allowMultipleNulls' => true]), ['errorField' => 'imei']);
        $rules->add($rules->existsIn(['cliente_id'], 'Clientes'), ['errorField' => 'cliente_id']);

        return $rules;
    }
}
