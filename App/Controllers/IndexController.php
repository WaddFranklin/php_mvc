<?php

    namespace App\Controllers;
    use SON\Controller\Action;
    use SON\DI\Container;

    class IndexController extends Action{
        
        public function index() {
            
            $clients = Container::getModel('Client');
            $this->view->clients = $clients->fetchAll();
            $this->render('index');
        }
        
        public function contact() {
            
            $clients = Container::getModel('Client');
            $this->view->clients = $clients->find(2);
            $this->render('contact');
        }
        
    }
