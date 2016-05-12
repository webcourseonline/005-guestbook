<?php

class GuestbookTest extends \PHPUnit_Framework_TestCase
{
    protected function setUp()
    {
    }

    protected function tearDown()
    {
    }

    // tests
    public function testGetPosts()
    {
        $guestbook = new App\Model\Guestbook();
        $aa = $guestbook->getPosts(1);
        if ($aa < 5) {
            $this->assertTrue(true);
        } else {
            $this->assertCount(5, $aa);
        }
    }
        public function  testSetPosts(){
//            $data = array(
//                'name' => 'olga1',
//            'email' => 'May@gg.com',
//            'message' => 'hello))))',
//            'date' => date("Y-m-d H:i:s"),
//            );
//
//            $guestbook = new App\Model\Guestbook();
//            $aaaa = $guestbook->setPosts($data);
//            var_dump($aaaa);
    }







}
