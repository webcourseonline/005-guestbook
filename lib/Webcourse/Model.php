<?php
/**
 * Created by PhpStorm.
 * User: olga
 * Date: 18.04.16
 * Time: 21:19
 */

namespace Webcourse;
use Pixie\Connection;
use PDO;
//use Pixie\QueryBuilder\QueryBuilderHandler;


class Model
{

    /**
     * @var Connection
     */
    protected $connect;
    /**
     * @var array
     */
    public $data;
    /**
     * @var string
     */
    public $table;

    public function __construct($config){
        $this->config = array(
            'driver'    => 'mysql', // Db driver
            'host'      => '127.0.0.1',
            'database'  => 'guestbook',
            'username'  => 'root',
            'password'  => '21609332',//'test123',
            'charset'   => 'utf8', // Optional
            'collation' => 'utf8_general_ci', // Optional
            'prefix'    => '', // Table prefix, optional
            'options'   => array( // PDO constructor options, optional
                PDO::ATTR_TIMEOUT => 5,
                PDO::ATTR_EMULATE_PREPARES => false,
            ),

        );
        $time = time();
        $data = array(
            'name' => 'olga1',
            'email' => 'olgaaaaa@gg.com',
            'message' => 'hello))))',
            'date' => $time,
        );


//        $this->connect ="";
        $this->connect = (new \Pixie\Connection('mysql', $this->config))->getQueryBuilder();

    }
    public function create($table, array $data){

            $result = $this->connect->table('posts')->insert($data);

//        $this->connect->$data();
//        $row = $this->table()->create();
//
//        $row = $this->getTable()->create();
//        $row->setFromArray($data);
//        return $row->save();


    }
    public function read($table, $id){

    }
    public function update($table, $id, array $data){

    }
    public function delete($table, $id){

    }


}