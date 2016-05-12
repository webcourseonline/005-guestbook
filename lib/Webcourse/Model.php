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
use Pixie\QueryBuilder\QueryBuilderHandler;

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
    protected $table;

    public $id;


    public function __construct($config = null){

        if (!isset($config)){
            $this->config = Register::getInstance()->getValue('config')['database'];
        } else {
            $this->config = $config;
        }

        $this->connect = (new \Pixie\Connection('mysql', $this->config))->getQueryBuilder();

    }
    public function create($table, array $data){
        /**
         * @var integer
         */
        $data1 = [];
        $data1['name'] = $data['name'];
        $data1['email'] =$data['email'];
        $data1['message'] = $data['message'];
        $data1['date'] = date("Y-m-d H:i:s");


        $id = $this->connect->table($table)->insert($data1);
        return (integer)$id;
    }
    public function readOne($table, $id){

        $data_array = $this->connect->table($table)->where('id','=', $id)->get();
        return $data_array;

    }

    /**
     * @param QueryBuilderHandler $table
     * @return mixed
     * @throws \Pixie\Exception
     */
    public function read($table){
        /**
         * @var QueryBuilderHandler $data_array
         */
        $dataArrayNeedNext = [];
        $data_array = $this->connect->table($table)->get();
        foreach ($data_array as $item) {
            $data = get_object_vars($item);
            $dataArrayNeedNext[] = $data;
        }
        return $dataArrayNeedNext;

    }
    public function update($table, $id, array $data){
        $data_array = $this->connect->table($table)->where('id','=', $id);
        $data_array->update($data);
        return true;
    }
    public function delete($table, $id){
        $data_array = $this->connect->table($table)->where('id','=', $id);
        $data_array->delete();
        return true;
    }


}