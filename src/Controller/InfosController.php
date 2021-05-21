<?php
// src/Controller/infosController.php

namespace App\Controller;

class infosController extends AppController
{
    public function index()
    {
        $this->loadComponent('Paginator');
        $infos = $this->Paginator->paginate($this->Infos->find());
        $this->set(compact('infos'));
    }
}