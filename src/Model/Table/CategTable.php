<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Categ Model
 *
 * @method \App\Model\Entity\Categ newEmptyEntity()
 * @method \App\Model\Entity\Categ newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Categ[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Categ get($primaryKey, $options = [])
 * @method \App\Model\Entity\Categ findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Categ patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Categ[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Categ|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Categ saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Categ[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Categ[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Categ[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Categ[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class CategTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('categ');
        $this->setDisplayField('id_categoria');
        $this->setPrimaryKey('id_categoria');
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
            ->integer('id_categoria')
            ->allowEmptyString('id_categoria', null, 'create');

        $validator
            ->scalar('categoria')
            ->maxLength('categoria', 25)
            ->requirePresence('categoria', 'create')
            ->notEmptyString('categoria');

        return $validator;
    }
}
