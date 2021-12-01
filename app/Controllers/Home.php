<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
       	$user = "느흥!";
        $data = ['user' => $user];
	return view('home/home',$data);
    }
}
