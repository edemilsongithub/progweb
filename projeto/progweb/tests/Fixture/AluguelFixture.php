<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * AluguelFixture
 *
 */
class AluguelFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'aluguel';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'id_cliente' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'id_produto' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'data_inicio' => ['type' => 'timestamp', 'length' => null, 'null' => false, 'default' => 'CURRENT_TIMESTAMP', 'comment' => '', 'precision' => null],
        'data_fim' => ['type' => 'timestamp', 'length' => null, 'null' => false, 'default' => '0000-00-00 00:00:00', 'comment' => '', 'precision' => null],
        'preco_aluguel' => ['type' => 'decimal', 'length' => 6, 'precision' => 3, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => ''],
        '_indexes' => [
            'id_cliente' => ['type' => 'index', 'columns' => ['id_cliente'], 'length' => []],
            'id_produto' => ['type' => 'index', 'columns' => ['id_produto'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'aluguel_ibfk_1' => ['type' => 'foreign', 'columns' => ['id_cliente'], 'references' => ['cliente', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'aluguel_ibfk_2' => ['type' => 'foreign', 'columns' => ['id_produto'], 'references' => ['produto', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'latin1_swedish_ci'
        ],
    ];
    // @codingStandardsIgnoreEnd

    /**
     * Records
     *
     * @var array
     */
    public $records = [
        [
            'id' => 1,
            'id_cliente' => 1,
            'id_produto' => 1,
            'data_inicio' => 1489510344,
            'data_fim' => 1489510344,
            'preco_aluguel' => 1.5
        ],
    ];
}
