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
    public $data1;
    public $id;

    protected function setUp()
    {
        //class Moded
        $config = include dirname(__FILE__) . '/../../config/config_test.php';
        $this->config = $config['database'];

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
        return $id;
    }
    /**
     * @depends testRead
     */
    public function testUpdate($id){

        $this->data1 = array(
            'name' => date("Y-m-d"),
            'email' => 'May06_05@gg.com',
            'message' => 'testUpdateaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa',
            'date' => date("Y-m-d H:i:s"),
        );
        /**
         * @var $connect \Pixie\QueryBuilder\QueryBuilderHandler
         */
        $connect = (new \Pixie\Connection('mysql', $this->config))->getQueryBuilder();
        $model = new \Webcourse\Model($this->config);
        $model->update($this->table, $id, $this->data1);
        $result = $connect->table('posts')->where('id','=', $id)->get($this->data1);

        $this->assertCount(1, $result);

        return $id;
    }

    /**
     * @depends testUpdate
     */
    public function testDelete($id){

        $connect = (new \Pixie\Connection('mysql', $this->config))->getQueryBuilder();
        $model = new \Webcourse\Model($this->config);
        $model->delete($this->table, $id);
        $result = $connect->table('posts')->where('id','=', $id)->get();

        $this->assertCount(0, $result);


    }
}
