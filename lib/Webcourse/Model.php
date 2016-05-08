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
    public $table;
    public $id;


    public function __construct($config){

        $this->config = $config;
        $this->connect = (new \Pixie\Connection('mysql', $this->config))->getQueryBuilder();

    }
    public function create($table, array $data){
        /**
         * @var integer
         */
        $id = $this->connect->table($table)->insert($data);
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
//            $aa = json_encode($data, true, 2);
            $dataArrayNeedNext[] = $data;

        }
        return $dataArrayNeedNext;


           // $a = (array)$item;
//            foreach ($item as $item1) {
//                $array1 = (array)$item1;
//                var_dump($array1);
//            }
            var_dump($aa);
//        }
//        $data = json_encode($data_array);
//        $aa = json_decode($data, true, 2);

        var_dump($aa);
        return $aa;
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