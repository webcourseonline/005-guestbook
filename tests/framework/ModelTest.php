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
        $table = 'posts';
        $time = time();
        $this->data = array(
            'name' => $time,
             'email' => 'zxczxc@zxczxcz',
             'message' => 'zcxzcxzcx',
            'submit' => ''
            );

        /**
         * @var $connect \Pixie\QueryBuilder\QueryBuilderHandler
         */
        $connect = (new \Pixie\Connection('mysql', $this->config))->getQueryBuilder();
        $model = new \Webcourse\Model($this->config);
        $id = $model->create($table, $this->data);
        $this->assertInternalType('integer', $id);//int
        $this->assertGreaterThan(0, $id);
        $result = $connect->table('posts')->where('name','=', $time)->get();
        $this->assertCount(1, $result);
        return $id;
    }
    /**
     * @depends testCreate
     */
    public function testReadOne($id){
        $table = 'posts';
        $model = new \Webcourse\Model($this->config);
        $result = $model->readOne($table, $id);
        $this->assertCount(1, $result);
        return $id;
    }
    public function testRead(){
        $table = 'posts';
        $connect = (new \Pixie\Connection('mysql', $this->config))->getQueryBuilder();
        $model = new \Webcourse\Model($this->config);
        $a = $model->read($table);
        $result1 = $connect->table($table)->count();
        $this->assertCount($result1, $a);

    }
    /**
     * @depends testReadOne
     */
    public function testUpdate($id){
        $table = 'posts';
        $this->data1 = array(
            'name' => date("Y-m-d"),
            'email' => 'May06_05@gg.com',
            'message' => 'testUpdateaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa',
            'date' => date("Y-m-d H:i:s"),
        );
        /**
         * @var $connect \Pixie\QueryBuilder\QueryBuilderHandler
         */
        $model = new \Webcourse\Model($this->config);
        $model->update($table, $id, $this->data1);
        $this->assertTrue(true);
        return $id;
    }

    /**
     * @depends testUpdate
     */
    public function testDelete($id){
        $table = 'posts';
        $model = new \Webcourse\Model($this->config);
        $model->delete($table, $id);

        $this->assertTrue(true);


    }
}
