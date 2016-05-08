<?php

namespace App\Controllers;

use Webcourse\Controller;
use Webcourse\Response;
use Webcourse\Template;

class GuestbookController extends Controller {
    
    
    public function indexAction()
    {
//        $model = new App\Model\Guestbook;
//        $message = $model->read();
        $template = new Template();
        $template->addData(array('date' => date("Y-m-d")));
        $template->setPath(__DIR__.'/../View/guestbook/index.phtml');
        $html = $template->render();

        $response = new Response();
        $response->setContent($html);
        
        return $response;
        
    }
    
}