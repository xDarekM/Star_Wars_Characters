<?php


namespace App\Http\Controllers;


use Illuminate\Http\Request;

class UserController
{


    public function store(Request $request){
        $name = $request-> input('name');
    }



}
