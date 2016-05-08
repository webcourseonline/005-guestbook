<?php

namespace App\Controllers;

use App\Model\Guestbook;
use Webcourse\Controller;
use Webcourse\Response;
use Webcourse\Template;

class GuestbookController extends Controller {
    
    
    public function indexAction()
    {

        $config = $this->getRegistry();
        $model = new Guestbook();
//        $message = $model->read();
        $template = new Template();
        $template->addData(array('savedMessages' => $message));
        $template->setPath(__DIR__.'/../View/guestbook/index.phtml');
        $html = $template->render();

        $response = new Response();
        $response->setContent($html);
        
        return $response;
        
    }
    
}