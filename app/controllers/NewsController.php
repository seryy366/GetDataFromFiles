<?php

namespace app\controllers;

class NewsController extends AppController {

    public function viewAction(){
        $news = \R::findAll('news');
        $this->set(compact('news'));
        $id = $this->route['id'];
        $post = \R::findOne('news', "id = ? ", [$id]);
        if(!$post){
            throw new \Exception('Страница не найдена', 404);
        }
        $this->setMeta($post->title);
        $this->set(compact('post','news'));
}

}