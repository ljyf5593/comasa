<?php defined('SYSPATH') or die('No direct script access.');
class Controller_Home extends Controller{

    public function action_Index(){
        $this->response->body('hello word');
    }
}