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
    public $id;


    public function __construct($config){

        $this->config = $config;
        $this->connect = (new \Pixie\Connection('mysql', $this->config))->getQueryBuilder();

    }
    public function create($table, array $data){

        $id = $this->connect->table('posts')->insert($data);
        return (integer)$id;
    }
    public function read($table, $id){


    }
    public function update($table, $id, array $data){
        $data_array = $this->connect->table('posts')->where('id','=', $id)->insert($data);
    }
    public function delete($table, $id){

    }


}