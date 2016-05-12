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
        $message = $model->getPosts(1);
        $template = new Template();
        $template->addData(array('savedMessages' => $message));
        $template->setPath(__DIR__.'/../View/guestbook/index.phtml');
        $html = $template->render();

        $response = new Response();
        $response->setContent($html);
        
        return $response;
        
    }

    public function writeMessageAction($request)
    {
        $model = new Guestbook();
        $model->setPosts($request->getParams());
        $template = new Template();
        $template->addData(array('savedMessages' => $message, 'server_message' => "Message successfully sent"));
        $template->setPath(__DIR__.'/../View/guestbook/index.phtml');
        $html = $template->render();

        $response = new Response();
        $response->setContent($html);

        return $response;

    }

    public function deleteMessageAction($request)
    {
        $model = new Guestbook();
        $id = $request->getParams()['id'];
        $model->deletePosts($id);
        echo "delete";
    }
}