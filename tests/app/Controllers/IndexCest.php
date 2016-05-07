<?php
namespace Controllers;
use \AppTester;
use Codeception\Extension\PhpBuiltinServer;

class IndexCest
{

    /**
     * @var PhpBuiltinServer
     */
    protected $server;
    
    public function _before(AppTester $I)
    {

//        $config = [
//            'hostname'     => '127.0.0.1',
//            'port'         => '8090',
//            'autostart'    => true,
//            'documentRoot' => './www',
//            'directoryIndex' => 'index.php'
//        ];
//        $this->server = new PhpBuiltinServer($config, []);

    }

    public function _after(AppTester $I)
    {
//        $this->server->stopServer();
    }

    // tests
    public function tryToTest(AppTester $I)
    {
        
//        $I->amOnPage("/");
//        $I->see("IndexController:indexAction");
            
        
    }
}
