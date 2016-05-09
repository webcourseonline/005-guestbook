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
    public function testMe()
    {
        $guestbook = new App\Model\Guestbook();
        $aa = $guestbook->getPosts(1, 3);
        $a1 = $aa[0];
        $a2 = $aa[1];
//        var_dump($a1);

//        $this->assert

        $this->assertCount(3, $aa[0]);

    }
}
