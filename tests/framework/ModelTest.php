<?php

class ModelTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var \Webcourse\Model
     */
    protected $model;
    /**
     * @var string
     */
    public $table;
    /**
     * @var array
     */
    protected $config;
    /**
     * @var array
     */
    public $data;
    public $id;
    public $data1;



    protected function setUp()
    {
        //class Moded
    $this->config = array(
        'driver'    => 'mysql', // Db driver
        'host'      => '127.0.0.1',
        'database'  => 'test',//test
        'username'  => 'root',
        'password'  => '',//'test123',
        'charset'   => 'utf8', // Optional
        'collation' => 'utf8_general_ci', // Optional
        'prefix'    => '', // Table prefix, optional
        'options'   => array( // PDO constructor options, optional
            PDO::ATTR_TIMEOUT => 5,
            PDO::ATTR_EMULATE_PREPARES => false,
        ),

    );

    }
    protected function tearDown()
    {
    }

//     tests
    public function testMe()
    {

    }
    public function testCreate(){

        $time = time();
        $this->data = array(
            'name' => $time,
            'email' => 'May@gg.com',
            'message' => 'hello))))',
            'date' => date("Y-m-d H:i:s"),
            );

        /**
         * @var $connect \Pixie\QueryBuilder\QueryBuilderHandler
         */
        $connect = (new \Pixie\Connection('mysql', $this->config))->getQueryBuilder();

        $model = new \Webcourse\Model($this->config);

        $id = $model->create($this->table, $this->data);

        $this->assertInternalType('integer', $id);//int
        $this->assertGreaterThan(0, $id);
        $result = $connect->table('posts')->where('name','=', $time)->get();

        $this->assertCount(1, $result);
        return $id;
    }
    /**
     * @depends testCreate
     */
    public function testRead($id){

        $connect = (new \Pixie\Connection('mysql', $this->config))->getQueryBuilder();
        $model = new \Webcourse\Model($this->config);
        $model->read($this->table, $id);
        $result = $connect->table('posts')->where('id','=', $id)->get();

        $this->assertCount(1, $result);
    }
    public function testUpdate(){
//        $this->id = 74;
//        $this->data1 = array(
//            'name' => date("Y-m-d"),
//            'email' => 'May@gg.com',
//            'message' => 'testUpdate',
//            'date' => date("Y-m-d H:i:s"),
//        );
//        /**
//         * @var $connect \Pixie\QueryBuilder\QueryBuilderHandler
//         */
//        $connect = (new \Pixie\Connection('mysql', $this->config))->getQueryBuilder();
//        $model = new \Webcourse\Model($this->config);
//        $model->update($this->table, $this->id, $this->data1);
//        $result = $connect->table('posts')->where('id','=', $this->id)->update($this->data1);
//
//        $this->assertCount(1, $result);


    }
    public function testDelete(){

    }
}
