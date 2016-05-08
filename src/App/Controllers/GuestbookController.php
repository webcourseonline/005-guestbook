<?php

namespace App\Controllers;

use Webcourse\Controller;
use Webcourse\Response;

class IndexController extends Controller {
    
    
    public function indexAction(){

        $response = new Response();
        $response->setContent("IndexController:indexAction");
        
        return $response;
        
    }
    
}