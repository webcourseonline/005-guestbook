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



    protected function setUp()
    {
        //class Moded
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

//$post = array(
//    'name' => 'Olga1',
//    'email' => 'olga@gmail.com',
//    'date' => '2016-04-25',
//    'message' => 'Hello my friend!=)',
//);

    }

    protected function tearDown()
    {
    }

//     tests
    public function testMe()
    {
//        $fc = new \Webcourse\Model($this->config);
//        $this->assertInstanceOf("\Webcourse\Model", $fc);
    }
    public function testCreate(){

        $time = time();

        $this->data = array(

            'name' => $time,
            'email' => 'olgaaaaa@gg.com',
            'message' => 'hello))))',
            'date' => '',
            );


        /**
         * @var $connect \Pixie\QueryBuilder\QueryBuilderHandler
         */
        $connect = (new \Pixie\Connection('mysql', $this->config))->getQueryBuilder();

        $model = new \Webcourse\Model($this->config);

        $model->create($this->table, $this->data);

        $result = $connect->table('posts')->where('name','=', $time)->get();
        $this->assertCount(1, $result);



    }
    public function testRead(){

    }
    public function testUpdate(){

    }
    public function testDelete(){

    }
}
