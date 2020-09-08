<?php 

namespace Omini\Controller;

use Omini\View\View;

class PageController
{
    public function index()
    {
        $view = new View('site/index.phtml');
        $view->name="Matheus Rodrigues dos Santos";
        return $view->render();
    }
}