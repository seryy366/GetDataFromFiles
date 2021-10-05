<?php

namespace app\controllers;

use app\models\AppModel;
use csv\base\Controller;

class AppController extends Controller{

    public function __construct($route){
        parent::__construct($route);
        new AppModel();
        if(isset($_POST['formTemplate']) )
        {
            $varTemplate = $_POST['formTemplate'];
//            var_dump($varTemplate);

        }
        $this->set('$varTemplate');
    }

}