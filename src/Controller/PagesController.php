<?php

namespace App\Controller;
use Cake\Event\Event;

class PagesController  extends AppController

{
    public function index()
    {
        $results = $this->Pages->find()->all();
        $this->set('pages', $results);

    }

    public function view($id)
    {
        debug('Visualizar: ' . $id);
        exit;

    }

    public function add()
        {
            $page =$this->Pages->newEntity();
            if ($this->request->is('post')) {
            $page = $this->Pages->patchEntity($page, $this->request->getData());

      }
            $this->set('page', $page);
        }
}
