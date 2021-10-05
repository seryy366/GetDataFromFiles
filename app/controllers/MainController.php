<?php

namespace app\controllers;



class MainController extends AppController {

    public function indexAction(){

        $news = \R::findAll('news');
        $this->set(compact('news'));
        $this->setMeta('Главная страница', 'Описание...', 'Ключевики...');


    }

}