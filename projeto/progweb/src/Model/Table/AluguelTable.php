<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Aluguel Model
 *
 * @method \App\Model\Entity\Aluguel get($primaryKey, $options = [])
 * @method \App\Model\Entity\Aluguel newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Aluguel[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Aluguel|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Aluguel patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Aluguel[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Aluguel findOrCreate($search, callable $callback = null, $options = [])
 */
class AluguelTable extends Table
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

        $this->table('aluguel');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->belongsTo(
            'Produto', [
                'foreignKey' => 'id_produto'
            ]            
        );
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
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->integer('id_cliente')
            ->allowEmpty('id_cliente');

        $validator
            ->integer('id_produto')
            ->allowEmpty('id_produto');

        $validator
            ->date('data_inicio')
            ->requirePresence('data_inicio', 'create')
            ->notEmpty('data_inicio');

        $validator
            ->date('data_fim')
            ->requirePresence('data_fim', 'create')
            ->notEmpty('data_fim');

        $validator
            ->decimal('preco_aluguel')
            ->notEmpty('preco_aluguel');

        return $validator;
    }

    /**
     * Método que busca alugéis ativos passsando o id do usuário
     */
     public function findAlugueisAtivosPorClienteId(Query $query, array $options)
    {

        $id_cliente = $options['id_cliente'];

        $query
            ->contain(['Produto'])
            ->where([
                'id_cliente' => $id_cliente,
                'data_fim >' => date('Y-m-d H:i:s'),
            ])
            ->order(
                ['data_fim' => 'ASC']
            );

        return $query;
    } 
}
