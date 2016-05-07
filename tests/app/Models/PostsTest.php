<?php

namespace Models;

use App\Models\Posts;

class PostsTest extends \PHPUnit_Framework_TestCase
{
    protected $config;
    protected function setUp()
    {
        $this->config = include dirname(__FILE__) . '/../../../config/config_test.php';
    }
    protected function tearDown()
    {
    }

    public function testGetPosts()
    {

        $posts = new Posts($this->config);
        $post = $posts->getPosts(2);
        $this->assertCount($post[1], $post[0]);
    }
}
