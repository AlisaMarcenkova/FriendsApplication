<?php

namespace App\Controllers;

class UsersController{
    public function index(){
        var_dump("Show all users");
    }
    public function show($input){
        var_dump("Show single user" . $input);
    }
}