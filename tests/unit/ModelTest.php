<?php

require_once "model.php";

class ModelTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var \Pixie\QueryBuilder\QueryBuilderHandler
     */
    protected $qb;

    /**
     * @var array
     */
    protected $config;

    public function __construct($name = null, array $data = array(), $dataName = '')
    {
        $this->config = include "config.php";
        $connection = new \Pixie\Connection('mysql', $this->config);
        $this->qb = new \Pixie\QueryBuilder\QueryBuilderHandler($connection);

        parent::__construct($name, $data, $dataName);
    }

    protected function setUp()
    {
    }

    protected function tearDown()
    {
    }

    // tests
    public function testConfig()
    {

        $this->assertArrayHasKey('username', $this->config);
        $this->assertTrue(true);

    }

    public function testSave(){

    }

    public function testSaveWithError(){

    }

    public function testLoad(){

        $result = load($this->qb);
        $this->assertGreaterThan(0, count($result));

    }
}
