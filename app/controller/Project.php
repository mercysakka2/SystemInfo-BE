<?php
class Project extends Controller{
    //Constructor
    public function __construct(){

    }

    //Default method
    public function index(){
        echo "this is project/index";
    }

    public function news(){
        $arr_data['title'] = "Personal Page";
        $this->display('template/header', $arr_data);
        $this->display("project/news", $arr_data);
        $this->display('template/footer');
    }
}

?>