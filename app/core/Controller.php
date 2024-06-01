<?php
    //create a class
    class Controller{
        //PHP Constructor
        public function __construct(){
            echo "Object is created.";
        }

        //Display method for home
        public function display($view, $data=[]){
            require_once "../app/view/".$view.".php";
        }

        //Core logic model method
        public function logic($model){
            require_once "..//app/model/".$model.".php";
            $obj_model = new $model;
            return $obj_model;
        }
    }
?>